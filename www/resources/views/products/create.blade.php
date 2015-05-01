<h1>Create Product</h1>

<p><a href="{{ URL::to('products') }}">All Products</a></p>

@if (Session::has('message'))
    <div>{{ Session::get('message') }}</div>
@endif

{{ HTML::ul($errors->all()) }}

{!! Form::open(array('url' => 'products')) !!}

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

    {!! Form::submit('Create') !!}

{!! Form::close() !!}
