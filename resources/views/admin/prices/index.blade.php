@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add Price</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Price Update</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
    <section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{route('admin.prices.create')}}" class="btn btn-primary">Add New Price</a>
  	</p>
  	<table class="table table-bordered table-striped">
  		<tr>
        <th>ID </th>
        <th>Image</th>
  			<th>Name of fish</th>
        <th>Price</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
      @foreach($prices as $c)
      @if($c->price_id == Auth::user()->id || Auth::user()->is_admin)
      <tr>
        <td>{{$c->price_id}}</td>
        <td><img src="{{asset($c->image)}}" width="150" height='50' clss="img img-responsive"></td>
  			<td>{{$c->title}}</td>
        <td>{{$c->price}}</td>
        <td>{{$c->location}}</td>
        <td>
            <a href="{{ route('admin.prices.edit',$c->id) }}" class="btn btn-info">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('admin.prices.destroy',$c->id) }}" method="post">
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