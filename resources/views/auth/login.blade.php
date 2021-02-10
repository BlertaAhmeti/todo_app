@extends('layouts.app')

@section('content')
<div class="container bg-gray mt-2">
    <div class="row justify-content-md-center bg-light">
      <h3 class="col-md-auto">Login</h3>
    </div>

     <div class="w-50 p-50 ml-5 mt-5">
        @if(session('status'))
       <div class="alert alert-danger"> 
        {{session('status')}}
       </div>
    @endif 
   <!-- FORM -->
   <form action="{{route('login')}}" method="POST"> 
       @csrf    
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

            <div class="mb-4">
               <input type="checkbox" name="remember" id="remember">
               <label for="remember">Remember Me</label>
             </div>
            <button class="btn btn-block btn-primary" type="submit">Login</button>  
     </form>
  </div>          
</div>
@endsection