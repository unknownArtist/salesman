@extends('layouts.scaffold')

@section('main')

<h1>Edit Item</h1>
{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
    <ul>
        <li>
            {{ Form::label('item_name', 'Item Name:') }}
            {{ Form::text('item_name') }}
        </li>

        <li>
            {{ Form::label('item_description', 'Item_description:') }}
            {{ Form::textarea('item_description') }}
        </li>

        <li>
            {{ Form::label('expired_at', 'Expired_at:') }}
            {{ Form::text('expired_at') }}
        </li>

        <li>
            {{ Form::label('quantity', 'Quantity:') }}
            {{ Form::input('number', 'quantity') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('items.show', 'Cancel', $item->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop