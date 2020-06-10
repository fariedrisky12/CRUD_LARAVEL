<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class WebController extends Controller
{
    public function home(){
        $result = DB::table('mahasiswa')->get();
        if (!$result->isEmpty()){
            $All = DB::table('mahasiswa')
            ->join('dosenwali', 'dosenwali.id','=', 'id_dosenwali')
            ->select('mahasiswa.*', 'dosenwali.nama as nama_dosenwali')
            ->orderBy('mahasiswa.id', 'asc')
            ->get();
            return view('home', ['All' => $All]);
        }
        else{
            Session::flash('message', 'Database Tidak Ada');
            return view('home');
        }
    }

    public function addForm(){
        $dosenwali = DB::table('dosenwali')->get();
        return view('tambah', ['dosenwali' => $dosenwali]);
    }

    public function editForm($id){
        $mahasiswa = DB::table('mahasiswa')                
                ->where('mahasiswa.id', $id)                
                ->get();
        $dosenwali = DB::table('dosenwali')->get();
        return view('edit', ['mahasiswa' => $mahasiswa, 'dosenwali' => $dosenwali]);
    }
}
