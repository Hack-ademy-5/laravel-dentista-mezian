@extends('layout.app')
@section('content')


<div class="row">
    <div class="col-12">
        <h1>Contactanos</h1>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <form action="{{route('contact.received')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname" value="{{old('fullname')}}">
                <div id="emailHelp" class="form-text">No compartiremos tu nombre con terceros</div>
                @error('fullname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
              <div id="emailHelp" class="form-text">No compartiremos tu correo con terceros</div>
              @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mensaje</label>
                <textarea class="form-control" name="message" id="" cols="30" rows="10">{{old('message')}}</textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
</div>
@endsection