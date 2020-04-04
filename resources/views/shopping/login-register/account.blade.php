@extends('shopping.master.master')
@section('title', 'My Account - Man Woman Clothes')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Account Information</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1>My Account Page</h1>
                    @if (session('thongbao'))
                        <div class="alert alert-danger" role="alert"><strong>{{ session('thongbao') }} </strong></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
@endsection