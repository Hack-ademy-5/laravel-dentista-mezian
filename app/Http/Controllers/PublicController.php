<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class PublicController extends Controller
{

     public function home() {
        return view('home');
    }


    public function contact()
    {
        return view('contactanos');
    }

    public function contactReceived(ContactRequest $request)
    {
        // validar los inputs
        $misdatos = $request->validated();

        // guardar los datos en el db
        $name = $misdatos['fullname'];

        return redirect()->route('home')-> with('message',"Gracias $name por haber contactado con nosotros");

    }

    public function aboutUs(){
        // sacamos todos los componentes del team de nuestra empresa
        $equipo = [
            "Mezian",
            "Laura",
            "Jade",
        ];
        return view('QuienesSomos',['personas'=>$equipo]);
    }
}
