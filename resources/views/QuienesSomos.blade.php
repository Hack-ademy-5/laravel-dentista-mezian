@extends('layout.app')
@section('content')




<div class="row">
    <div class="col-12">
        <h1>Quienes Somos</h1>
    </div>
</div>
<div class="row container-fluid mx-auto">
    @foreach($personas as $persona)
    <div class="col-md-4 container-fluid text-center">
        <div class="card2 " style="width: 18rem;">
           
            <div class="card-body">
              <h5 class="card-title">{{$persona}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             
            </div>
          </div>
    </div>
    @endforeach
</div>
@endsection




