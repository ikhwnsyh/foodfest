@extends('layouts.main')
@section('container')


<div class="container">

    <form action="" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="judul" placeholder="Judul Event" value="{{ $event->judul }}">
            <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $event->slug }}">
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                value="{{ $event->deskripsi }}">
            <input type="text" name="lokasi" placeholder="Lokasi Event" value="{{ $event->lokasi }}">
            <img src="{{asset(" /gambar/event".$event->gambar)}}" alt="">
            <input type="text" name="gambar" placeholder="gambar" value="{{ $event->gambar }}">
            <input type="date" name="tanggal" value="{{ $event ->tanggal }}">

            <button type="submit">Update</button>
    </form>
</div>
@endsection