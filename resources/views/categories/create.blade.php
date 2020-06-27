<h1>Create Category</h1>

<p><a href="{{ URL::to('categories') }}">All Categories</a></p>

@if (Session::has('message'))
    <div>{{ Session::get('message') }}</div>
@endif

{{ HTML::ul($errors->all()) }}

{!! Form::open(array('url' => 'categories')) !!}

    <div>
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', Input::old('titulo')) !!}
    </div>

    {!! Form::submit('Create') !!}

{!! Form::close() !!}
