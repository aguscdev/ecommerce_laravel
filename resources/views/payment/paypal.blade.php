@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">PESANAN ANDA TELAH DITEMPATKAN</h3>
        <p class="text-center">Nomor pesanan Anda adalah <b>{{$who_buying->id}}</b> dan total pembayaran adalah <b>Rp. {{$who_buying->grand_total}}</b> </p>
        <p class="text-center">Silakan melakukan pembayaran dengan men Transfer ke nomor rekening di bawah ini Pembayaran</p>
        <p class="text-center">Kirim bukti pembayaran ke Tlpn/WA: 085778783602</p>

        <section class="content-header">
            
            <div class="row">
                <div class="text-center">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <table class="table table-bordered">
                            <h2>BCA</h2><br>
                            <h2>A/n Agus Cahyadi</h2><br>
                            <h2>Nomor Rekening: 7640533093</h2><br>
                            <h2>Terimakasih Telah Berbelanja Di AnaAja</h2>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
            </section>

        <!-- <div class="text-center">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="henglayshops@gmail.com">
            <input type="hidden" name="item_name" value="Buyer ({{$who_buying->name}})">
            <input type="hidden" name="amount" value="{{$who_buying->grand_total}}">
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" name="submit"
                   src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                   alt="PayPal - The safer, easier way to pay online">
        </form>
        </div> -->
       
            <form action="{{url('/submit-order')}}" method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <input type="hidden" name="users_id" value="{{$who_buying->users_id}}">
                <input type="hidden" name="users_email" value="{{$who_buying->users_email}}">
                <input type="hidden" name="name" value="{{$who_buying->name}}">
                <input type="hidden" name="address" value="{{$who_buying->address}}">
                <input type="hidden" name="city" value="{{$who_buying->city}}">
                <input type="hidden" name="state" value="{{$who_buying->state}}">
                <input type="hidden" name="pincode" value="{{$who_buying->pincode}}">
                <input type="hidden" name="country" value="{{$who_buying->country}}">
                <input type="hidden" name="mobile" value="{{$who_buying->mobile}}">
                <input type="hidden" name="shipping_charges" value="0">
                <input type="hidden" name="order_status" value="success">
              
                <div class="step-one">
                    <h2 class="heading">Dikirim ke</h2>
                </div>
                <section class="content-header">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th width="30%">Nama</th>
                                <td>:{{$who_buying->name}}</td>
                            </tr> 
                            <tr>
                                <th width="30%">Alamat</th>
                                <td>:{{$who_buying->address}}</td>
                            </tr> 
                            <tr>
                                <th width="30%">Kota</th>
                                <td>:{{$who_buying->city}}</td>
                            </tr>
                            <tr>
                                <th width="30%">Profinsi</th>
                                <td>:{{$who_buying->state}}</td>
                            </tr>  
                            <tr>
                                <th width="30%">Negara</th>
                                <td>:{{$who_buying->country}}</td>
                            </tr>    
                            <tr>
                                <th width="30%">Kode Pengiriman</th>
                                <td>:{{$who_buying->pincode}}</td> 
                            </tr>  
                            <tr>
                                <th width="30%">Nomor Handphone</th>
                                <td>:{{$who_buying->mobile}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            </form>
                  
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection