@extends('adminlte::page')

@section('title', 'Dreamy Panel')


@section('content_header')

@stop

@section('content')

<div class="card" >
    <div class="card-header ">
        <h1 class="text-center text-uppercase">Generar PDF</h1>
      </div>
    <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('programa.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">NOMBRE DEL TOUR</label>
                <input type="text" class="form-control mb-2" id="titulo" name="titulo" placeholder="Nombre Tour" required>
              </div>
              <div class="form-group col-md-6">
                      <label for="imagen_url">IMAGEN PORTADA</label>
                      <input type="file" class="form-control-file" name="imagen_url" id="imagen_url" required>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="itinerario">TEXTO ITINERARIO</label>
                    <textarea class="form-control mb-2" id="itinerario" name="itinerario" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="incluye">TEXTO INCLUYE - NO INCLUYE</label>
                    <textarea class="form-control mb-2" id="incluye" name="incluye" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="itinerario">FOTOS ITINERARIO <small class="text-danger font-weight-bold"> 4 FOTOS</small></label>
                    <div class="border p-2 bg-light">
                                <input type="file" name="imagesitinerario[]" multiple class="form-control-file" accept="image/*" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="incluye">FOTO INCLUYE <small class="text-danger font-weight-bold"> 2 FOTOS</small></label>
                    <div class="border p-2 bg-light">
                                <input type="file" name="imagesincluye[]" multiple class="form-control-file" accept="image/*" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="itinerario" class="text-uppercase">Desayuno Buffete <small class="text-danger font-weight-bold"> 3 FOTOS</small></label>
                    <div class="border p-2 bg-light">
                      <input type="file" name="imagesdbuffete[]" multiple class="form-control-file" accept="image/*">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="incluye" class="text-uppercase">Almuerzo Buffete <small class="text-danger font-weight-bold"> 3 FOTOS</small></label>
                    <div class="border p-2 bg-light">
                    <input type="file" name="imagesabuffete[]" multiple class="form-control-file" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="itinerario" class="text-uppercase">Nombre Hotel</label>
                    <div class="">
                        <input type="text" class="form-control mb-2" id="nombre_hotel1" name="nombre_hotel1" placeholder="Nombre Hotel" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="incluye" class="text-uppercase">Categoria Hotel</label>
                    <select class="form-control" name="categoria_h1" id="categoria_h1">
                        <option value="HOTEL BASICO">HOTEL BASICO</option>
                        <option value="HOTEL 2 ESTRELLAS">HOTEL 2 ESTRELLAS</option>
                        <option value="Hotel 3 ESTRELLAS">Hotel 3 ESTRELLAS</option>
                        <option value="Hotel 4 ESTRELLAS">Hotel 4 ESTRELLAS</option>
                        <option value="Hotel 5 ESTRELLAS">Hotel 5 ESTRELLAS</option>
                      </select>
                    {{-- <div class="">
                        <input type="text" class="form-control mb-2" id="categoria_h1" name="categoria_h1" placeholder="Categoria Hotel" required>
                    </div> --}}
                </div>
                <div class="form-group col-md-4">
                    <label for="incluye" class="text-uppercase">Fotos Hotel <small class="text-danger font-weight-bold"> 6 FOTOS</small></label>
                    <div class="border p-2 bg-light">
                    <input type="file" name="imagesh[]" multiple class="form-control-file" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="itinerario" class="text-uppercase">NOMBRE HOTEL</label>
                    <div class="">
                        <input type="text" class="form-control mb-2" id="nombre_hotel2" name="nombre_hotel2" placeholder="Categoria Hotel" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="incluye" class="text-uppercase">Categoria Hotel</label>
                    <select class="form-control" name="categoria_h2" id="categoria_h2">
                        <option value="HOTEL BASICO">HOTEL BASICO</option>
                        <option value="HOTEL 2 ESTRELLAS">HOTEL 2 ESTRELLAS</option>
                        <option value="Hotel 3 ESTRELLAS">Hotel 3 ESTRELLAS</option>
                        <option value="Hotel 4 ESTRELLAS">Hotel 4 ESTRELLAS</option>
                        <option value="Hotel 5 ESTRELLAS">Hotel 5 ESTRELLAS</option>
                      </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="incluye" class="text-uppercase">Fotos Hotel <small class="text-danger font-weight-bold"> 6 FOTOS</small></label>
                    <div class="border p-2 bg-light">
                    <input type="file" name="imagesh2[]" multiple class="form-control-file" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="precio">PRECIOS</label>
                <textarea class="form-control mb-2" id="precio" name="precio" cols="30" rows="10"></textarea>
              </div>

            <button type="submit" class="btn btn-success btn-lg">Guardar</button>
          </form>
    </div>
  </div>


@stop

@section('css')

@stop


@section('js')

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
    CKEDITOR.replace('incluye', options);
    CKEDITOR.replace('precio', options);
</script>

@stop


