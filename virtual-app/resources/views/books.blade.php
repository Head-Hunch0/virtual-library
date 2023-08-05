<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>All Books</title>
</head>
<body>
    <div class="container mx-5 p-5 row">
        <div class="">
            <a class="btn btn-primary" href="/">Back</a>
        </div>
        @if (session()->has('message'))            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{session('message')}} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @foreach ($books as $book)
        <div class="card shadow-lg mt-3 mx-5 col-lg-3 text-center col-md-4 col-sm-12">
            <div class="card-header">
                <h4>{{$book->Name}}</h4>
            </div>
            <div class="card-body">
                <p>{{$book->ISBN}}</p>
                <a class="btn btn-outline-primary" href="/book/{{$book->id}}">More Details</a>
            </div>
        </div>
            
        @endforeach
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>