@extends('dashboard')

@section('content')
    <div class="mt-5 row">
        <div class="col-lg-12">
            <p class="h2">Create voting poll</p>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th>specification</th>
            <th>modules</th>
            <th width="300px">Actions</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->aprasymas }}</td>
            <td>{{ $post->specifikacija }}</td>
            <td>{{ $post->moduliai }}</td>
            <td>{{ $post->extra }}</td>
            <td>
            <a href="/posts/{{$post->id}}" class="btn btn-info">Show</a>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning d-inline btn-xs">Edit</a>
            <form action="{{action('App\Http\Controllers\PostsController@destroy', $post['id'])}}" method="POST" class="d-inline">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn-danger btn btn-xs">Delete</button>
    </form>
            </td>
        </tr>
            
        @endforeach
    </table>
    {{$posts->links()}}

@endsection