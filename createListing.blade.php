@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('listings.store')}}" >
           {{method_field('POST') }}
           {{csrf_field() }}
    
            <div class="form-group col-md-6">
                <label for="businessName">Business Name</label>
                <input type="text" class="form-control" name="name" id="inputBusinessName" placeholder=" Name">
            </div>
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="inputAddress" placeholder=" Address">
            </div>
            <div class="form-group col-md-6">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone Number">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="email">website</label>
                <input type="text" class="form-control" name="website" id="inputWeb" placeholder="Website">
            </div>
            <div class="form-group col-md-6">
                <label for="aboutBusiness">About The Business</label>
                <textarea type="text" class="form-control" name="bio" id="inputBio" rows="10" placeholder="Business Bio"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="submit"></input>
        </form>
    </div>
@endsection