@extends('layouts.base')

@section('content')
    <div class="container p-4">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Published</th>
                <th width="280px">Action</th>

            </tr>
            </thead>
            <tbody>
            @if($blogs->count())
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <a class="btn btn-info" href="{{ route('blogDetails', ['slug' => $blog->id]) }}">Show</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>There are no posts</p>
            @endif
            </tbody>
        </table>
        {{ $blogs->links("pagination::bootstrap-4")}}

    </div>
@endsection
