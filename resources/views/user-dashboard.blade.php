<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>User Dashboard</h2>
     {{-- this is by using Auth facade --}}

    {{-- <p>{{Auth::user()->name}}</p>
    <p>{{Auth::user()->email}} </p> --}}

    {{-- this is by using helper function --}}

    {{-- <p>{{auth()->user()->name}}</p>
    <p>{{auth()->user()->email}} </p> --}}

    @if(Auth::check())
    <p>{{Auth::user()->name}}</p>
    <p>{{auth()->user()->email}}</p>
    @endif

   <form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Logout</button>
   </form>


</body>

</html>




