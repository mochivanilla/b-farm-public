@extends('layouts.template')
@section('content')
<div class="section-header my-5">
    <br>
    <div class="row mx-4">
        <div class="col-2"></div>
        <div class="col-4">
            <img src="{{ 'http://b-farm.test/'.$response->data->gambar }}" alt="{{ $response->data->judul_menu }}" class="rounded img-fluid" width="300px" height="200px">
            <br><br>
            <h3>{{ $response->data->judul_menu }}</h3>
            <p class="text-dark ">Bahan-bahan :</p>
            {{ $response->data->bahan }}
        </div>
        <div class="col-4 border border-success rounded">
            Langkah-langkah :
            <br>    
            {{ $response->data->langkah }}
        </div>
        <div class="col-2"></div>
    </div>
</div>    
<div class="my-xl">
    <br>
    <br>
    <br>
    <br>
</div>
@endsection