@extends('layouts.user')

@section('main')
<p> Name: {{ $user->name }}</p>
{{ link_to_action('UserController@index', '<< Back to Users', $parameters = array(), $attributes = array()); }}
@stop