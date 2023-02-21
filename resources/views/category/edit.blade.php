@extends('layouts.main')

@section('title')
    @lang('project.Name')
@endsection

@section('css')


    {{--    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>--}}

@endsection
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-8">


                <form action="{{route('category.update',$category->id)}}"  method="post" class="row gy-2 gx-3 align-items-center">
                    @csrf
                    @method('patch')
                    <div class="col-auto">
                        <label  for="autoSizingInput">Category name</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control"  id="autoSizingInput">
                    </div>
                    <div class="col-auto">
                        <label  for="slug">Slug</label>
                        <input type="text" name="slug" value="{{$category->slug}}" class="form-control"  id="slug">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>




            </div>
        </div>
    </div>
@endsection
@section('script')


    {{-- <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script> --}}




@endsection
