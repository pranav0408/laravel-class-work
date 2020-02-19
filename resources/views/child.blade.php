@extends('Parent/app')

@section('title','My Title')

@section('sidebar')
    @parent

    <p>This data is appended from child into parent</p>
@endsection

@section('content')
    <p>This is child body content</p>
@stop