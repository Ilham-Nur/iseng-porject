<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RiwayatDonorController extends Controller
{
    public function index()
    {   
        // $listlokasi = DB::table('tbl_lokasidonor')->get();
    
        // foreach ($listlokasi as $lokasi) {
        //     // Mengubah format tanggal
        //     $lokasi->tanggal = Carbon::parse($lokasi->tanggal)->format('H:i:s d-m-Y');
        // }
    
        return view('riwayatdonor.indexriwayatdonor');
    }
    

    // public function tambahlokasi(Request $request)
    // {   
      
       
           
    //         DB::table('tbl_user')->insert([
    //             'username' => $request->nama,
    //             'password' => $request->password,
    //             'alamat' => $request->alamat,
    //             'gol_darah' => $request->golDarah,
    //             'role' => $request->role,
    //         ]);

    //         return response()->json(['message' => 'User added successfully']);
       
    // }

}
