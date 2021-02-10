@extends('layouts.app')


@section('content')
<div class="container bg-gray mt-2">
    <div class="row justify-content-md-center bg-light">
      <h3 class="col-md-auto">Home</h3>
    </div>
   
      <!-- Jumbotron -->
      <div id="home" class="jumbotron jumbotron-fluid pt-5 text-center">
        <h1 class="display-3 pt-5">Welcome!</h1>
        <p class="lead">We help you keep your life organized !</p>
        <small>Created by: Blerta Ahmeti</small>
    </div>

        <!-- About -->
        <section id="about" class="py-5">
        <div class="container py-5 text-center">
            <h1 class="display-4 w-25 mx-auto border-bottom pb-3">About</h1>
            <div class="row pt-5">
                <div class="col-sm-12 col-md-6">
                    <p class="lead text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                        tempore dolorem, officiis labore officia inventore ut esse natus praesentium earum eos a sit
                        maiores enim nisi. Nesciunt totam sit, placeat quae saepe perspiciatis culpa accusamus
                        voluptatem harum asperiores excepturi fugiat aut ipsa facilis tenetur recusandae repellat neque
                        modi incidunt debitis iste! Blanditiis in tempore nisi, dignissimos accusantium voluptas at quos
                        odit impedit dolorem, sint dicta provident expedita enim architecto
                    </p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="images/slide1.jpg" alt="" class="img-fluid" style="box-shadow: 1px 1px 10px black;">
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <div id="services" class="py-5 bg-light">
        <div class="container text-center">
            <h1 class="display-4 border-bottom w-25 mx-auto pb-3">Services</h1>
            <div class="row pt-5">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Create new tasks</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum beatae,
                                autem delectus cumque aspernatur voluptatum minus in eos molestias quidem.</p>
                        </div>
                        <div class="card-footer">
                            <span class="fa fa-facebook pr-3"></span>
                            <span class="fa fa-snapchat pr-3"></span>
                            <span class="fa fa-instagram pr-3"></span>
                            <span class="fa fa-linkedin"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Manage your tasks</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum beatae,
                                autem delectus cumque aspernatur voluptatum minus in eos molestias quidem.</p>
                        </div>
                        <div class="card-footer">
                            <span class="fa fa-facebook pr-3"></span>
                            <span class="fa fa-snapchat pr-3"></span>
                            <span class="fa fa-instagram pr-3"></span>
                            <span class="fa fa-linkedin"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title"> Check your progress</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum beatae,
                                autem delectus cumque aspernatur voluptatum minus in eos molestias quidem.</p>
                        </div>
                        <div class="card-footer">
                            <span class="fa fa-facebook pr-3"></span>
                            <span class="fa fa-snapchat pr-3"></span>
                            <span class="fa fa-instagram pr-3"></span>
                            <span class="fa fa-linkedin"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Organize your days</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum beatae,
                                autem delectus cumque aspernatur voluptatum minus in eos molestias quidem.</p>
                        </div>
                        <div class="card-footer">
                            <span class="fa fa-facebook pr-3"></span>
                            <span class="fa fa-snapchat pr-3"></span>
                            <span class="fa fa-instagram pr-3"></span>
                            <span class="fa fa-linkedin"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
</div>

@endsection