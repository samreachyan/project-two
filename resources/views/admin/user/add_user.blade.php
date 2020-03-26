@extends('admin.master.master')
@section('title', "Admin - User")
@section('user','class=active')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thêm Thành viên</h1>
		</div>
	</div>
	<!--/.row-->
<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading"><i class="fas fa-user"></i> Thêm thành viên</div>
				<form method="POST" enctype="multipart/form-data">
					@csrf
					<div class="panel-body">
						<div class="row justify-content-center" style="margin-bottom:40px">
						
							<div class="col-md-8 col-lg-8 col-lg-offset-2">
							
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="user_email" class="form-control" value=" {{ old('user_email') }}">
									{{ showError($errors, 'user_email')}}
								</div>
								<div class="form-group">
									<label>password</label>
									<input type="password" name="password" class="form-control">
									{{ showError($errors, 'password')}}
								</div>
								<div class="form-group">
									<label>Full name</label>
									<input type="text" name="user_full" class="form-control" value=" {{ old('user_full') }}">
									{{ showError($errors, 'user_full')}}
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="user_address" class="form-control" value=" {{ old('user_address') }}">
									{{ showError($errors, 'user_address')}}
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="phone" name="user_phone" class="form-control" value=" {{ old('user_phone') }}">
									{{ showError($errors, 'user_phone')}}
								</div>
							
								<div class="form-group">
									<label>Level</label>
									<select name="user_level" class="form-control">
										<option value="1">admin</option>
										<option selected value="2">user</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
									<button class="btn btn-success"  type="submit">Thêm thành viên</button>
									<button class="btn btn-danger" type="reset">Huỷ bỏ</button>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>

	</div>
</div>

	<!--/.row-->
</div>
@endsection