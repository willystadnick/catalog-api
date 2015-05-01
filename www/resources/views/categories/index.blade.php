<h1>Categories</h1>

<p><a href="{{ URL::to('categories/create') }}">Create Category</a></p>

@if (Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

@if (count($categories) > 0)
<table>
    <thead>
        <tr>
            <td>Título</td>
            <td>Slug</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($categories as $key => $value)
        <tr>
            <td>{{ $value->titulo }}</td>
            <td>{{ $value->slug }}</td>
            <td>
                <a href="{{ URL::to('categories/' . $value->id) }}">Show</a>
                <a href="{{ URL::to('categories/' . $value->id . '/edit') }}">Edit</a>

                {!! Form::open(array('url' => 'categories/' . $value->id)) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete') !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
<p>No categories found!</p>
@endif
