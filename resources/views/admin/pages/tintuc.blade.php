@extends('admin.master')
@section('content')
<p>
<a href="{{route('add-tintuc')}}" class="btn btn-large btn-primary">Thêm bài viết</a>
</p>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Quản lí bài viết</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                                  <th>Hình ảnh</th>
                                  <th>Tiêu đề</th>
                                  <th>Tóm tắt</th>
                                  <th>Nội dung</th>
								  <th>Ngày đăng</th>                                                         
								  <th>Trạng thái</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

                            @foreach($tintuc as $news)
							<tr>
                                <td>
                                    <img style="height:100px" src="upload/tintuc/{{$news->hinhanh}}">
                                </td>
								<td>{{$news->tieude}}</td>
								<td class="center">{{$news->tomtat}}</td>
								
								<td class="center">
									{{$news->noidung}}
                                </td>
                                <td class="center">
									{{$news->updated_at}}
                                </td>
                                <td class="center">
                                    @if($news->status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-important">Banned</span>
                                    @endif
								</td>
								<td class="center">
						
									
									<a class="btn btn-info" href="{{route('editTinTuc', $news->id)}}">
										<i class="halflings-icon white edit"></i>                                            
									</a>

									<button class="btn btn-danger updateTinTuc" data-target="#deleteModalTinTuc" data-toggle="modal" data-id="{{$news->id}}">
										<i class="halflings-icon white trash"></i> 										
									</button>										
								</td>
								
                            </tr>
                            @endforeach
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
	<div id="deleteModalTinTuc" class='modal fade' role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p>Bạn có chắc chắn muốn xóa không?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary"><a href="admin/delete-tintuc" id="delIdTinTuc">Có</a></button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<script src="static/js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$('.updateTinTuc').click(function(){
				var idTT = $(this).attr('data-id')
				console.log(idTT)
				$('#delIdTinTuc').attr('href', 'admin/delete-tintuc-'+idTT);
			})
		})
	</script>
@endsection