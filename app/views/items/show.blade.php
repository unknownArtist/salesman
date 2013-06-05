@extends('layouts.scaffold')

@section('main')

<h1>Show Item</h1>

<p>{{ link_to_route('items.index', 'Return to all items') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Item_name</th>
				<th>Item_desc</th>
				<th>Item_price</th>
				<th>Item_expiry</th>
				<th>Item_company</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{ $item->item_name }}</td>
					<td>{{ $item->item_desc }}</td>
					<td>{{ $item->item_price }}</td>
					<td>{{ $item->item_expiry }}</td>
					<td>{{ $item->item_company }}</td>
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