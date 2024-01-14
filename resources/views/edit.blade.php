<<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/app.css" type="text/css" rel="stylesheet">


</head>

<body class="antialiased">
    <!-- <?php
    print_r($data);
    ?>
     -->
@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-4">
                <div class="row">
                    <div class="col-md-6 offset-md-4">
                        <form action="/update/{{$data->id}}" method="post">
                            @csrf <!-- Move it here inside the form -->
                                @method('PUT')
                            <div class="form-group">
                                <label for="first_name"> First Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{$data->first_name}}" id="first_name" placeholder="Enter first_name" >
                            </div>
                            <div class="form-group">
                                <label for="last_name"> Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" value="{{$data->last_name}}" placeholder="Enter last_name" >
                            </div>
                            <div class="form-group">
                                <label for="mobile_no"> Mobile no.</label>
                                <input type="text" class="form-control" name="mobile_no" id="mobile_no" value="{{$data->mobile_no}}"  placeholder="Enter mobile_no" >
                            </div> 
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}" placeholder="Enter email" >
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" value="{{$data->address}}"  placeholder="Enter address" >
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary mt-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>