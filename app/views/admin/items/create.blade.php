@extends('layouts.scaffold')

@section('main')

<h1>Create Item</h1>

{{ Form::open(array('route' => 'items.store')) }}
    <ul>
        <li>
            {{ Form::label('item_name', 'Item Name:') }}
            {{ Form::text('item_name') }}
        </li>

        <li>
            {{ Form::label('item_description', 'Item Description:') }}
            {{ Form::textarea('item_description') }}
        </li>

        <li>
            {{ Form::label('expired_at', 'Expired At:') }}
            {{ Form::text('expired_at') }}
        </li>

        <li>
            {{ Form::label('quantity', 'Quantity:') }}
            {{ Form::input('number', 'quantity') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


