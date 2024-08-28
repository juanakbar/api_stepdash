<?php

namespace App\Http\Controllers\Api;

use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createCharge(Request $request)
    {
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $request->harga * 1,
            ],
            "credit_card" => [[
                "secure" => true,
            ]],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $request->harga,
                    'quantity' => 1,
                    'name' => $request->service_name,
                ],
            ],
            "gopay" => [
                "tokenization" => true,
                "phone_number" => "81574741542",
                "country_code" => "62"
            ],
            "user_id" => Auth::user()->id,
            "enable_payments" => array("cimb_clicks", "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "mandiri_ecash", "permata_va", "bca_va", "bni_va", "other_va", "gopay", "shopeepay", "indomaret", "alfamart", "danamon_online", "akulaku")
        ];
        $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
        return response()->json($paymentUrl);
    }

    public function storeOrder(Request $request)
    {
        // dd($request->all());
        $order = Order::create([
            'id_layanan' => $request->id_layanan,
            'id_user' => $request->id_user,
            'id_driver' => Auth::user()->id,
            'pickup' => $request->pickup,
            'dropoff' => $request->dropoff,
            'status' => $request->status,
        ]);
        return response()->json($order);
    }
    public function storePayment(Request $request)
    {
        $order = Pembayaran::create([
            "order_id" => $request->order_id,
            "total" => $request->total,
        ]);
        return response()->json($order);
    }
    public function getTotalPendapatanDriver()
    {
        $user = Auth::user();
        $roles = $user->getRoleNames(); // Mengambil semua peran pengguna
        $totalPendapatan = Order::where('id_driver', $user->id)
            ->whereHas('pembayaran') // Meload relasi pembayaran
            ->with('pembayaran') // Meload relasi pembayaran
            ->get()
            ->sum(function ($order) {
                return $order->pembayaran->first()->total ?? 0;
            });
        return response()->json($totalPendapatan);
    }
    public function history(Request $request)
    {
        $user = Auth::user();
        $roles = $user->getRoleNames(); // Mengambil semua peran pengguna

        if ($roles->contains('Driver') || $roles->contains('Mekanik')) {
            // Jika peran adalah Driver, ambil semua order yang terkait dengan driver
            $orders = Order::where('id_driver', $user->id)->where('id_layanan', $request->layanan)->whereHas('pembayaran')->with('pembayaran', 'user', 'driver', 'layanan')->orderBy('created_at', 'desc') // Urutkan berdasarkan kolom created_at dari yang terbaru
                ->get();
        } elseif ($roles->contains('Customer')) {
            // Jika peran adalah Customer, ambil semua order yang terkait dengan customer
            $orders = Order::where('id_user', $user->id)->where('id_layanan', $request->layanan)->whereHas('pembayaran')->with('pembayaran', 'user', 'driver', 'layanan')->orderBy('created_at', 'desc') // Urutkan berdasarkan kolom created_at dari yang terbaru
                ->get();
        } else {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Mengembalikan data dengan order dan pembayaran terkait
        return response()->json($orders->map(function ($order) {
            return [
                'order' => $order,
            ];
        }));
    }

    public function updateStatusOrder(Request $request)
    {
        $order = Order::find($request->id);
        $order->status = $request->status;
        $order->save();
        return response()->json($order);
    }
}
