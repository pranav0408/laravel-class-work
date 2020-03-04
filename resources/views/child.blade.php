@extends('Parent/app')

@section('title','My Title')

@section('sidebar')
    <div class="sidebar">
        @parent
        
        <p>This data is appended from child into parent</p>
    </div>

@endsection

@section('content')
    <p>This is child body content</p>
@stop