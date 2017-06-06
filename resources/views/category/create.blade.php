@extends('layout.master')

@section('title', 'Add Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Add Category</h1>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <li><span>{{ $err }}</li>
        @endforeach
        </div>
    @endif

{{ Form::open(array('url' => 'categories')) }}

	{{ Form::label('name','Nama') }}
	{{ Form::text('name', Input::old('name')) }}
<br>
	{{ Form::label('description','Deskripsi') }}
	{{ Form::textarea('description', Input::old('description')) }}
<br>
	{{ Form::submit('Create category') }}

{{ Form::close() }}
    <a href="{{ URL::to('categories') }}">Back to category index</a>

@stop
