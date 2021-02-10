@extends('layouts.app')


@section('content')
<div class="container bg-gray mt-2">
    <div class="row justify-content-md-center bg-light">
      <h3 class="col-md-auto">My Progress</h3>
    </div>
   
      <!-- Jumbotron -->
      <div id="home" class="jumbotron jumbotron-fluid pt-5 text-center mt-2">
        <h1 class="display-3 pt-5">Welcome {{auth()->user()->name}}</h1>
        <p class="lead">Your doing great, Keep going!</p>
        </div>


    <div class="w-50 p-50 ml-5 mt-5">
       <div class="alert alert-danger"> 
        <h3>Tasks you have not completed yet</h3>
       </div>
   </div>
      
      @foreach($tasks as $task)
         @if($task->ownedBy(auth()->user()))      
    
       @if($task->status == 0)
       <div class="card mb-3" style="width: 60rem;">
              <div class="card-body">
                <h5 class="card-title">{{ $task->title}} </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $task->created_at->diffForHumans()}}</h6>
                <p class="card-text">{{ $task->body}}</p>     
             <!--  neese don me testu a o tu ti shfaq veq postimet tua, bone unncomennt this part
                <h6 class="card-subtitle mb-1 text-muted">Created by: {{ $task->user->name}}</h6> -->
               </div>

                 <!-- me bo delete nje task qe e ke postu vet -->            
                 <div class="row">
          <div class="col-sm-12 ">
           <!-- emri i rutes edhe si tjeter argument jeper $post qe mu dit cili postim o tu fshi -->
              <form action="{{ route('task.destroy', $task)}}" method="post" class="mr-1 ">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-primary  mt-1 ">Delete</button>
              </form>
              

                <!-- edit -->   
              <form action="{{ route('task.update', $task)}}" method="post" class="m-2 ">
                @csrf
                @method('PUT')
                @if($task->status==0)
                <button type="submit" id="btn1" class="btn btn-success  mt-1 ml-5 p-1">Mark as Completed</button>
                @else
                <button type="submit" id="btn2"  class="btn btn-danger  mt-1 ">Mark as not Completed</button>
                @endif
              </form>
              </div>
                 
           </div>
                     
        

            </div>

                @endif
                @endif  
    @endforeach 
         

</div>

@endsection