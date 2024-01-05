@extends('main')
@section('title', 'Contact')
@section('content')

   <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Contact me</h1>
                <p class="col-md-8 fs-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Soluta, recusandae ab, perferendis consequuntur libero nam 
                iusto, suscipit cum fuga voluptate error quaerat adipisci aut 
                nihil voluptas similique nulla facilis natus?
                </p>

            <hr>
            
        
            <form>
                <div class="mb-3">
                    <label for="inputName" class="form-label">Name </label>
                    <input type="text" class="form-control" id="inputName">
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="inputContent" class="form-label">Message details </label>
                    <textarea class="form-control" id="inputContent" rows="4"></textarea>
                </div>
        
                <button type="submit" class="btn btn-primary">Send message</button>
            </form>
        </div>
    </div>
@endsection
    