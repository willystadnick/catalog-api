<h1>Edit Product</h1>

<p><a href="{{ URL::to('products') }}">All Products</a></p>

@if (Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

{!! HTML::ul($errors->all()) !!}

{!! Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) !!}

    <div>
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', Input::old('titulo')) !!}
    </div>

    <div>
        {!! Form::label('preco', 'Preço') !!}
        {!! Form::text('preco', Input::old('preco')) !!}
    </div>

    <div>
        {!! Form::label('preco', 'Preço') !!}
        {!! Form::select('category', $categories) !!}
    </div>

    {!! Form::submit('Edit') !!}

{!! Form::close() !!}
