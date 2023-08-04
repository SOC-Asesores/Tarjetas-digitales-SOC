<?php
use Illuminate\Http\Request;
use App\Models\User;

    function getQr($id){
        $user = User::where('id','=',$id)->first();
        $firstName = $user->nombre;
        $email = $user->email;
        $wordAddress = [
           'type' => 'work',
           'pref' => false,
           'street' => '',
           'city' => '',
           'state' => '',
           'country' => '',
           'zip' => ''
        ];
        
        $addresses = [$wordAddress];
        if ($user->telefono != null) {
                $Phone = [
                'type' => 'work',
                'number' => $user->telefono,
                'cellPhone' => false
            ];
        }else{
            $Phone = [
                'type' => 'work',
                'number' => '',
                'cellPhone' => false
            ];
        }

        
        $phones = [$Phone];
        
        return QRCode::vCard($firstName, "", "", $email, $addresses, $phones)->setErrorCorrectionLevel('L')->setSize(4)->setMargin(2)->svg();
    }
