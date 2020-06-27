<h1>Show Category</h1>

<p><a href="{{ URL::to('categories') }}">All Categories</a></p>

<p><b>Título:</b> {{ $category->titulo }}</p>
<p><b>Slug:</b> {{ $category->slug }}</p>
<p><b>Produtos:</b> {{ $category->products->implode('titulo', ', ') }}</p>

<p>
    <a href="{{ URL::to('categories/' . $category->id . '/edit') }}">Edit</a>
    {!! Form::open(array('url' => 'categories/' . $category->id)) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
</p>
