<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add user</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
   <form class="container mt-5" action="{{ url('user') }}" method="post">
   @csrf
  <div class="row mb-4">
    <div class="col">
      <div class="">
        <label class="form-label" for="form6Example1">First name</label>
        <input type="text" class="form-control border" name="firstName"/>
      </div>
    </div>
    <div class="col">
      <div class="">
        <label class="form-label">Last name</label>
        <input type="text" class="form-control border" name="lastName"/>
      </div>
    </div>
  </div>
  <div class="mb-4">
    <label class="form-label" >email</label>
    <input type="text"  class="form-control border" name="email"/>
  </div>
  <div class="mb-4">
    <label class="form-label" >password</label>
    <input type="text"  class="form-control border" name="pswd"/>
  </div>
  <button type="submit" class="btn btn-primary btn-block mb-4" >ADD</button>
</form> 
</body>
</html>