@extends('layouts.app')

@section('title','Editar Artículo')

@section('content')
    {!! Form::open(['route'=>[ 'articles.update', $article ], 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('title','Título') !!}
        {!! Form::text('title', $article->title, ['class'=>'form-control', 'placeholder'=>'Título del artículo']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('content','Contenido') !!}
        {!! Form::textarea('content', $article->content,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Categoría') !!}
        {!! Form::select('category_id', $categories, $article->category->id, ['class'=>'form-control select-category']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags_id[]','Tags') !!}
        {!! Form::select('tags_id[]', $tags, $my_tags, ['tags_id' => 'id', 'class'=>'form-control select-tags', 'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".select-tags").chosen({
            placeholder_text_multiple: 'Seleccione los tags',
            no_results_text: 'No se encontraron tags con el nombre'
        });

        $(".select-category").chosen({
            placeholder_text_single: 'Seleccione la categoria',
            no_results_text: 'No se encontraron categorias con el nombre'
        });

        $('#content').trumbowyg();
    </script>
@endsection
