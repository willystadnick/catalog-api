<h1>Edit Category</h1>

<p><a href="{{ URL::to('categories') }}">All Categories</a></p>

@if (Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

{!! HTML::ul($errors->all()) !!}

{!! Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) !!}

    <div>
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', Input::old('titulo')) !!}
    </div>

    {!! Form::submit('Edit') !!}

{!! Form::close() !!}
