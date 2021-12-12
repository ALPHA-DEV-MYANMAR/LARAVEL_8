@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h4>Create Article</h4>
            <form action="{{ route('article.update',$article->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Category</label>
                    <select name="category_id" class="form-select" id="">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ $category->id==$article->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea type="text" name="description" rows="10" class="form-control">{{ $article->description }}</textarea>
                </div>
                <button class="btn btn-primary">Update Article</button>
            </form>
        </div>
    </div>
</div>

@endsection
