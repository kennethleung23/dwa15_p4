@extends('_4_add_or_edit_concoction')

@section('title')
  	Edit Recipe
@stop

@section('add_or_edit_concoction_header')
  	<h1>Edit Recipe</h1>
@stop

@section('add_or_edit_concoction_url')
	{{ Form::open(array('url'=>'/edit-concoction/'.$id, 'files'=>true)) }}
@stop

@section('add_or_edit_concoction_submit')
	{{ Form::submit('Edit Recipe!', array('class'=>'btn btn-lg btn-primary')) }}
@stop 