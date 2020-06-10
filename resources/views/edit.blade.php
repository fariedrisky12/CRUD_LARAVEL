@extends('main')
@section('judul', 'CRUD | Edit')
@section('kontenedit')
<div class="row mx-auto justify-content-between p-3">
        <div class="col-2">          
          <a class="btn btn-secondary" href="/">HOME</a> 
        </div>               
    </div> 
<div class="tambah-box">
    <div class="text-center">
    <h3><b>Edit Data Mahasiswa</b></h3>
    @foreach($mahasiswa as $data)
        <form action="/edit/id={{$data->id}}" method="post" class="p-5">    
        @csrf    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" value="{{$data->nama}}" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="idmahasiswa" value="{{$data->id}}" autocomplete="off">
                </div>
            </div>            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>   
                <div class="col-sm-10">         
                    <div class="form-check form-check-inline">       
                        @if($data->jenis_kelamin == 'Laki-laki')                 
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1" checked>
                        @else
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                        @endif
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        @if($data->jenis_kelamin == 'Perempuan')                 
                        <input class="form-check-input"  type="radio" name="jk" id="inlineRadio2" value="2" checked>
                        @else
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                        @endif
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>               
            @endforeach
            <div class="form-group row dropdown mb-0">                          
                <label class="col-sm-2 col-form-label">Dosen Wali</label>                         
                <div class="col-sm-10">
                @foreach($dosenwali as $list)
                    @if($list->id == $data->id_dosenwali)
                    <a role="button" id="namadosenwali" class="custom-select col-md-6 text-dark" onclick="drop('selectdosenwali')">{{ $list->nama }}</a>                                                               
                    @endif
                @endforeach
                </div>
            </div>
            <div class="form-group row">                
                <div id="selectdosenwali" class="dropdown-content col-md-100">                        
                    <select class="custom-select plaintext col" name="select" size="10">                            
                        <option class="dosenwali">--Pilih dosenwali--</option>
                        @foreach($dosenwali as $list)
                            @if($list->id == $data->id_dosenwali)
                                <option selected class="dosenwali" value="{{ $list->nama }}">{{ $list->nama }}</option> 
                            @else
                            <option class="dosenwali" value="{{ $list->nama }}">{{ $list->nama }}</option> 
                            @endif
                        @endforeach 
                    </select>
                </div> 
            </div>    
            <div class="form-group row">                                           
                <input type="submit" name="Submit" class="btn btn-primary" value="Edit Data"></input>            
            </div>
        </form>
    </div>  
    @endsection