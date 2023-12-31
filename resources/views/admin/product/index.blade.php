@extends('layouts.admin')
@section('content')
<div class="card">
    <div class ="card-header">
        <h4> Products Page</h4>
    <hr>
    </div>
    <div class="card-body">
       <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $products as $item )
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Image here">
                </td>
                <td>
                    <a href="{{ url('edit-product/'. $item->id)}}" button class="btn btn-primary">Edit</button>
                    <a href="{{url('delete-product/'. $item->id)}}" button class="btn btn-danger">Delete</button>
                </td>
            </tr>

            @endforeach

        </tbody>
       </table>
    </div>
</div>
@endsection

