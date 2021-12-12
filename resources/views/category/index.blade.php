@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <a href="{{route('category.create')}}" class="btn btn-primary">Create</a>
            <table class="table table-bordered">
                <thead>
                 <tr>
                     <th>Id</th>
                     <th>title</th>
                     <th>user</th>
                     <th>control</th>
                 </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->user->name}}</td>
                        <td>
                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-outline-info">Edit</a>

                            <form action="{{route('category.destroy',$category->id)}}" method="post" class=" d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger">Del</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
