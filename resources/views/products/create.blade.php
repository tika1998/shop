@extends('layout.index')

@section('title', 'create')


@section('content')
<form method='POST' action="{{route('product.store')}}">
@csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" name='name' class="form-control" >
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name='description' class="form-control" >
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="text" name='price' class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
