<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Virtaul Library</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Virtual Library
    </a>
  </div>
</nav>

<div class="container text-center">
        @if (session()->has('message'))            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{session('message')}} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h5 class="btn btn-primary my-3">Views</h5>
    <div class="card mt-3 mx-5">
        <div class="card-header">
            <h5>All Books</h5>
        </div>
        <div class="card-body">
            <p>Get all books available</p>
            <a href="/books" class="btn btn-outline-primary">View</a>
        </div>
    </div>

    <div class="card mt-3 mx-5">
        <div class="card-header">
            <h5>All Authors</h5>
        </div>
        <div class="card-body">
            <p>Get all authors available</p>
            <a href="/authors" class="btn btn-outline-primary">View</a>
        </div>
    </div>

    <h5 class="btn btn-info my-3">Add</h5>

    <div class="card mt-3 mx-5">
        <div class="card-header">
            <h5>New Book</h5>
        </div>
        <div class="card-body">
            <p>Add a book to our selection</p>
            <a href="/add/book" class="btn btn-outline-primary">Add</a>
        </div>
    </div>

    <div class="card my-3 mx-5">
        <div class="card-header">
            <h5>New Author</h5>
        </div>
        <div class="card-body">
            <p>Add an author to our community</p>
            <a href="/add/author" class="btn btn-outline-primary">Add</a>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>