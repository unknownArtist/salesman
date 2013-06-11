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
            {{ Form::label('item_name', 'Select Category') }}
            {{ Form::select('category',$categories) }}
        </li>

        <li>
            {{ Form::label('item_desc', 'Item Description:') }}
            {{ Form::textarea('item_desc') }}
        </li>

        <li>
            {{ Form::label('item_price', 'Item Price:') }}
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
            {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
            {{ HTML::link('items','Back',array('class'=>'btn btn-primary')) }}

        </li>

    </ul>
{{ Form::close() }}
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


