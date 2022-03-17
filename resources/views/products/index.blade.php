<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CRUD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


@extends('products.layout')

<div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>laravel Crud test</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
          </div>
      </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">
      <tr>
          <th>No</th>
          <th>Name</th>
          <th>Details</th>
          <th width="280px">Action</th>
      </tr>
      @foreach ($products as $product)
      <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->detail }}</td>
          <td>
              <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                  <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
      @endforeach
  </table>

  {!! $products->links() !!}



</div>
</div>
</div>
</div>
</x-app-layout>
