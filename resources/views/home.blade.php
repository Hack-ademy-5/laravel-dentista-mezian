@extends('layout.app')
@section('content')

@if(session('message'))
      <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>
    @endif
    

<div class="container-fluid-md ">

    <img src="img\dentist_bg.jpg" class="img-fluid imgbg" alt="dentist_bg">

    <div class=" centered text-center">DentistasNM <br> Tu Salud Dental <br> Al Mejor Precio</div>

</div>

<div class="container-fluid-md my-5 ">
    <h1>Nuestros Servicios</h1>
</div>


<div class="container-fluid text-center">
    <div class="row-3 my-5 ">
        <div class="card2 mb-3">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title"><b>Limpieza Dental</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nulla alias adipisci sunt, vero voluptatum saepe ad nemo sapiente, aperiam quae, velit consequuntur. Sit nulla, veniam eaque eveniet harum praesentium.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="card2 mb-3">
            <div class="row g-0">
                <div class="col-md-4">

                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title"><b>Aparatos Dentales</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia asperiores minus impedit, eum vero dignissimos doloremque amet molestiae inventore, quia repellendus. Ab quas soluta labore consequatur earum iste recusandae et.</p>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="card2 mb-3">
            <div class="row g-0">
                <div class="col-md-4">

                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title"><b>Implantes Dentales</b></h5>
                        
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore est porro suscipit quam corrupti, doloremque qui labore dolor, minima quas officiis dolore impedit maiores, velit quae aliquam ex. Nulla, vel.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection