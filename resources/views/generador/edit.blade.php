@extends('adminlte::page')

@section('title', 'Dreamy Panel')


@section('content_header')

@stop

@section('content')

<div class="card" >
    <div class="card-header">
        <h1 class="text-center">Editar Tour <span class="text-danger">{{$programa->titulo}} </span></h1>
      </div>
    <div class="card-body">

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
        @endif
        <form method="POST" action=" {{route('programa.update', $programa->id)}} " enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre Tour</label>
                <input type="text" class="form-control mb-2" id="titulo" name="titulo" value="{{$programa->titulo}}"/>
              </div>
              <div class="form-group col-md-3">
                      <label for="imagen_url">Imagen</label>
                      <input type="file" class="form-control-file" name="imagen_url" id="imagen_url">
              </div>
              <div class="form-group col-md-3">
                <img src="/{{$programa->imagen_url}} " alt="" width="300" height="120" class="d-block">
              </div>
            </div>
            <div class="form-group">
                <label for="itinerario">Itinerario</label>
                <textarea class="form-control mb-2" id="itinerario" name="itinerario" cols="30" rows="10">{{$programa->itinerario}}</textarea>
            </div>

            <button type="submit" class="btn btn-success btn-lg">Guardar</button>
          </form>
    </div>
  </div>


@stop

@section('css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
@stop


@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
<script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
    CKEDITOR.replace('itinerario', options);
</script>

@stop


