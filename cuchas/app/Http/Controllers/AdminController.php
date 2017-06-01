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

       //<!--controladores para la creacion de atributos-->

       public function storeTam(Request $request)
        {
            $tam = new Tamano;
            $tam->value=$request->value;
            $tam->title=$request->title;
            $tam->text=$request->text;
            $tam->save();
            return redirect('editPage');
        }

        public function storeMat(Request $request)
         {
             $mat = new Material;
             $mat->value=$request->value;
             $mat->title=$request->title;
             $mat->text=$request->text;
             $mat->save();
             return redirect('editPage');
         }

          public function storeVen(Request $request)
           {
               $ven = new Ventana;
               $ven->value=$request->value;
               $ven->title=$request->title;
               $ven->text=$request->text;
               $ven->save();
               return redirect('editPage');
           }

           public function storeEst(Request $request)
            {
                $est = new Estilo;
                $est->value=$request->value;
                $est->class=$request->class;
                $est->title=$request->title;
                $est->text=$request->text;
                $est->save();
                return redirect('editPage');
            }

           public function storeFor(Request $request)
            {
                $for = new Forma;
                $for->value=$request->value;
                $for->title=$request->title;
                $for->text=$request->text;
                $for->save();
                return redirect('editPage');
            }

          //<!--controladores para la modificacion de atributos-->

          public function updateTam(Request $request,$id)
           {
               $tam =Tamano::find($id);
               $tam->value=$request->value;
               $tam->title=$request->title;
               $tam->text=$request->text;
               $tam->save();
               return redirect('editPage');
           }

           public function updateMat(Request $request,$id)
            {
                $mat = Material::find($id);
                $mat->value=$request->value;
                $mat->title=$request->title;
                $mat->text=$request->text;
                $mat->save();
                return redirect('editPage');
            }

            public function updateVen(Request $request,$id)
             {
                 $ven = Ventana::find($id);
                 $ven->value=$request->value;
                 $ven->title=$request->title;
                 $ven->text=$request->text;
                 $ven->save();
                 return redirect('editPage');
             }

             public function updateEst(Request $request,$id)
              {
                  $est = Estilo::find($id);
                  $est->value=$request->value;
                  $est->title=$request->title;
                  $est->text=$request->text;
                  $est->save();
                  return redirect('editPage');
              }

              public function updateFor(Request $request,$id)
               {
                   $for= Forma::find($id);
                   $for->value=$request->value;
                   $for->title=$request->title;
                   $for->text=$request->text;
                   $for->save();
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
