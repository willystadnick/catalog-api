<h1>Show Product</h1>

<p><a href="{{ URL::to('products') }}">All Products</a></p>

<p><b>Título:</b> {{ $product->titulo }}</p>
<p><b>Slug:</b> {{ $product->slug }}</p>
<p><b>Preço:</b> {{ $product->preco }}</p>
<p><b>Categoria:</b> {{ $product->category->titulo or null }}</p>
<p><b>Thumbnail:</b> {{ $product->thumbnail }}</p>
<p>
    <a href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit</a>
    {!! Form::open(array('url' => 'products/' . $product->id)) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
</p>
