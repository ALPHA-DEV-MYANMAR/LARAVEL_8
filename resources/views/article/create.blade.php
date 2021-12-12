@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h4>Create Article</h4>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('article.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Category</label>
                    <select name="category_id" class="form-select" id="">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea type="text" name="description" rows="10" class="form-control @error('title') is-invalid @enderror"></textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button class="btn btn-primary">Add Article</button>
            </form>
        </div>
    </div>
</div>


@endsection
