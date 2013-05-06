@extends('layouts.scaffold')

@section('main')

<h1>All Items</h1>

<p>{{ link_to_route('items.create', 'Add new item',$array=NULL, array('class' => 'btn btn-info')) }}</p>

@if ($items->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Item Name</th>
				<th>Item Nescription</th>
				<th>Expired At</th>
				<th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->item_name }}</td>
					<td>{{ $item->item_description }}</td>
					<td>{{ $item->expired_at }}</td>
					<td>{{ $item->quantity }}</td>
                    <td>
                        {{ link_to_route('items.edit', 'Edit', array($item->id), array('class' => 'btn btn-info')) }}
                    </td>

                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('items.destroy', $item->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no items
@endif

@stop