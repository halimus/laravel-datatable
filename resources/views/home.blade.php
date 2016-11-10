@extends('layouts.app')

@section('content')

<h2>Using Eloquent</h2>
<ol>
    <li><a href="{{ url('basic') }}">Example 1: Basic</a></li>
    <li><a href="{{ url('basic') }}">Example 2: Basic Demo with Column Definition</a></li>
    <li><a href="{{ url('basic') }}">Example 3: Basic Demo with Object Data Source</a></li>
    <li><a href="{{ url('basic') }}">Example 4: Row Details</a></li>
</ol>


@endsection
