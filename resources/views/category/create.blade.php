@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">

                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button class="btn btn-primary">Create</button>
                </form>

            </div>
        </div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-danger">{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection
