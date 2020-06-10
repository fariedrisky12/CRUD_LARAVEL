<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class crudController extends Controller
{    
    public function insertData(Request $request){
        $dosenwali = DB::table('dosenwali')                    
                    ->where('nama', $request->select)
                    ->value('id');

        DB::table('mahasiswa')
        ->insert([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'id' => $request->idmahasiswa,
            'id_dosenwali' => $dosenwali            
        ]);        
        return redirect('/home');
    }

    public function deleteData($id){                
        DB::table('mahasiswa')
        ->where('id', $id)
        ->delete();                     
        return redirect('/home');               
    }

    public function editData(Request $request, $id){
        $dosenwali = DB::table('dosenwali')                    
                    ->where('nama', $request->select)
                    ->value('id');

        DB::table('mahasiswa')
        ->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'id' => $request->idmahasiswa,
            'id_dosenwali' => $dosenwali            
        ]);        
        return redirect('/home');
    }
}
