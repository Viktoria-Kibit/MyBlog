@extends('layouts.main')

@section('title')
    @lang('project.Name')
@endsection

@section('css')


    {{--    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>--}}

@endsection
@section('content')


   <div class="container">

       <!-- Display all categories -->
       <div class="card mb-3">
           <div class="card-header">
               <h5>All Categories</h5>
           </div>
           <div class="card-body">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Name</th>
                           <th>Slug</th>
                           <th></th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($categories as $category)
                       <tr>
                           <td>{{ $category->name }}</td>
                           <td>{{ $category->slug }}</td>
                           <td>
                               <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                               <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display: inline-block;">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                               </form>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>



                <form action="{{route('category.store')}}"  method="post" class="row gy-2 gx-3 align-items-center">
                    @csrf
                    <div class="col-auto">
                        <label  for="autoSizingInput">Category name</label>
                        <input type="text" name="name" class="form-control"  id="autoSizingInput">
                    </div>
                    <div class="col-auto">
                        <label  for="slug">slug</label>
                        <input type="text" name="slug" class="form-control"  id="slug">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>




    </div>
@endsection
@section('script')


    {{-- <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script> --}}




@endsection
