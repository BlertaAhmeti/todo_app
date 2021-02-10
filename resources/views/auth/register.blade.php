@extends('layouts.app')


@section('content')
<div class="container bg-gray mt-2">
    <div class="row justify-content-md-center bg-light">
      <h3 class="col-md-auto">Register</h3>
    </div>

    <div class="w-50 p-50 ml-5 mt-5">
   <!-- FORM -->
   <form action="register" method="POST"> 
    @csrf 
       
            <!-- TEXT FIELD GROUPS -->
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{ old('name') }}">

                @error('name')
                 <div class="alert alert-danger">
                   {{ $message }}
                 </div>
               @enderror 
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Enter username" value="{{ old('username') }}">

                @error('username')
                 <div class="alert alert-danger">
                   {{ $message }}
                 </div>
               @enderror 
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control form-control-sm" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">

                @error('email')
                 <div class="alert alert-danger">
                   {{ $message }}
                 </div>
               @enderror 
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">

                @error('password')
                 <div class="alert alert-danger">
                   {{ $message }}
                 </div>
               @enderror 
            </div>
           
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Password again">
            </div>
          
            <br>

            <button class="btn btn-block btn-primary" type="submit">Register</button>
           
        </form>

  </div>
  
            
</div>

@endsection