 @extends('main')
 @section('content')
 @section('title', 'Welcome to Admin panel')
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1>Branch</h1>
 				</div>
 				<div class="col-sm-6">
 					<ol class="breadcrumb float-sm-right">
 						<li class="breadcrumb-item">
 							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i>
 								Add Branch
 							</button>
 						</li>
 					</ol>
 				</div>
 			</div>
 		</div><!-- /.container-fluid -->
 	</section>
 	<!-- Add modal -->
 	<section class="content">
 		<div class="modal fade" id="modal-add">
 			<div class="modal-dialog modal-lg">
 				<form action="{{route('branch.save')}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					<div class="modal-content">
 						<div class="modal-header">
 							<h4 class="modal-title">Add Branch</h4>
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 								<span aria-hidden="true">&times;</span>
 							</button>
 						</div>
 						<div class="modal-body">
 							<div class="form-group">
 								<label for="exampleInputEmail1">Name</label>
 								<input type="text" class="form-control" placeholder="Branch name" name="name" required>
 							</div>
 							<div class="form-group">
                  <label>Zone</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true" name="zone">
                  	@foreach ($zones as $zone)
                    <option selected="selected" data-select2-id="14" value="{{$zone->id}}">{{$zone->zone_name}}</option>
                    @endforeach 
                  </select>
                </div>
 							<div class="form-group">
 								<label for="exampleInputFile">Image</label>
 								<div class="input-group">
 									<div class="custom-file">
 										<input type="file" class="custom-file-input" name="image" required>
 										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
 									</div>
 									<div class="input-group-append">
 										<span class="input-group-text" id="">Upload</span>
 									</div>
 								</div>
 							</div>
 								 	<div class="form-group">
 									<label for="exampleInputEmail1">Phone</label>
 									<input type="text" class="form-control" placeholder="Phone number" name="phone" required>
 								</div>
 								 								 	<div class="form-group">
 									<label for="exampleInputEmail1">Location</label>
 									<input type="text" class="form-control" placeholder="Location" name="location" required>
 								</div>
 								 <div class="form-group">
 									<label for="exampleInputEmail1">Google Map</label>
 									<input type="text" class="form-control" placeholder="Location" name="map">
 								</div>
 							<div class="mb-3">
 								<label for="exampleInputEmail1">Delivery Zone</label>
 								<textarea class="textarea" placeholder="Place some text here" name="delivery" 
 								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
 							</div>
 						</div>
 						<div class="modal-footer justify-content-between">
 							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 							<button type="submit" class="btn btn-primary">Save</button>
 						</div>
 					</form>
 				</div>
 				<!-- /.modal-content -->
 			</div>
 			<!-- /.modal-dialog -->
 		</div>
 		<!-- /.modal -->

 		<!-- Edit modal -->
 		@foreach ($Branchs as $branch)
 		<div class="content">
 			<div class="modal fade" id="Modaledit-{{$branch['id']}}">
 				<div class="modal-dialog modal-lg">
 					<form action="{{route('branch.update',$branch->id)}}" method="POST" enctype="multipart/form-data">
 						@csrf
 						<div class="modal-content">
 							<div class="modal-header">
 								<h4 class="modal-title">Update Branch</h4>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<div class="modal-body">
 								<div class="form-group">
 									<label for="exampleInputEmail1">Branch name</label>
 									<input type="text" class="form-control" placeholder="title" name="name" value="{{$branch->name}}" required>
 								</div>
 								 							<div class="form-group">
                  <label>Branch Zone</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true" name="zone">
                  	@foreach ($zones as $zone)
                    <option selected="selected" {{($branch->zone_id == $zone->id) ? 'selected' : ''}} value="{{$zone->id}}">{{$zone->zone_name}}</option>
                    @endforeach 
                  </select>
                </div>
 								<div class="form-group">
 									<label for="exampleInputFile">Image</label>
 									<div class="input-group">
 										<div class="custom-file">
 											<input type="hidden" class="custom-file-input" name="old_image" value="{{$branch->image}}">
 											<input type="file" class="custom-file-input" name="image">
 											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
 										</div>
 										<div class="input-group-append">
 											<span class="input-group-text" id="">Upload</span>
 										</div>
 									</div>
 								</div>
 								 							<div class="form-group">
 									<label for="exampleInputEmail1">Phone</label>
 									<input type="text" class="form-control" placeholder="Phone number" name="phone" value="{{$branch->contact}}" required>
 								</div>
 								 	<div class="form-group">
 									<label for="exampleInputEmail1">Location</label>
 									<input type="text" class="form-control" placeholder="title" name="location" value="{{$branch->location}}" required>
 								</div>
 									<div class="form-group">
 									<label for="exampleInputEmail1">Google map</label>
 									<input type="text" class="form-control" placeholder="title" name="map" value="{{$branch->google_map}}">
 								</div>
 								<div class="mb-3">
 									<label for="exampleInputEmail1">Delivery zone</label>
 									<textarea class="textarea" placeholder="Place some text here" name="delivery"
 										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$branch->delivery_zone}}</textarea>
 									</div>
 								</div>
 								<div class="modal-footer justify-content-between">
 									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 									<button type="submit" class="btn btn-primary">Update</button>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 				@endforeach
 				<!-- /.modal -->
 				<!-- Table news -->
 				<div class="card">
 					<div class="card-header">
 						<h3 class="card-title">Manage Branchs</h3>
 							</div>
 							<div class="card-body p-0" style="display: block;">
 								<table class="table table-striped projects">
 									<thead>
 										<tr>
 											<th style="width: 1%">
 												No
 											</th>
 											<th style="width: 50%">
 												Branch name
 											</th>
 											<th style="width: 9%">
 												Image
 											</th>
 											<th style="width: 10%">
 												Zone
 											</th>
 											<th style="width: 10%">
 											Created 
 											</th>
 											<th style="width: 20%">
 												Action
 											</th>
 										</tr>
 									</thead>
 									<tbody>
 										@foreach ($Branchs as $branch)
 										<tr>
 											<td>
 												{{$branch->id}}
 											</td>
 											<td>
 												<a>
 													{{$branch->name}}
 												</a>
 											</td>
 											<td>
 												<ul class="list-inline">
 													<li class="list-inline-item">
 													</ul>
 													<img alt="Avatar" src="../../images/branchs/{{$branch->image}}" style="width: 80px;height: 50px;">
 												</li>
 											</ul>
 										</td>
 										<td class="project-state">
 											<span class="badge badge-success">{{$branch->zone->zone_name}}</span>
 										</td>
 										 										<td>
 											<span>{{$branch->created_at}}</span>
 										</td>
 										<td class="project-actions text-right">
 											<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modaledit-{{$branch['id']}}">
 												<i class="fas fa-pencil-alt">
 												</i>
 												Edit
 											</button>
 											<button class="btn btn-danger btn-sm" onclick="confirmdelete('{{$branch['id']}}')">
 												<i class="fas fa-trash">
 												</i>
 												Delete
 											</button>
 										</td>
 									</tr>
 									@endforeach
 								</tbody>
 							</table>
 						</div>
 						<!-- /.card-body -->
 					</div>
 				</section>
 				<!-- /.content -->
 			</div>
 		</div>
 		@endsection

 		<script type="text/javascript">
 			function confirmdelete(id){
 				var del = confirm('Are you sure to delete this !');
 				if(del){
 					var deletes = "{{route('branch.delete')}}/" + id;
 					window.location.href = deletes;
        }else {
            console.log('no');
        }

    }
</script>