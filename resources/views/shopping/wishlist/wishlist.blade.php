@extends('shopping.master.master')
@section('title', 'Wishlist - Man Woman Clothes')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Wishlist Area Strat-->
<div class="wishlist-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">remove</th>
                                    <th class="li-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-stock-status">Stock Status</th>
                                    <th class="li-product-add-cart">add to cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlist as $item)
                                    <tr>
                                        <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        <td class="li-product-thumbnail"><a href="#"><img  style="width:90px" src="/backend/img/{{ $item->product->img }}" alt=""></a></td>
                                        <td class="li-product-name"><a href="#">{{ $item->product->name }}</a></td>
                                        <td class="li-product-price"><span class="amount">{{ number_format($item->product->price, 0, '', '.') }} VND</span></td>
                                        <td class="li-product-stock-status"><span class="in-stock">@if ($item->product->state == 1) in stock @else sold out @endif</span></td>
                                        <td class="li-product-add-cart"><a onclick="return addCartQuick({{ $item->id }})" >add to cart</a></td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    @parent

    <script>
        function addCartQuick(id){
            $.get("/cart/add/"+ id, function(data){
                if( data == 'success'){
                    // console.log("add cart");
                    alert('Add to cart done!!!');
                    location.reload();
                } else {
                    alert('Add to cart failed!!!');
                }
            });
        }
    </script>
@endsection