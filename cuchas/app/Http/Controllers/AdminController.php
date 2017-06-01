<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pageModel\Tamano;
use App\pageModel\Material;
use App\pageModel\Ventana;
use App\pageModel\Forma;
use App\pageModel\Estilo;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
          $this->middleware('auth');
          $this->middleware('is_admin');
    }



     public function ppal()
     {
         return view('index');
     }

     public function edit(){
        $tamanos=Tamano::all();
        $materiales=Material::all();
        $ventanas=Ventana::all();
        $estilos=Estilo::all();
        $formas=Forma::all();
        return view('editPage')->with(['tamanos' => $tamanos , 'materiales' => $materiales , 'ventanas' => $ventanas , 'estilos' => $estilos, 'formas' => $formas]);
     }



     public function modify(Request $req){
        $elemento = Tamano::find($req->id);
        if( $elemento != null){
            $elemento->value=$req->value;
            $elemento->title=$req->title;
            $elemento->text=$req->text;
            $elemento->save();
        }
        return view('editPage');
     }


     public function store(Request $request)
      {
          $tam = new Tamano;
          $tam->value=$request->value;
          $tam->title=$request->title;
          $tam->text=$request->text;
          $tam->save();
          return redirect('editPage');
      }

      public function update(Request $request,$id)
       {
          //  dd($request);
          //  dd($id);
           $tam =Tamano::find($id);
           $tam->value=$request->value;
           $tam->title=$request->title;
           $tam->text=$request->text;
           $tam->save();
           return redirect('editPage');
       }

     //<!--controladores para la eliminacion de atributos-->

     public function deleteTam($id)
     {
       $elemento = Tamano::find($id);
       if( $elemento)

         $elemento->delete();

       return redirect()->to('editPage');
    }

    public function deleteMat($id)
    {
      $elemento = Material::find($id);
      if( $elemento)

        $elemento->delete();

      return redirect()->to('editPage');
   }

   public function deleteVen($id)
   {
     $elemento = Ventana::find($id);
     if( $elemento)

       $elemento->delete();

     return redirect()->to('editPage');
  }

  public function deleteEst($id)
  {
    $elemento = Estilo::find($id);
    if( $elemento)

      $elemento->delete();

    return redirect()->to('editPage');
 }

 public function deleteFor($id)
 {
   $elemento = Forma::find($id);
   if( $elemento)

     $elemento->delete();

   return redirect()->to('editPage');
  }


}
