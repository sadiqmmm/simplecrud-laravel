@extends('layouts.user')

  @section('main')
<h1>Edit User</h1>

{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
<ul>
	<li>
		{{ Form::label('username', 'Username:') }}
		{{ Form::text('username') }}
	</li>
	<li>
		{{ Form::label('password', 'Password:') }}
		{{ Form::text('password') }}
	</li>
	<li>
		{{ Form::label('email', 'Email:') }}
		{{ Form::text('email') }}
	</li>
	<li>
		{{ Form::label('phone', 'Phone:') }}
		{{ Form::text('phone') }}
	</li>
	<li>
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}
	</li>
	<li>
		{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
	</li>
</ul>
{{ Form::close() }}

{{ link_to_action('UserController@index', '<< Back to Users', $parameters = array(), $attributes = array()); }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
@stop