<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container col-5 m-5">
        <div>
            <h1>ADD NEW USER</h1>
            <form class='mb-4' action = "{{route('registerSave')}}" method = 'POST'>
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name='name'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name='email'>
                </div>
                <div class="mb-3">
                    <label class="form-label" >Password</label>
                    <input type="password" class="form-control" name='password'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-primary"><a class= 'text-white' href="{{route('login')}}">Login</a></button>
            </form>
        </div>
        @if($errors->any())
            <ul class = 'p-4 alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li> 
                @endforeach
            </ul>
        @endif
    </div>
    
</body>
</html>