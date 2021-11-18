@extends('layouts.template')
@section('content')
<div class="hero" style="background-image: url({{ asset('assets/images/bg_selada.jpg') }});"></div>
<div>
    <center class="my-4">
        <h2>Rekomendasi Menu</h2>
    </center>
    @if (isset($response->data))
    @foreach ($response->data as $item)
    <a href="{{ route('rekomendasi.show', $item->id) }}">
        <div class="row border border-success rounded bg-primary mx-2 my-2">
            <div class="col-5 align-self-center text-start">
                <h4 class="text-light"> {{ $item->judul_menu }} </h4>
            </div>
            <div class="col-4  align-self-center">
                <img src="{{ 'http://127.0.0.1:8000/'.$item->gambar }}" alt="{{ $item->judul_menu }}" class="rounded img-fluid" width="200px" height="100px">
            </div>
        </div>
    </a>
    @endforeach
    @else
    <p>Belum ada data.</p>
    @endif
</div>    
@endsection
