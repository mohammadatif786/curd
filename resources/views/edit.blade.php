<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CURD</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#employeeModal">
                        Add Employee
                    </button>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h1>Employee List</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update',['id' => $user->id])}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="Email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Udpdate</button>
                                </div>
                            </form>     
                        </div>
                    </div>  
                </div>
            </div>
           
        </div>
    </body>
</html>
