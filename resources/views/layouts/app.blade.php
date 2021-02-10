<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ToDo</title>
</head>
<body>    
<body class="bg-gray-100">
<nav class="navbar navbar-expand-lg navbar-light bg-pink"  style="background-color: pink;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('todos')}}">Todos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('progress')}}">My progress</a>
        </li>
        
        <li class="nav-item ml-5">
          <a class="nav-link   " href="#" >{{  auth()->user()->name}}</a>
        </li>

        <li class="nav-item ml-5">
        <!-- qe mos me mujt mu shkyq t paautorizum e bojm qeshtu -->
          <form action="{{route('logout')}}" method="post">
             @csrf
             <button  class="mt-2" type="submit">Logout</button>
          </form>
        </li>
        @endauth

        @guest
        <li class="nav-item">
          <a class="nav-link " href="{{route('login')}}" >Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="{{route('register')}}" >Register</a>
        </li>
        @endguest 
      
       
       </ul>
        
        
      
    </div>
  </div>
</nav>
        @yield('content')
</body>
</html>