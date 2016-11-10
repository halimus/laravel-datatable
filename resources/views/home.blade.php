@extends('layouts.app')

@section('content')

<h2>Using Eloquent</h2>
<ol>
    <li><a href="{{ url('example1') }}">Example 1: Basic</a></li>
    <li><a href="{{ url('example2') }}">Example 2: Basic Demo with Column Definition</a></li>
    <li><a href="{{ url('example3') }}">Example 3: Basic Demo with Object Data Source</a></li>
    <li><a href="{{ url('example4') }}">Example 4: Add/Edit/Remove Column</a></li>
    <li><a href="{{ url('example5') }}">Example 5:  DT Row Objects</a></li>
</ol>

<h2>Using Query Builder</h2>
<ol>
    <li><a href="{{ url('example6') }}">Example 6: Basic</a></li>
    <li><a href="{{ url('example7') }}">Example 7: Add|Edit|Remove Column</a></li>
</ol>

<h2>Using Collection</h2>
<ol>
    <li><a href="{{ url('example8') }}">Example 8: Collection Demo using collection of array as data source</a></li>
</ol>

<h2>Using HTML Builder</h2>
<ol>
    <li><a href="{{ url('example9') }}">Example 9:  Html Builder via Dependency Injection</a></li>
</ol>

<br><br><br>
<h4>You can find more exapmle here : <a href="https://datatables.yajrabox.com/" target="_blank">https://datatables.yajrabox.com/</a></h4>

@endsection
