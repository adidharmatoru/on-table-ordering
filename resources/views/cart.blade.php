@php($i=0)
@php($total = 0)

@if(($counts)==0)
    <a href="#" ><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i><span class="badge" style="background-color: #333333; position: relative; top: -15px;">0</span></a>
<div id="cartDrop" class="dropdown-content cart">
    <div class="col-md-12 p-t-45 p-b-30">
        <div class="wrap-text-welcome t-center">
            <h3 class="tit10 t-center">Keranjang belanja anda kosong </h3>
            <br>
            <p class="t-center m-b-22 size3 m-l-r-auto">Silahkan klik tombol <span>add</span> untuk menambah belanjaan</p>
        </div>
    </div>
</div>
@else
<a href="#" ><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i><span class="badge" style="background-color: #333333; position: relative; top: -15px;">{{$counts}}</span></a>
<div id="cartDrop" class="dropdown-content">
    <table class="table table-borderless" cellspacing="0" width="100%">
        <tr>
            <td>No</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Harga Satuan (Rp)</td>
            <td>Qty</td>
            <td>Action</td>
        </tr>
        @foreach($cart as $row)
            @php($i+=1)
            <tr>
                <td valign="middle">{{$i}}.</td>
                <td><img width="90px" height="120px" src="{{ asset('images')}}/{{$row->products->image}}" alt=""></td>
                <td valign="middle">{{$row->products->title}}</td>
                <td>{{$row->products->price}}</td>
                <td>{{$row['qty']}}</td>
                <td valign="middle"><a class="delete" id='{{$row->products->id}}' href="#" onclick="event.preventDefault();" ><i class="fa fa-trash"></i></a></td>
            </tr>
            @php($total += $row->products->price*$row['qty'])
        @endforeach
        <tr>
            <td colspan="6"><hr></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2" >Total :</td>
            <td colspan="2">Rp {{$total}}</td>
            <td style="text-align: center" colspan="2"><button href="{{route('checkout')}}" class="btn3 size12 txt11">Checkout</button></td>
        </tr>
    </table>
</div>

@endif