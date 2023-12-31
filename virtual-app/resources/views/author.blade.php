<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Author Details</title>
</head>
<body>
    <div class="container mx-5 p-5">
        <div class="card shadow-lg mt-3 mx-5 card-primary">
            <div class="card-header">
                <h4>{{$author->Name}}</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <h6 class="card-header text-center">Author Details</h5>
                    <li class="list-group-item"> <span class="text-primary"> Name </span>  : {{$author->Name}}</li>
                    <li class="list-group-item"> <span class="text-primary">   Age </span> : {{$author->Age}}</li>
                    <li class="list-group-item"> <span class="text-primary"> Country of Origin </span>  : {{$author->Country}}</li>
                    <li class="list-group-item"> <span class="text-primary"> Books </span>  : {{$author->books}}</li>
                    <li class="list-group-item"><a href="/edit/author/{{$author->id}}" class="btn btn-warning">Edit </a></li>
                    
                </ul>
            </div>
            <div class="text-center mb-4">
                <a class="btn btn-primary" href="/authors">Back</a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>