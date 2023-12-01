<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {   
       
        $listuser = DB::table('tbl_user')->get();

        
        return view('user.index', compact('listuser'));
    }

    public function tambahuser(Request $request)
    {   
      
        $gambar = $request->file('gambar');

        
        if ($gambar) {
           
            $namaFile = $gambar->getClientOriginalName();

            
            $gambar->move(public_path('img'), $namaFile);

           
            DB::table('tbl_user')->insert([
                'username' => $request->nama,
                'password' => $request->password,
                'alamat' => $request->alamat,
                'gol_darah' => $request->golDarah,
                'role' => $request->role,
                'imageuser' => $namaFile, // Simpan nama file ke dalam kolom 'gambar'
            ]);

            return response()->json(['message' => 'User added successfully']);
        } else {
            return response()->json(['error' => 'File gambar tidak ditemukan']);
        }
    }

}
