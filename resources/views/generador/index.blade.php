@extends('adminlte::page')

@section('title', 'Dreamy Panel')

@section('plugins','Datatables',true)

@section('content_header')
    <a class="btn btn-primary" href="{{ route('programa.create') }}">Crear Nuevo PDF</a>
@stop

@section('content')

<div class="card" >
    <div class="card-body">
        <table id="generator" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Numero #</th>
                    <th scope="col">Nombre Tour</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col">Fecha Actualizacion</th>
                    <th scope="col">Opcion</th>
                  </tr>
            </thead>
            <tbody>
                @foreach($date as $d)
                <tr>
                    <th scope="row">{{ $d->id }}</th>
                    <td>{{ $d->titulo }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td>{{ $d->updated_at }}</td>

                    <td class="text-right">
                        <a class="btn btn-sm btn-danger" target="_blank" href="{{ route('programa.pdf',$d->id) }}"><i class="far fa-eye"></i> Ver PDF</a>
                        <a class="btn btn-sm btn-success" href="{{ route('programa.pdf',$d->id) }}"><i class="far fa-file-pdf"></i> Descargar PDF</a>
                        <a class="btn btn-sm btn-info text-white" href="{{ route('programa.edit',$d->id) }}"><i class="far fa-edit"></i> Editar</a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="far fa-trash-alt"></i> Eliminar</a>
                    </td>
                  </tr>
                @endforeach

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

