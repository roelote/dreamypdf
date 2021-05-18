@extends('adminlte::page')

@section('title', 'Dreamy Panel')

@section('plugins','Datatables',true)

@section('content_header')
    <a class="btn btn-primary" href="{{ route('hotelpdf.create') }}">Crear Nuevo Hotel</a>
@stop

@section('content')

<div class="card" >
    <div class="card-body">
        <table id="generator" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Numero #</th>
                    <th scope="col">Nombre Hotel</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opcion</th>
                  </tr>
            </thead>
            <tbody>

                @foreach($date as $d)
                <tr>
                    <th scope="row">{{ $d->id }}</th>
                    <td>{{ $d->nombre }}</td>
                    <td>{{ $d->categoria }}</td>
                    <td>{{ $d->descripcion }}</td>
                    <td class="text-right">
                    </td>
                  </tr>
                @endforeach
               </tr>

            </tbody>

        </table>
    </div>
  </div>


@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

<script>
    $(document).ready(function() {
           $('#generator').DataTable({
               responsive:true,
               "order": [[ 0, "desc" ]],
               autoWidth:false,
               "language": {
                   "lengthMenu": "Mostrar _MENU_ registros por página",
                   "zeroRecords": "Nada encontrado - disculpa",
                   "info": "Nostrando la página _PAGE_ de _PAGES_",
                   "infoEmpty": "No records available",
                   "infoFiltered": "(filtrado de _MAX_ registros totales)",
                   "search":"Buscar"
               }
           });
       } );
</script>

@stop

