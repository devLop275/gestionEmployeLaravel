@extends('adminlte::page')

@section('title')
   Vacation Request
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-3 my-5">
                <div class="card-header">
                    <h3>Vacation Request</h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                            <b>{{$employe->fullname}}</b> : is presntly employed with mein the following
                            </p>
                            <p class="lead">
                                <b>{{$employe->depart}}</b> departement.
                            </p>
                            <p class="lead">
                                Vacation starting from <b>________________</b>
                            </p>
                            <p class="lead">
                                And ends on <b>______________</b>
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