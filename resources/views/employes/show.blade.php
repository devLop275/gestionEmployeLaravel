@extends('adminlte::page')
@section('title')
Show Employe| Laravel Employes App
@endsection

@section('content_header')
   <h1>Show Employe</h1>
@endsection

@section('content')
<div class="container">
   @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
          <div class="card my-5">
            <div class="card-header">
                <div class="text-center fontèweight-bold text-uppercase">
                    <h3>{{$employe->fullname}}</h3>
                </div>
            </div>
            <div class=" mt-2 text-center fontèweight-bold text-uppercase">
                    <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">
                        Vacation Request
                    </a>
                    <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn btn-outline-danger">
                        Work Certificate 
                    </a>
            </div>
            <hr>
            <div class="card-body">
                   <div class="form-group mb-3">
                      <label for="fullname">Registration Number</label>
                      <input type="text" maxlength="8" class="form-control rounded-0"
                           name="registration_number" disabled placeholder="Registration Number" value="{{$employe->registration_number}}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="fullname">FullName</label>
                      <input type="text" class="form-control rounded-0"
                           name="fullname" disabled placeholder="FullName" value="{{$employe->fullname}}}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="depart">Departement</label>
                      <input type="text" class="form-control rounded-0"
                           name="depart" disabled placeholder="Departement" value="{{$employe->depart}}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="hire_date">Hire Date</label>
                      <input type="date" class="form-control rounded-0"
                           name="hire_date" disabled placeholder="Hire Date" value="{{$employe->hire_date}}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="phone">Phone</label>
                      <input type="tel" class="form-control rounded-0"
                           name="phone" disabled placeholder="Phone" value="{{$employe->phone}}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="adress">Adress</label>
                      <input type="text" class="form-control rounded-0"
                           name="adress" disabled placeholder="Adress" value="{{$employe->adress}}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="city">City</label>
                      <input type="text" class="form-control rounded-0"
                           name="city" disabled placeholder="City" value="{{$employe->city}}">
                   </div>
               </div>
          </div>
        </div>
    </div>
</di>

@endsection
