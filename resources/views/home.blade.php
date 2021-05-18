@extends('adminlte::page')

@section('title', 'Dreamy Panel')

@section('content_header')
    <h1>Panel</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="text-center">
                      <span class="text-uppercase">Porgramas Generados</span>
                      <h6 class="stats-small__value count my-3">@php
                          $a = rand(0,10);

                          echo $a;

                      @endphp</h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="text-center">
                      <span class="text-uppercase">Reservas</span>
                      <h6 class="stats-small__value count my-3">0</h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="text-center">
                      <span class="text-uppercase">Paginas</span>
                      <h6 class="stats-small__value count my-3">0</h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="text-center">
                      <span class="text-uppercase">Usuarios</span>
                      <h6 class="stats-small__value count my-3">0</h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop

