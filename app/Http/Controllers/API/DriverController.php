<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     *    @OA\Get(
     *       path="/drivers",
     *       tags={"Drivers"},
     *       operationId="Drivers",
     *       summary="Mengambil Data Driver",
     *       description="Mengambil Data Driver",
     *       @OA\Response(
     *           response="200",
     *           description="Ok",
     *           @OA\JsonContent
     *           (example={
     *               "success": true,
     *               "message": "Berhasil mengambil Driver",
     *               "data": {
     *                   "id": 1,
     *                   "nama": "John Doe",
     *                   "email": "johndoe@example.com",
     *                   "username": "johndoe",
     *                   "alamat": "Jl. Contoh No. 123",
     *                   "telepon": "08123456789",
     *                   "avatar": "avatar.jpg",
     *                   "created_at": "2023-08-01 12:00:00",
     *                   "updated_at": "2023-08-01 12:00:00",
     * 
     *              }
     *          }),
     *      ),
     *  )
     */
    public function index()
    {
        return true;
    }
}
