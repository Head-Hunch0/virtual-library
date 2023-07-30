<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Add Book </title>
</head>
<body>
    <div class="container mx-5 p-5">
        <div class="card shadow-lg mt-3 mx-5 card-primary">
            <div class="card-header">
                <h4>Add Book</h4>
            </div>
            <div class="card-body">
    <form class="row g-3 needs-validation" method="post" action="/store/book" novalidate>
        @csrf
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Henry Mathews" name="Name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">ISBN</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="26" name="ISBN" required minlength="13">
      <div class="invalid-feedback">
        Please add a valid ISBN.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Author</label>
    <select class="form-select border-bottom border-0 border-dark-subtle" id="Author_id" name="Author"  type="Author" list="Authors" required>
      <option class="text-center" value="" selected="" disabled="">Select author</option>
      @foreach ($authors as $author)
      <option class="text-center" value="{{$author->id}}" {{(@$author_id == $author->id) ? "selected" : ""}}>{{$author->Name}}</option>      
      @endforeach
    </select>    <div class="invalid-feedback">
      Please provide a valid Author.
    </div>
  </div>

  <div class="col-12 text-center">
    <button class="btn btn-outline-primary" type="submit">Add</button>
  </div>
</form>
            </div>
            <div class="text-center mb-4">
                <a class="btn btn-primary" href="/">Back</a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>