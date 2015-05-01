<h1>Products</h1>

<p><a href="{{ URL::to('products/create') }}">Create Product</a></p>

@if (Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

@if (count($products) > 0)
<table>
    <thead>
        <tr>
            <td>Título</td>
            <td>Slug</td>
            <td>Preço</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $key => $value)
        <tr>
            <td>{{ $value->titulo }}</td>
            <td>{{ $value->slug }}</td>
            <td>{{ $value->preco }}</td>
            <td>
                <a href="{{ URL::to('products/' . $value->id) }}">Show</a>
                <a href="{{ URL::to('products/' . $value->id . '/edit') }}">Edit</a>

                {!! Form::open(array('url' => 'products/' . $value->id)) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete') !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
<p>No products found!</p>
@endif
