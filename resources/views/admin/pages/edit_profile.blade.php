@extends('admin.master')
@section('content')

			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			


			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin cá nhân</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{route('editUser')}}">
						@csrf
							<fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Username</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="username" type="text" value="{{$user->username}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="password" type="text" value="{{$user->password}}">
								</div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Họ và Tên</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="fullname" type="text" value="{{$user->fullname}}">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Số điện thoại</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="phone" type="text" value="(+84){{$user->phone}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Địa chỉ</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="address" type="text" value="{{$user->address}}">
								</div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="email" type="text" value="{{$user->email}}">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Website</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="website" type="text" value="{{$user->website}}">
								</div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Mô tả</label>
								<div class="controls">
									<textarea rows="10" cols="500" name="description">{{$user->description}}</textarea>								 
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Uneditable input</label>
								<div class="controls">
								  <span class="input-xlarge uneditable-input">Some value here</span>
								</div>
							  </div>

					
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Lưu thay đổi</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			

    

	</div><!--/.fluid-container-->
	
			<!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
@endsection