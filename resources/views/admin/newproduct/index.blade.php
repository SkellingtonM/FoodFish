@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
    

<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ route('admin.profiles.create') }}" class="btn btn-primary">Add New Profile</a>

  	</p>
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>ID</th>
  			<th>Name</th>
        <th>Email</th>
        <th>No. Phone</th>
        <th>Company Name</th>
        <th>Address</th>
        <th>Travel Fee</th>
  			<th>Action</th>

  		</tr>
  		@foreach($profiles as $c)
      @if($c->profile_id == Auth::user()->id || Auth::user()->is_admin)
  			<tr>
  				<td>{{ $c->profile_id }}</td>
  				<td>{{ $c->name }}</td>
          <th>{{ $c->email }}</th>	
          <th>{{ $c->phone }}</th>
          <th>{{ $c->company_name }}</th>
          <th>{{ $c->address }}</th>
          <th>{{ $c->travel_price }}</th>
  				<td>
            <a href="{{ route('admin.profiles.edit',$c->profile_id) }}" class="btn btn-info">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('admin.profiles.destroy',$c->id) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </td>
  			</tr> 
        @endif
  		@endforeach
     
  	</table>
  </div>
</section>	


   

@endsection 
