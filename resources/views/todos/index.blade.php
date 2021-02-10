@extends('layouts.app')


@section('content')
<div class="container bg-gray mt-2">
    <div class="row justify-content-md-center bg-light">
      <h3 class="col-md-auto">Todos</h3>
    </div>

  <div class="container bg-gray mt-2">
    @auth
    <form action="{{route('todos') }}" method="post" class="mb-3">
      @csrf 
            
      <div class="form-group">
                <label for="name">Plan for:</label>
                <input class="form-control" type="text" name="title" placeholder="When should the task bbe finished ex: urgent, tonmorrow" value="{{ old('name') }}">

                @error('title')
                 <div class="alert alert-danger">
                   {{ $message }}
                 </div>
               @enderror 
      </div>

      <div class="form-group mt-4 ">
            <label for="body"></label>
                <textarea name="body" id="body" cols="30" rows="4" class="border border-2 bg-gray @error('body') border-red-500 @enderror" placeholder="Post something"></textarea>

                @error('body')
                 <div class="alert alert-danger">
                   {{ $message }}
                 </div>
               @enderror  
               <button class="btn btn-block btn-primary" type="submit">Create</button>
       </div>
         
    </form>
  </div>
   @endauth

        @if($tasks->count())
      
        @foreach($tasks as $task)
        <!-- shfaqi tasks vetem te personnit qe osht i kyqur --> 
           @if($task->ownedBy(auth()->user()))
            <div class="card mb-3" style="width: 60rem;">
              <div class="card-body">
                <h5 class="card-title">{{ $task->title}} </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $task->created_at->diffForHumans()}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Status: {{$task->status()}}</h6>
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
           @endforeach
          
       

        @else
          <p>There are no posts</p>
       @endif
</div>
  


@endsection