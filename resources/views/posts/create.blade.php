@extends('main')

@section('title', '| Create New Post')
    
@section('content')

    <div
        class="row "
    >
        <div class="col-md-8 offset-md-2">
            <h1>Create new Post</h1>
            <hr>
            
            {!! Form::open(['route' => 'posts.store']) !!}
                {{Form::label('title', 'Title:')}}
                {{Form::text('title', null, array('class' => 'form-control')) }}

                {{Form::label('body', 'Post body:')}}
                {{Form::textarea('body', null, array('class' => 'form-control')) }}

                {{Form::submit('Create post', array('class' => 'btn btn-success btn-lg', 'style' => 'margin-top: 20px; width:100%'))}}
                
            {!! Form::close() !!}
            
        </div>
        
        
           
           
          
    </div>
    
@endsection