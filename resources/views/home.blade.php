@extends('layouts.app')

@section('content')

<h2>Using Eloquent</h2>
<ol>
    <li><a href="{{ url('example1') }}">Example 1: Basic</a></li>
    <li><a href="{{ url('example2') }}">Example 2: Basic Demo with Column Definition</a></li>
    <li><a href="{{ url('example3') }}">Example 3: Basic Demo with Object Data Source</a></li>
    <li><a href="{{ url('example4') }}">Example 4: Row Details</a></li>
</ol>


@endsection
