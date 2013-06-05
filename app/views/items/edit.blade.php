@extends('layouts.scaffold')

@section('main')

<h1>Edit Item</h1>
{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
    <ul>
        <li>
            {{ Form::label('item_name', 'Item_name:') }}
            {{ Form::text('item_name') }}
        </li>
        <li>
            {{ Form::label('item_name', 'Select Category') }}
            {{ Form::select('category',$categories) }}
        </li>

        <li>
            {{ Form::label('item_desc', 'Item_desc:') }}
            {{ Form::textarea('item_desc') }}
        </li>

        <li>
            {{ Form::label('item_price', 'Item_price:') }}
            {{ Form::input('number', 'item_price') }}
        </li>

        <li>
            {{ Form::label('item_expiry', 'Item_expiry:') }}
            {{ Form::text('item_expiry') }}
        </li>

        <li>
            {{ Form::label('item_company', 'Item_company:') }}
            {{ Form::text('item_company') }}
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