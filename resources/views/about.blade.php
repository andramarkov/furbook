@extends('layouts.master')

@section('header')
	<h2>Abou this site</h2>
@stop


@section('content')
	<p>There are over {{ $number_of_cats }} cats on this site!</p>
@stop
