@extends('shopping.master.master')
@section('title', 'Cart - Man Woman Clothes')


@section('content')
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
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
                                        <th class="li-product-quantity">Quantity</th>
                                        <th class="li-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="li-product-remove" style="cursor: pointer"><a onclick="return delItem('{{ $item->id }}','{{ $item->name }}')" ><i class="fa fa-times"></i></a></td>
                                            <td class="li-product-thumbnail"><a href="#"><img style="width:90px" src="/backend/img/{{$item->attributes->img}}" Salt="Li's Product Image"></a></td>
                                            <td class="li-product-name"><a href="#">{{ $item->name }}</a></td>
                                            <td class="li-product-price"><span class="amount">{{ number_format($item->price, 0, '', '.') }} VND</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" onchange="return update_cart('{{$item->id}}', this.value)" value="{{ $item->quantity }}" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">{{ number_format($item->price * $item->quantity, 0, '', '.') }} VND</span></td>
                                        </tr>
                                    @endforeach	
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal <span>$130.00</span></li>
                                        <li>Total <span>$130.00</span></li>
                                    </ul>
                                    <a href="#">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
@endsection

@section('script')
	@parent
	<script>
		// function update cart increase or decrease amount prd
		function update_cart(id, qty){
			$.get("/cart/update/"+id+"/"+qty, function(data){
				if (data == "success"){
					location.reload();
				} else {
					alert('Connection failed!!');
				}
			});
		}
		function delItem(id,name){
			if(confirm('Are you sure to delete '+name+' from cart?')){
				$.get("/cart/delete/"+id, function(data){
					if(data == "success"){
						location.reload();
					} else {
						alert('Delete failed..');
					}
				});
			}
		}
	</script>
@endsection