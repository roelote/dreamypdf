<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;


class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $date = Programa::all();
        return view('generador.index',compact('date'));
    }

    public function exportPdf($id)
    {
        $id = Programa::where('id','=', $id)->firstOrFail();
        $pdf = PDF::loadView('generador.pdf',compact('id'))->setPaper('a4', 'landscape');
        return $pdf->stream('programa-'.$id->titulo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // primero vamos a validar los campos que recibimos

           $datos = $request->validate([
            'titulo' => 'required',
            'imagen_url' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'itinerario' => 'required',
            'imagesitinerario' => 'required',
            'incluye' => 'required',
            'imagesincluye'=> 'required',
<<<<<<< HEAD
            'addmore.*.name' => 'required',
            // 'imagesdbuffete'=> 'required',
            // 'imagesabuffete'=> 'required',
            // 'imagesh'=> 'required',
            // 'imagesh2'=> 'required',
            // 'imagesh3'=> 'required',
=======
            'nombre_hotel1'=>'required',
            'nombre_hotel2'=>'required',
            'categoria_h1'=>'required',
            'categoria_h2'=>'required',
>>>>>>> ddd0239a58dfaf4a50b6ac22a2b844ee79ba0de9
            'precio' => 'required'
             ]);

             if ($request->file('imagen_url') and $request->file('imagesitinerario') and $request->file('imagesincluye') ) {

                // obtenemos el file archivo

                    $file = $request->file('imagen_url');

                // obtenemos el nombre original

                    $url_nombre_img= $file->getClientOriginalName();

                    // itinerario imagenes
                    foreach($request->file('imagesitinerario') as $image)
                    {
                        $imageName=$image->getClientOriginalName();
                        $image->move(public_path().'/images/', $imageName);
                        $cuts = Image::make((public_path('/images/'.$imageName)))->fit(265, 340);
                        $cuts->save();
                        $fileNames[] = $imageName;

                    }
                    $images = json_encode($fileNames);

                    // incluye imagenes
                    foreach($request->file('imagesincluye') as $imag)
                    {
                        $imageName=$imag->getClientOriginalName();
                        $imag->move(public_path().'/images/', $imageName);
                        $cuts = Image::make((public_path('/images/'.$imageName)))->fit(506, 340);
                        $cuts->save();
                        $fileNames2[] = $imageName;

                    }
                    $images2 = json_encode($fileNames2);

                    //     //aqui separamos la url para poder poner guiones y corregir
                    $filename = pathinfo($url_nombre_img, PATHINFO_FILENAME);
                    $extension = pathinfo($url_nombre_img, PATHINFO_EXTENSION);

                    $corrigiendo_nombre_image = Str::slug($filename, '-');

                    $image_correcta = $corrigiendo_nombre_image.'.'.$extension;

                    //guardamos la url en el direcctorio y su nombre tambien

                    $path = $request->file('imagen_url')->storeAs('uploads',$image_correcta, 'public');

                    }

                 else{
                     $path = "uploads/default-fond.jpg";

                    }

                 if( $request->file('imagesdbuffete'))
                    {
                      // imagenes desayuno buffete
                      foreach($request->file('imagesdbuffete') as $imag)
                      {
                          $imageName=$imag->getClientOriginalName();
                          $imag->move(public_path().'/images/', $imageName);
                          $cuts = Image::make((public_path('/images/'.$imageName)))->fit(355, 550);
                          $cuts->save();
                          $fileNames3[] = $imageName;
                       }
                       $images3 = json_encode($fileNames3);
                    }
                    else
                    {
                            $images3 ='["d-buffete-1.png","d-buffete-2.png","d-buffete-3.png"]';

                    }

                    if($request->file('imagesdbuffete'))
                    {
                        // imagenes almuerzo buffete
                       foreach($request->file('imagesabuffete') as $imag)
                       {
                           $imageName=$imag->getClientOriginalName();
                           $imag->move(public_path().'/images/', $imageName);
                           $cuts = Image::make((public_path('/images/'.$imageName)))->fit(355, 550);
                           $cuts->save();
                           $fileNames4[] = $imageName;

                        }
                        $images4 = json_encode($fileNames4);
                    }
                    else
                    {
                        $images4 ='["a-buffete-1.png","a-buffete-2.png","a-buffete-3.png"]';
                    }

                // hoteles

                    foreach ($request->addmore as $key => $value) {

<<<<<<< HEAD
                        $filehotel = $value;
                    }
                    $hotelps = json_encode($filehotel);
=======
                        }
                        $images6 = json_encode($fileNames6);
                    }
                    else
                    {
                        $images6 ='["hotel2-1.png","hotel2-2.png","hotel2-3.png","hotel2-4.png","hotel2-5.png","hotel2-6.png"]';
                    }


