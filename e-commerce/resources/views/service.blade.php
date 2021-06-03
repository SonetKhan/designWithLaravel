@extends('layouts.app')
@section('title','Service')

@section('content')
<div class="container-fluid bg-dark p-5">
        <div class="col-md-12 text-center">
            <h4 class="text-white">My services</h4>
        </div>
        
    </div>
    <div class="container mt-5">
        <div class="row">
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
    <div class="container mt-5 mb-5">
        <div class="row">
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
                   
                    <button type="submit" class="btn btn-block btn-primary">Send Now</button>
                </form>
            </div>
            <div class="col-md-6">

                <h5>Address</h5>

                <p>Nikunjo-2, Road No: 18, House No: 20</p>

                <p>019383837737378</p>

                <p>Sonetkhanrkb@gmail.com</p>
            </div>
        </div>
    </div>
@endsection