@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h4>Article List</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>User</th>
                    <th>Control</th>
                    <th>Created_at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
{{--                        <td>{{ $article->category->title }}</td>--}}
                        <td>
                            @isset($article->category)
                                {{ $article->category->title }}
                            @else
                                Deleted
                            @endisset
                        </td>
                        <td>
                            {{$article->user->name}}
                        </td>
                        <td>
                            <a href="{{ route('article.show',$article->id) }}" class="btn btn-outline-info">Detail</a>
                            <a href="{{ route('article.edit',$article->id) }}" class="btn btn-outline-primary">Edit</a>
                            <form action="{{ route('article.destroy',$article->id) }}" class="d-inline-block" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                        <td>{{ $article->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
