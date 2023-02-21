@extends('layouts.main')
@section('title')
    @lang('project.Name')
@endsection
@section('css')
    {{--    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>--}}@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('post.store')}}"  method="post" class="row gy-2 gx-3 align-items-center">
                    @csrf
                    <div class="col-auto">
                         <label  for="slug">Post Name</label>
                         <input type="text" name="title" class="form-control"  id="slug">
                    </div>
                    <div class="col-auto">
                        <label  for="autoSizingInput">Text</label>
                        <textarea type="text" name="postText" class="form-control"  id="autoSizingInput"></textarea>
                    </div>
                    <div class="col-auto">
                        <label  for="slug">Author</label>
                        <input type="text" name="author" class="form-control"  id="slug">
                    </div>
                    <div class="col-auto">
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script> --}}@endsection
