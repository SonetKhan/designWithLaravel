@extends('layouts.app')
@section('title','Home')

@section('content')

    <div class="container-fluid parallax m-0">
        <div class="row m-0 d-flex justify-content-center">
            <div class="col-md-4 text-center top-div">
                <h1 class="text-white">Software Engineer</h1>
                    <h2 class="text-white">Mobile && Web</h2>
                    <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
   <div class="container mt-5 mb-5 text-center">
        <h1>Our Services</h1>
        <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 18rem;">
                    <img cl ass="card-img-top" src="{{asset('/images/card-1.jfif')}}" style="height: 150px; width: 170px; margin-left: 40px" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/images/card-1.jfif')}}" style="height: 150px; width: 170px; margin-left: 40px" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/images/card-1.jfif')}}" style="height: 150px; width: 170px; margin-left: 40px" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5 text-center">
        <h1>My recent Projects</h1>
        <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 18rem;">
                    <img cl ass="card-img-top" src="{{asset('/images/card-1.jfif')}}" style="height: 150px; width: 170px; margin-left: 40px" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/images/card-1.jfif')}}" style="height: 150px; width: 170px; margin-left: 40px" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/images/card-1.jfif')}}" style="height: 150px; width: 170px; margin-left: 40px" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5 text-center">
        <h2>Contact With me</h2>
        <div class="row">
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.264100009694!2d90.41279297437892!3d23.831679838197505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja%202%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1619504282491!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
            <div class="col-md-6">
            <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Name: </label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Mobile Number</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Email</label>

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Message</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                   
                    <button type="submit" class="btn  btn-primary p-2">Send Now</button>
                </form>
            </div>
        </div>
    </div>

@endsection