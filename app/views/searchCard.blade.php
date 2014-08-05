@extends('master')

@section('title')
	Search
@stop


@section('content')

	<h1>Search Cards</h1>

	<label for='query'>Search:</label>
	<input type='text' id='query' name='query' value='cards'><br><br>
	<div id='results'></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="/js/search.js"></script>
@stop