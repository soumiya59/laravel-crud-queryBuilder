<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit user</title>
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
    <div class="card">
    <div class="card-body">
    <form action="{{ url('user/'.$usr->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{$usr->id}}" />
        <label>first name</label></br>
        <input type="text" name="firstName" value="{{$usr->firstName}}" class="form-control"></br>
        <label>last name</label></br>
        <input type="text" name="lastName" value="{{$usr->lastName}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" value="{{$usr->email}}" class="form-control"></br>
        <label>password</label></br>
        <input type="text" name="pswd" value="{{$usr->pswd}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    </div>
</div>
</body>
</html>