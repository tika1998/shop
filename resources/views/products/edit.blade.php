@extends('layout.index')

@section('title', 'edit')


@section('content')

<div>
    @if($errors->any())
    <div>
    <p>
    @foreach($errors->all() as $error)
        <p style='color: red'>{{$error}}</p>
    @endforeach
    </p>
    </div>
    @endif

</div>
<form method='POST' action="{{route('product.update',$product->id)}}">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" name='name' value='{{$product->name}}' class="form-control" >
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name='description' value='{{$product->description}}' class="form-control" >
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="text" name='price'  value='{{$product->price}}' class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
