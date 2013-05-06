@extends('layouts.scaffold')

@section('main')

<h1>Show Item</h1>

<p>{{ link_to_route('items.index', 'Return to all items') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Item_name</th>
				<th>Item_description</th>
				<th>Expired_at</th>
				<th>Quantity</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{ $item->item_name }}</td>
					<td>{{ $item->item_description }}</td>
					<td>{{ $item->expired_at }}</td>
					<td>{{ $item->quantity }}</td>
                    <td>{{ link_to_route('items.edit', 'Edit', array($item->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('items.destroy', $item->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop