<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <title>Add moive</title>
</head>
<body>
    <h1>Add moive</h1>
    <form class="form-group mx-sm-3 mb-2" action="{{route('netflix.store') }}" method="post">
        @csrf 
        <div class="form-group col-md-4 mb-3">
          <label> Add Movie </label>
          <input type="text" class="form-control"  placeholder="Enter Movie Name" name="movie_name">
        </div>
        {{-- <div class="form-group col-md-4 mb-3">
          <label >Movie Picture</label>
          <input type="image" class="form-control" >
        </div> --}}
        <div class="form-group col-md-4 mb-3">
          <label >Movie Description</label>
          <input type="text" class="form-control" placeholder="Enter Movie Description"name="movie_Description">
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Generation</label>
          <input type="year" class="form-control" placeholder="Enter Movie gener"name="movie_gener">
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
      </form>
</body>
</html>