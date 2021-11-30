@extends('layouts.base')

@section('content')
    <div class="container">
        Author - {{ $blog->author }}
        <hr>
        Description:<br>
        {{ $blog->description }}

    </div>
@endsection
