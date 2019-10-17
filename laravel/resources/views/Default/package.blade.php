 @extends('main')
 @section('content')
 @section('title', 'Welcome to Admin panel')
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1>Package</h1>
 				</div>
 				<div class="col-sm-6">
 					<ol class="breadcrumb float-sm-right">
 						<li class="breadcrumb-item">
 							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i>
 								Add Package
 							</button>
 						</li>
 					</ol>
 				</div>
 			</div>
 		</div>
 	</section>
 	<!-- Add modal -->
 	<section class="content">
 		<div class="modal fade" id="modal-add">
 			<div class="modal-dialog modal-lg">
 				<form action="{{route('package.save')}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					<div class="modal-content">
 						<div class="modal-header">
 							<h4 class="modal-title">Add package</h4>
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 								<span aria-hidden="true">&times;</span>
 							</button>
 						</div>
 						<div class="modal-body">
 							<div class="form-group">
 								<label for="exampleInputEmail1">Package name</label>
 								<input type="text" class="form-control" placeholder="Package name" name="name" required>
 							</div>
 							<div class="form-group">
 								<label>Price</label>
 								<input type="text" class="form-control" placeholder="Price" name="price" required>
 							</div>
 							<div class="form-group">
 								<label>Box Price</label>
 								<input type="text" class="form-control" placeholder="Price" name="box_price" required>
 							</div>
 							<div class="mb-3">
 								<label for="exampleInputEmail1">Description</label>
 								<textarea class="textarea" placeholder="Place some text here" name="description" required 
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
 		@foreach ($Packages as $package)
 		<div class="content">
 			<div class="modal fade" id="Modaledit-{{$package['id']}}">
 				<div class="modal-dialog modal-lg">
 					<form action="{{route('package.update',$package->id)}}" method="POST" enctype="multipart/form-data">
 						@csrf
 						<div class="modal-content">
 							<div class="modal-header">
 								<h4 class="modal-title">Update Package</h4>
 								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 									<span aria-hidden="true">&times;</span>
 								</button>
 							</div>
 							<div class="modal-body">
 								<div class="form-group">
 									<label for="exampleInputEmail1">Package name</label>
 									<input type="text" class="form-control" placeholder="Package name" name="name" value="{{$package->name}}" required>
 								</div>
 								<div class="form-group">
 									<label for="exampleInputEmail1">Price</label>
 									<input type="text" class="form-control" placeholder="Price" name="price" value="{{$package->price}}" required>
 								</div>
 								<div class="form-group">
 									<label for="exampleInputEmail1">Box Price</label>
 									<input type="text" class="form-control" placeholder="Price" name="box_price" value="{{$package->box_price}}" required>
 								</div>
 								<div class="mb-3">
 									<label for="exampleInputEmail1">Description</label>
 									<textarea class="textarea" placeholder="Place some text here" name="description" required value="{{$package->description}}"
 										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$package->description}}</textarea>
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
 				<!-- Table package -->
 				<div class="card">
 					<div class="card-header">
 						<h3 class="card-title">Manage Package</h3>
 					</div>
 					<div class="card-body p-0" style="display: block;">
 						<table class="table table-striped projects">
 							<thead>
 								<tr>
 									<th style="width: 1%">
 										No
 									</th>
 									<th style="width: 20%">
 										Package name
 									</th>
 									<th style="width: 30%">
 										Description
 									</th>
 									<th style="width: 9%">
 										Price/Kip
 									</th>
 									<th style="width: 10%">
 										Box price
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
 								@foreach ($Packages as $package)
 								<tr>
 									<td>
 										{{$package->id}}
 									</td>
 									<td>
 										<a>
 											{{$package->name}}
 										</a>
 										<br>
 										<small>Created
 											{{$package->created_at}}
 										</small>
 									</td>
 									<td>
 										<p>{{$package->description}}</p>
 									</td>
 									<td>
 									 {{$package->price}}
 									</td>
 									<td class="project-state">
 										<span class="badge badge-success">{{$package->box_price}}</span>
 									</td>

 									<td>
 										<span>{{$package->created_at}}</span>
 									</td>
 									<td class="project-actions text-right">
 									<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modaledit-{{$package['id']}}">
 										<i class="fas fa-pencil-alt">
 										</i>
 										Edit
 									</button>
 									<button class="btn btn-danger btn-sm" onclick="confirmdelete('{{$package['id']}}')">
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
 			<ul class="pagination pagination-primary mt-4 text-center">
 				{{$Packages->links()}}
 			</ul>
 			<!-- /.card -->
 		</section>
 		<!-- /.content -->
 	</div>
 </div>
 @endsection

 <script type="text/javascript">
 	function confirmdelete(id){
 		var del = confirm('Are you sure to delete this !');
 		if(del){
 			var deletes = "{{route('package.delete')}}/" + id;
 			window.location.href = deletes;
        }else {
        }

    }
</script>