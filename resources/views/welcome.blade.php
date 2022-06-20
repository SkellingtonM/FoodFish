@extends('layouts.userinterface')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daily Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="welcome">Home</a></li>
              <li class="breadcrumb-item active">Daily Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<p>
<table class="table table-bordered table-striped">
  		<tr>
        <th>ID </th>
        <th>Image</th>
  			<th>Name of fish</th>
        <th>Price</th>
        <th>Location</th>
        <th>Action</th>
      
      </tr>
    
  	</table>
</p>
@endsection