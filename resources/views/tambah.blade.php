@extends('main')
@section('judul', 'CRUD | Tambahkan')
@section('kontentambah')
<div class="row mx-auto justify-content-between p-3">
        <div class="col-2">          
          <a class="btn btn-secondary" href="/">HOME</a> 
        </div>               
    </div> 
<div class="tambah-box">
    <div class="text-center">
        <h3><b>Tambahkan Data Mahasiswa</b></h3>
    </div>
        <form action="/add/proses" method="post" class="p-5">
        {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="idmahasiswa" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>               
            <div class="form-group row dropdown mb-0">                          
                <label class="col-sm-2 col-form-label">Dosen Wali</label>                         
                <div class="col-sm-10">                
                    <a role="button" id="namaDosenWali" class="custom-select col-md-6 text-dark" onclick="drop('selectDosenWali')">--Pilih Dosen Wali--</a>                
                </div>
            </div>
            <div class="form-group row">                
                <div id="selectDosenWali" class="dropdown-content col-md-100">                        
                    <select class="custom-select plaintext col" name="select" size="10">                            
                        <option class="dosenwali">--Pilih Dosen Wali--</option>
                        @foreach($dosenwali as $list)                            
                            <option class="dosenwali" value="{{ $list->nama }}">{{ $list->nama }}</option>                             
                        @endforeach 
                    </select>
                </div> 
            </div>   
            <div class="form-group row">                        
                <input type="submit" name="Submit" class="btn btn-primary" value="Tambahkan"></input>
            </div>
        </form>
    </div>  
 </div>
@endsection