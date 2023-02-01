<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view users</title>
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
<body class="container  mt-5">
    <h3>
        <a href="{{ url('/user/create') }}">add new client</a>
    </h3>
    @if ($message = Session::get('flash_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 
    @if(count($users)>0)
    <table class="d-flex justify-content-center" >
        <tr class="border">
            <th class="border p-2">CIN</th>
            <th class="border p-2">first name</th>
            <th class="border p-2">last name</th>
            <th class="border p-2">email</th>
            <th class="border p-2">password</th>
        </tr>
        @foreach ($users as $e )
        <tr class="border">
            <td class="border p-2">{{ $e-> id}}</td> 
            <td class="border p-2">{{ $e-> firstName}}</td> 
            <td class="border p-2">{{ $e-> lastName}}</td> 
            <td class="border p-2">{{ $e-> email}}</td> 
            <td class="border p-2">{{ $e-> pswd}}</td> 
            <td class="border p-2">
                <button class="btn btn-sm text-white"><a href="{{ url('/user/'.$e->id.'/edit') }}">edit</a></button>

                <form method="POST" action="{{ url('/user' . '/' . $e->id) }}" accept-charset="UTF-8" style="display:inline"> {{ method_field('DELETE') }} {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p>no users</p>
    @endif
</body>
</html>