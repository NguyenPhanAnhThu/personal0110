@extends('admin.master')
@section('content')


<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{action('AdminController@postAddVideo')}}" method="post">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">     
        <div class="control-group">
			<label class="control-label" for="focusedInput">Link</label>
			<div class="controls">
				<input class="input-xlarge focused" id="focusedInput" name="link" type="text" placeholder="This is focused…">
			</div>
        </div>          
        <div class="control-group">
            <div class="form-check">
                <label class="control-label"></label>
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status"> Hiển thị trang chủ   
            </div>
        </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Lưu</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end add Modal-->
<p><button class="btn btn-large btn-success"data-toggle="modal" data-target="#addModal">Thêm video</button></p>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
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
								  <th>Video</th>
								  
								  <th>Hiển thị</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                              @foreach($video as $i)
							<tr>
								<td>
								<iframe src="{{$i->link}}" title="W3Schools Free Online Web Tutorials"></iframe>		
                                    
                                </td>
								
								<td class="center">
                                    @if($i->status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-important">Banned</span>
                                    @endif
								</td>
								<td class="center">
									
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger updateVideo" href="#" data-toggle="modal" data-target="#deleteModalVideo" data-id="{{$i->id}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
                            @endforeach


						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
	<div id="deleteModalVideo" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p>Bạn có chắc chắn muốn xóa không?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">
						<a href="admin/delete-video" id="delIdVideo">Có </a>
					</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<script src="static/js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$('.updateVideo').click(function(){
				var idVideo = $(this).attr('data-id')
				$('#delIdVideo').attr('href', 'admin/delete-video-'+idVideo);
			})
		})
	</script>
@endsection