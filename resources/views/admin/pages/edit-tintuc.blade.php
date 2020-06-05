@extends('admin.master')
@section('content')
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm bài viết</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{route('editTinTuc',$tintuc->id)}}"enctype="multipart/form-data">
                            @csrf
						  <fieldset>
                          <div class="control-group">
								<label class="control-label" for="focusedInput">Tiêu đề</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="tieude" type="text" value="{{$tintuc->tieude}}">
								</div>
                            </div>
                            <div class="control-group">
								<label class="control-label" for="focusedInput">Tóm tắt</label>
								<div class="controls">
								  <textarea rows="4" cols="250" class="input-xlarge" name="tomtat" >{{$tintuc->tomtat}}</textarea>
								</div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Nội dung</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="noidung" >{{$tintuc->noidung}}   </textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image">
                                <br>
                                <div><img style="height:100px" src="upload/tintuc/{{$tintuc->hinhanh}}"></div>
							  </div>
							</div>          
                            <div class="control-group">
                                <div class="form-check">
                                <label class="control-label"></label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status"> Hiển thị trang chủ   
                                </div>
                            </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection