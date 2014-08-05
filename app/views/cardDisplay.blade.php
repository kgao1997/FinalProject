@extends('master')

@section('content')
  <h1>Your Search Results</h1>
  <p>{{$card->cardName}}<br>
  {{$card -> manaCost}}<br>
  {{$card -> cardText}}</p>
@stop