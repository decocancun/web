<?php 

$validacion["name"] 			    = array("etiqueta" =>"name", 		"validacion" => "letras");
$validacion["email"] 			    = array("etiqueta" =>"email", 		"validacion" => "email");
$validacion["phone"] 			    = array("etiqueta" =>"phone", 	"validacion" => "telefono");
$validacion["event"] 			= array("etiqueta" =>"events", 		"validacion" => "letras");

$errors = array();
$limpios = array();


foreach ($validacion as $input => $value) {

	if (isset($_POST[$input])) {
		
		if( $_POST[$input] =="") {

			$errors[$input] = "Please enter your ".$value["etiqueta"];

		}

		switch ($value["validacion"]) {

			case 'letras':
			
			if (isset($errors[$input]) && $errors[$input]!='') {}else{


				if(preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/",$_POST[$input])) {

					$nombre = $_POST[$input];
					$limpios[$input] = $nombre;

				}else{
					$errors[$input] = $value["etiqueta"]." is incorrect *";
				}

			}

			break;


			case 'email':

			if (isset($errors[$input]) && $errors[$input]!='') {}else{

				if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$_POST[$input])) {

	    			$email = limpiarString($_POST[$input]);
					$limpios[$input] = $email;
	  			}
  				else{

					$errors[$input] = "Please enter your ".$value["etiqueta"]." (example@gmail.com)";

				}
			}
			break;


			case 'telefono':

			if (isset($errors[$input]) && $errors[$input]!='') {}else{
				
			if (preg_match("/[0-9]{10}/",$_POST[$input])) {

				$email = limpiarString($_POST[$input]);
				$limpios[$input] = $email;

				}
				else{

					$errors[$input] = "Please enter your  ".$value["etiqueta"]."( example: 998 569 02 03)";

				}
			}
			break;

            case 'letras_numeros_espacios':

            

               if (preg_match("/^[A-Za-z0-9\s]+$/", $_POST[$input])) {

					$email = limpiarString($_POST[$input]);
					$limpios[$input] = $email;

                } else {

                    $errors[$input] = "The" . $value["etiqueta"] . ", field is required *";
                }

            
            break;


			case 'letras_numeros':

				$texto = limpiarString($_POST[$input]);
				$limpios[$input] = $texto;

			break;


			case 'validation_captcha':

			
			$response_recaptcha = $_POST[$input];

			if (isset($errors[$input]) && $errors[$input]!='') {}else{

				$secret = "6Lee5XgUAAAAALAAo0QZNS0JbFwHor_zO23jbvKf";
				$ip = $_SERVER['REMOTE_ADDR'];
				$validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response_recaptcha."&remoteip=".$ip."");

				$respuesta = json_decode($validation_server);

				if ($respuesta->success !==false) {}else{

					$errors[$input] = "El campo ".$value["etiqueta"]." es incorrecto.";
				}	
				
			}

			break;



			default:
				$texto = limpiarString($_POST[$input]);
				$limpios[$input] = $texto;
			break;
		}
	}
	else{

		$errors[$input] = "El campo ".$value["etiqueta"]." no esta en el Post.";
	}
}




/*---------------inicio--------------- */




if (count($errors)==0 && isset($_POST['save'])&& $_POST['save']=="ok") {
	$fechaActual = date('Y-m-d H:i:s');
    $datos["nombre"]	= $limpios['name'];
    $datos["correo"] 	= $limpios['email'];
    $datos["telefono"]	= $limpios['phone'];
	$datos["evento"] 	= $limpios['event'];
	$datos["fecha"] 	= $fechaActual;
    $datos["mensaje"] 	= $_POST['message'];


    $enviar_a	= 'info@decocancun.com';
    $asunto		= 'Correo enviado desde la pagina web decocancun.com';
    $info = "";
    foreach ($datos as $key => $value) {
        $info .= "<br> <strong>".ucwords($key)."</strong>: ".$value;
    }
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers.= "Content-type: text/html; charset=UTF-8\r\n"; 
    $headers.= "X-Priority: 1\r\n";
    
    $enviado = mail($enviar_a, $asunto,$info,$headers);//
    if (/*1==1*/ $enviado !== false) {
        // Gusarda los los datos en la bd
        $objUser = new info();//

        $objUser->salvar($datos);//

    	// procedemos a devolver la respuesta de aprovacion
        $resultado["status"]="success";
		$resultado["mesage"]="Message sent bd";
		$resultado['ResExitoso']= $limpios;

    }else {
        // Hubo algun tipo de error
        $resultado["status"]="error";
		$resultado["mesage"]="Message not sent bd";
		$resultado['ResExitoso']= $limpios;

		
    }
    
    echo json_encode($resultado);

}else{

$array = array(
    'status' 	=>'error',
    'mesage'	=>'Message not sent',
	'errors'	=> $errors,
	'ResExitoso'=>$limpios
);

echo json_encode($array);
}

/*FIN ------------------------*/

function limpiarString($string){

	$string = trim($string); // Elimina espacios antes y después de los string
	$string = stripslashes($string); // Elimina backslashes \
	$string = htmlspecialchars($string); // Traduce caracteres especiales en entidades HTML
	return $string;

}


class info{

    public function db_connect() {

    //$con = new mysqli('localhost','root','','zdweb');
    // $con = new mysqli('jorge.decocancun.com','decoc642_zdweb','vaA!}U={O?wQ','decoc642_zdweb');
	$con = new mysqli('decocancun.com','decoc642_zdweb','vaA!}U={O?wQ','decoc642_zdweb');
    if ($con->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    }
        
    return $con;

    }

    public function salvar($params = array()){
    	$con = self::db_connect();
		$cadena_insertar='INSERT INTO `usuario` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';

			$stmt = $con->query($cadena_insertar);

			if ($stmt!==false) {

			 	$salvado=true;

			 } else{

			 	$salvado=false;

			 }	

	        return $salvado;

	}
    
}


?>
