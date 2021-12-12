@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">

            <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf
                @method('put')
                <input type="text" class="form-control" name="title" value="{{$category->title}}">
                <button class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>

@endsection