>>>>>>> ddd0239a58dfaf4a50b6ac22a2b844ee79ba0de9


                // corta las fotos solo de la portada
                 $img = Image::make(public_path('storage/'.$path))->fit(850, 600);
                 $img->save();

                 Programa::create([
                     'titulo' => $datos['titulo'],
                     'imagen_url' => 'storage/'.$path,
                     'itinerario'=> $datos['itinerario'],
                     'imagesitinerario' => $images,
                     'imagesincluye'=>$images2,
                     'imagesdbuffete'=> $images3,
                     'imagesabuffete'=> $images4,
<<<<<<< HEAD
                     'hotelp'=> $hotelps, //[{"name":"a"},{"name":"b"},{"name":"c"},{"name":"d"}]
=======
                     'imagesh'=> $images5,
                     'imagesh2'=> $images6,
                     'nombre_hotel1'=>$datos['nombre_hotel1'],
                     'nombre_hotel2'=>$datos['nombre_hotel2'],
                     'categoria_h1'=>$datos['categoria_h1'],
                     'categoria_h2'=>$datos['categoria_h2'],
>>>>>>> ddd0239a58dfaf4a50b6ac22a2b844ee79ba0de9
                     'incluye'=> $datos['incluye'],
                     'precio'=> $datos['precio']
                 ]);

                //  dd($request);

            return redirect()->route('programa.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  $programa = Programa::all();

         $programa = programa::findOrFail($id);

         return view('generador.edit',compact('programa'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $datos = $request->validate([
            'titulo' => 'required',
            'imagen_url' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'itinerario' => 'required'
             ]);

                  if ($request->file('imagen_url')) {

                // obtenemos el file archivo

                    $file = $request->file('imagen_url');

                // obtenemos el nombre original

                    $url_nombre_img= $file->getClientOriginalName();

                //     //aqui separamos la url para poder poner guiones y corregir

                    $filename = pathinfo($url_nombre_img, PATHINFO_FILENAME);
                    $extension = pathinfo($url_nombre_img, PATHINFO_EXTENSION);

                    $corrigiendo_nombre_image = Str::slug($filename, '-');

                    $image_correcta = $corrigiendo_nombre_image.'.'.$extension;

                    //guardamos la url en el direcctorio y su nombre tambien

                    $path = $request->file('imagen_url')->storeAs('uploads',$image_correcta, 'public');

                    $img = Image::make(public_path('storage/'.$path))->fit(850, 600);
                    $img->save();

                    $programa = Programa::find($id);
                    $programa->titulo = $datos['titulo'];
                    $programa->imagen_url = 'storage/'.$path;
                    $programa->itinerario = $datos['itinerario'];
                    $programa->save();

                    }

                 else{
                        $programa = Programa::find($id);
                        $path = $programa->imagen_url;
                     //   $path = $request->file('imagen_url');
                        $programa->titulo = $datos['titulo'];
                        $programa->imagen_url = $path;
                        $programa->itinerario = $datos['itinerario'];
                        $programa->save();


                 }
                    // asignacion de valores cuando actualizas noma y esta creado la clase, como ven se pasa por parametro
                    return redirect()->route('programa.home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        return redirect()->route('programa.home');
    }
}
