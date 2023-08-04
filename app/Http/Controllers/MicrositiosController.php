<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;
use App\Models\User;
use Mailjet\Resources;

class MicrositiosController extends Controller
{
    public function registerDirector(Request $request)
    {
        if ($request->file('avatar') != null) {
            $image = "data:image/jpeg;base64,".base64_encode(file_get_contents($request->file('avatar')->path()));
        }else{
            $image = null;
        }


        function eliminar_acentos($cadena){
                
                //Reemplazamos la A y a
                $cadena = str_replace(
                array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
                array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
                $cadena
                );

                //Reemplazamos la E y e
                $cadena = str_replace(
                array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
                array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
                $cadena );

                //Reemplazamos la I y i
                $cadena = str_replace(
                array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
                array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
                $cadena );

                //Reemplazamos la O y o
                $cadena = str_replace(
                array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
                array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
                $cadena );

                //Reemplazamos la U y u
                $cadena = str_replace(
                array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
                array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
                $cadena );

                //Reemplazamos la N, n, C y c
                $cadena = str_replace(
                array('Ñ', 'ñ', 'Ç', 'ç'),
                array('N', 'n', 'C', 'c'),
                $cadena
                );
                
                return $cadena;
        }
            function clean($string) {
                $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
                $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                $string = strtolower($string);
                        
                return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
            }


            $url = eliminar_acentos($request->name);
                    $url = clean($url);
                    

        
        User::create([
            'name' => $request->name,
            'url' => $url,
            'password' => Hash::make($request->password),
            'nombre' => $request->name,
            'email' => $request->email,
            'puesto' => $request->puesto,
            'semblaza' => $request->semblanza,
            'descripcion' => $request->descripcion,
            'telefono' => $request->telefono,
            'whatsapp' => $request->whatsapp,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'formulario' => $request->inlineRadioOptions,
            'area' => $request->area,
            'linea' => $request->linea,
            'imagen' => $image
        ]);

       return redirect('https://socasesores.com/comunidad/'.$url);
    }

    public function vcardDescarga($id){
        $user = User::where('id', '=', $id)->get();
        $user = $user[0];

            // define vcard
            $vcard = new VCard();

            // define variables
            $lastname = '';
            $firstname = $user->nombre;
            $additional = '';
            $prefix = '';
            $suffix = '';

            // add personal data
            $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

            // add work data
            $vcard->addCompany('SOC asesores');
            $vcard->addEmail($user->email);
            $vcard->addPhoneNumber($user->telefono, 'PREF;WORK');
            $vcard->addPhoneNumber($user->whatsapp, 'WORK');

            // return vcard as a string
            //return $vcard->getOutput();

            // return vcard as a download
            return $vcard->download();

            // save vcard on disk
            //$vcard->setSavePath('/path/to/directory');
            //$vcard->save();
    }

    public function dashboard(){
        $user = User::where('role', '=', null)->get();

        return view("dashboard", ['usuarios' => $user]);
    }

    public function micrositio($url){
        $user = User::where('url', '=', $url)->get();
        $user = $user[0];
        return view("micrositio", ['usuario' => $user]);
    }
    public function micrositioEditar($id){
        $user = User::where('id', '=', $id)->get();
        $user = $user[0];
        return view("auth.edit-director", ['usuario' => $user]);
    }

    public function editDirector(Request $request)
    {

        $user = User::find($request->id);


        function eliminar_acentos($cadena){
                
                //Reemplazamos la A y a
                $cadena = str_replace(
                array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
                array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
                $cadena
                );

                //Reemplazamos la E y e
                $cadena = str_replace(
                array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
                array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
                $cadena );

                //Reemplazamos la I y i
                $cadena = str_replace(
                array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
                array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
                $cadena );

                //Reemplazamos la O y o
                $cadena = str_replace(
                array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
                array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
                $cadena );

                //Reemplazamos la U y u
                $cadena = str_replace(
                array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
                array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
                $cadena );

                //Reemplazamos la N, n, C y c
                $cadena = str_replace(
                array('Ñ', 'ñ', 'Ç', 'ç'),
                array('N', 'n', 'C', 'c'),
                $cadena
                );
                
                return $cadena;
            }
            function clean($string) {
                $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
                $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                $string = strtolower($string);
                        
                return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
            }


            

        if ($request->file('avatar') != null) {
            $image = "data:image/jpeg;base64,".base64_encode(file_get_contents($request->file('avatar')->path()));
            $user->imagen = $image;
        }else{

        }

        $url = eliminar_acentos($request->name);
                    $url = clean($url);
                    

        $user->name = $request->name;
        $user->url = $url;
        $user->nombre = $request->name;
        $user->email = $request->email;
        $user->puesto = $request->puesto;
        $user->semblaza = $request->semblanza;
        $user->descripcion = $request->descripcion;
        $user->telefono = $request->telefono;
        $user->whatsapp = $request->whatsapp;
        $user->linkedin = $request->linkedin;
        $user->twitter = $request->twitter;
        $user->facebook = $request->facebook;
        $user->instagram = $request->instagram;
        $user->area = $request->area;
        $user->linea = $request->linea;
        $user->formulario = $request->inlineRadioOptions;

        $user->save();

        $user = User::where('role', '=', null)->get();

        return view("dashboard", ['usuarios' => $user]);
    }
     public function sendMail(Request $request){
         $mj = new \Mailjet\Client("3ed1abd6eef1c2e815025a2801116c70", "4775bb3a9bcedb326bc355925aa04edf",true,['version' => 'v3.1']);

            // Define your request body
            $texto = 
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "webmaster@socasesores.com",
                            'Name' => "Webmaster"
                        ],
                        'To' => [
                            [
                                'Email' => $request->email_cliente,
                                'Name' => $request->email_cliente
                            ]
                        ],
                        'Subject' => "Contacto desde Tarjeta de Asesor",
                        'HTMLPart' => 'Estos son los datos del cliente:<ul>
                                            <li>Nombre: '.$request->name.'</li>
                                            <li>Teléfono: '.$request->telefono.'</li>
                                            <li>Email: '.$request->email.'</li>
                                            <li>Línea de negocio: '.$request->linea.'</li>
                                            <li>¿Qué tipo de crédito te interesa?: '.$request->producto.'</li>
                                            <li>Mensaje: '.$request->comentarios.'</li>
                                        </ul>'
                    ]
                ]
            ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $message = "Mensaje enviado";
        return redirect('https://socasesores.com/comunidad/'.$request->url)->with('message',$message);
    }
}
