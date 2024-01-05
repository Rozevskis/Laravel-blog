@extends('main')

@section('content')
    <div class=" p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to my blog</h1>
            <p class="col-md-8 fs-4 lead">
               Thankyou for visiting my blog.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
               Popular post
            </button>
        </div>
    </div>
    
   <div class="container">
    <div class="row">
        <div
            class="col-md-8" 
        >
           <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, accusantium. Eum dolore pariatur nobis cupiditate odio, laudantium unde esse excepturi fugit. Debitis aliquid, totam molestiae neque iusto placeat alias expedita?</p>
            <button
                type="button"
                class="btn btn-primary"
            >
                Read more
            </button>
               
        </div>

        <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, accusantium. Eum dolore pariatur nobis cupiditate odio, laudantium unde esse excepturi fugit. Debitis aliquid, totam molestiae neque iusto placeat alias expedita?</p>
                <button
                    type="button"
                    class="btn btn-primary"
                >
                    Read more
                </button>
                
            </div>
        </div>
    </div>
   
@endsection
    