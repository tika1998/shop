@extends('layout.index')

@section('title', 'example')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $key=>$product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a href="{{route('product.edit',$product->id)}}" class='btn btn-warning'>Edit</a>
        <a href="{{route('product.create')}}" class='btn btn-danger'>Create</a>
            <form action="{{route('product.destroy', $product->id)}}" method='post' style='display: contents'>
            @csrf
            @method('DELETE')
                 <input type='submit' class='btn btn-success' value='Delete'>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
