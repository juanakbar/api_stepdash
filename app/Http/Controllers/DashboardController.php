<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $userCount = Role::where('name', 'Customer')->first()->users->count();
        $driverCount = Role::where('name', 'Driver')->first()->users->count();
        $mekanikCount = Role::where('name', 'Mekanik')->first()->users->count();
        $adminCount = Role::where('name', 'Super Admin')->first()->users->count();
        $orders = DB::table('orders')
            ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
            ->select(
                'orders.id_layanan',
                'layanans.nama_layanan',
                DB::raw('DATE(orders.created_at) as order_date'),
                DB::raw('count(orders.id) as total_orders')
            )
            ->groupBy('orders.id_layanan', 'layanans.nama_layanan', 'order_date')
            ->orderBy('order_date', 'asc')
            ->get();
        $allCount = [
            'userCount' => $userCount,
            'driverCount' => $driverCount,
            'mekanikCount' => $mekanikCount,
            'adminCount' => $adminCount,
            'orders' => $orders,
        ];
        return view('dashboard', [
            'datas' => $allCount,
        ]);
    }
}
