<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About {{$data['fullName']}}</title>
    <style>
        html,body{
            height: 100%;
        }

        body{
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;

        }
        .container{
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content{
            text-align: center;
            display: inline-block;
        }
        .title{
            font-size: 96px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">About {{$data['fullName']}}</div>
            <p>Email me at {{$data['email']}}</p>
            
        </div>
    </div>
    
</body>
</html>
