@extends('admin.master.master')
@section('title', "Admin - User")
@section('user','class=active')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="/admin"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="/admin/user">Quản lý thành viên</a></li>
			<li class="active">{{  $user->full }}</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thành viên: {{ $user->full }}</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-8">
							@if (session('thongbao'))
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>{{ session('thongbao') }}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
                            @endif
							<form method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label>Họ & Tên</label>
									<input type="text" name="user_full" class="form-control" value="{{ $user->full }}" placeholder="">
									{{ showError($errors, 'user_full')}}
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="user_email" required value="{{ $user->email }}" class="form-control">
									{{ showError($errors, 'user_email')}}
								</div>
								<div class="form-group">
									<label>Old Password</label>
									<input type="password" name="password" required  class="form-control">
									{{ showError($errors, 'password')}}
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="password" name="new_password" required class="form-control">
									{{ showError($errors, 'new_password')}}
								</div>  
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="user_address" value="{{ $user->address }} "  class="form-control">
									{{ showError($errors, 'user_address')}}
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="phone" name="user_phone" value="{{ $user->phone }} "  class="form-control">
									{{ showError($errors, 'user_phone')}}
								</div>
								<div class="form-group">
									<label>Quyền</label>
									<select name="user_level" class="form-control">
										<option @if ($user->level == 1) selected @endif value=1>Admin</option>
										<option @if ($user->level == 2) selected @endif value=2>Member</option>
									</select>
								</div>
								<button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
								<button type="reset" class="btn btn-default">Làm mới</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	
</div>	<!--/.main-->	
@endsection