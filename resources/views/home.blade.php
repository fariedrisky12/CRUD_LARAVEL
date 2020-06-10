@extends('main')
@section('judul', 'CRUD With Laravel | Home')
@section('kontenhome')
<div class="row mx-auto justify-content-between p-3">
        <div class="col-2">          
          <a class="btn btn-secondary" href="/">HOME</a> 
        </div>               
    </div> 
<div class="myBtn">                       
    <a href="/add" class="btn btn-dark">
        Tambahkan Mahasiswa
    </a>               
</div>    
@if($message = Session::get('message'))
    <h1 class="text-center">{{$message}}</h1>
@else
<table class="table text" style="width:100%;">
        <tr>
        <th >
            <b>NIM</b>
    </th>
        <th ><b>NAMA MAHASISWA</b></th>        
        <th ><b>JENIS KELAMIN</b></th>
        <th ><b>NAMA DOSEN WALI</b></th>
        <th colspan="2"><b>SUNTING</b></th>
    </tr>    
    @foreach($All as $data)    
    <tr >
        <td class="cntr">{{$data->id}}</td>
        <td class="cntr">{{$data->nama}}</td>        
        <td class="cntr">{{$data->jenis_kelamin}}</td>        
        <td class="cntr">{{$data->nama_dosenwali}}</td>
        <td class="cntr">
            <a class="edit" href="/edit/id={{$data->id}}">
                <i class="fa fa-pencil" aria-hidden="true"></i>                            
            </a>
        </td>
        <td class="cntr">
            <a class="trash" href="/delete/id={{$data->id}}">
                <i class="fa fa-trash" aria-hidden="true"></i>                            
            </a>
        </td>     
    </tr>         
    @endforeach
@endif

@endsection