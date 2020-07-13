@extends('layout.index')

@section('title', 'create')


@section('content')

<!-- <div>
    @if($errors->any())
    <div>
    <p>
    @foreach($errors->all() as $error)
        <p style='color: red'>{{$error}}</p>
    @endforeach
    </p>
    </div>
    @endif
</div> -->

<form method='POST' action="{{route('product.store')}}" id='createForm' enctype="multipart/form-data">
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
  <input type="file" name='image' class="form-control">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
