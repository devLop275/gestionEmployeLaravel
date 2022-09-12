@extends('adminlte::page')

@section('title')
   Work Certificate Request
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-3 my-5">
                <div class="card-header">
                    <h3>Work Certificate Request</h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                            <b>{{$employe->fullname}}</b> : is presntly employed with mein the following
                            </p>
                            <p class="lead">
                                <b>{{$employe->depart}}</b> departement.
                            </p>
                            <p class="lead">
                                His employement begin on <b>{{$employe->hire_date}}</b>
                            </p>
                            <p class="lead">
                                This Certification is being issued upon the request of <b>{{$employe->fullname}}</b> for whatever legal purpose it may serve.
                            </p>
                            <p class="lead">
                               Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toTImeString()}}</b>
                            </p>
                            <p class="m-5">
                                ___________
                                ___________
                            </p>
                            <div class="my-4">
                                <a href="#" 
                                    onClick="
                                    document.getElementById('printLink').style.display='none'
                                    setTimeout(function(){
                                        document.getElementById('printLink').style.display='inline-block'
                                    },2000);
                                    window.print();
                                    "
                                    class="btn btn-sm btn-success" id="printLink">
                                    <i class="fas fa-print"></i>
                                </a>
                            </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection