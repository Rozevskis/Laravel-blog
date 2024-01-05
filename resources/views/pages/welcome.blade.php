<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  

</head>
  <body class=" bg-light">
    <!-- Default bootstrap navbar -->
   <nav
    class="navbar navbar-expand-sm navbar-light bg-light "
   >
    <div class="container">
        <a class="navbar-brand" href="/">Laravel blog</a>
        <button
            class="navbar-toggler d-lg-none "
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link active " href="#" aria-current="page"
                        >Home
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link "  href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                
            </ul>
            
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >My account</a
                    >
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                        <a class="dropdown-item" href="#"
                            >Action 1</a
                        >
                        <a class="dropdown-item" href="#"
                            >Action 2</a
                        >
                    </div>
                
        </div>
    </div>
   </nav>

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
        <hr>
        </div>
        <div
            class="col-md-3 "
        >
        <h3>Sidebar</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tenetur doloremque. Explicabo architecto ut veritatis corrupti veniam perferendis blanditiis, quo, fugit nam velit odit adipisci tenetur quibusdam omnis! Ex, voluptate?
        </div>
        
    </div>
   </div>
   
   
        
    </div>
    
    













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>