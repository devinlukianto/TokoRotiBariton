@extends('layout.master')

@section('title', 'Edit Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Edit Category</h1>
            </div>
        </div>
    </div>

{{ Form::model($category, array('route' => array('categories.update', $category->id), 'method'=>'PUT')) }}

	{{ Form::label('name','Nama') }}
	{{ Form::text('name', $category->name) }}
<br>
	{{ Form::label('description','Deskripsi') }}
	{{ Form::textarea('description', $category->description) }}
<br>
	{{ Form::submit('Edit category', array('class'=>'btn')) }}

{{ Form::close() }}
    <a class="btn" href="{{ URL::to('categories') }}">Back to category index</a>
	<a class="btn" href="{{ URL::to('categories/' . $category->id) }}">Back to show category</a>
@stop