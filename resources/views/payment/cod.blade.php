@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">PESANAN ANDA TELAH DITEMPATKAN</h3>
        <p class="text-center">Terima kasih atas Pesanan Anda yang menggunakan Opsi Pengiriman Tunai</p>
        <p class="text-center">Kami akan menghubungi Anda melalui Email Anda (<b>{{$user_order->users_email}}</b>) atau Nomor Telepon Anda (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection