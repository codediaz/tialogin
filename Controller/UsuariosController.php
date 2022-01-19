<?php

Class UsuariosController{

    public function ctrSesion(){

    if(isset($_POST["inEmail"])){


        $intentos = 0;
        $tabla = "usuarios";
        $item = "email";
        $valor = $_POST["inEmail"];

    
        $respuesta = UserModel::login($tabla,$item,$valor);
        
        if($respuesta["email"== $_POST["inEmail"]] && $respuesta["passw"]== $_POST["inPassw"]&& $respuesta["intentos"]<3){

            echo '<div>
            <div class="alert alert-success">
              Ingreso Correcto al sistema
            </div>
             </div>';

        
    }elseif ($respuesta["email"==$_POST["inEmail"]] && $respuesta["passw"]!= $_POST["inPassw"]&& $respuesta["intentos"]<3) {
         echo '<div>
        <div class="alert alert-danger">
          Usuario/Contraseña Incorrectos, intente de nuevo por favor
        </div>
         </div>';
    }elseif ($respuesta["email"== $_POST["inEmail"]] && $respuesta["passw"]== $_POST["inPassw"]&& $respuesta["intentos"]>=3) {
            echo '<div>
            <div class="alert alert-warning">
              Cuenta Bloqueada por número máximo de intentos
            </div>
             </div>';
    }
      else{

        echo '<div>
                <div class="alert alert-danger">
              Credenciales Incorrectas, solicitar registro en el sistema.
        </div>
        </div>';

        echo '<script>if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
            } </script>';

        }


        }
    }

}