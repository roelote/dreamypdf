@extends('adminlte::page')

@section('title', 'Dreamy Panel')


@section('content_header')

@stop

@section('content')

<div class="card" >
    <div class="card-header ">
        <h1 class="text-center text-uppercase">CREAR HOTEL</h1>
      </div>
    <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('hotelpdf.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre del Hotel*</label>
                <input type="text" class="form-control mb-2" id="nombre" name="nombre" placeholder="Nombre Hotel" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Categoria*</label>
                <input type="text" class="form-control mb-2" id="categoria" name="categoria" placeholder="Categoria Hotel" required>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Descripcion del hotel</label>
                  <textarea class="form-control mb-2" id="descripcion" name="descripcion" cols="2" rows="2"></textarea>
                </div>
              </div>
            <button type="submit" class="btn btn-success btn-lg">Guardar</button>
          </form>
    </div>
  </div>


@stop

@section('css')

@stop


@section('js')


@stop


