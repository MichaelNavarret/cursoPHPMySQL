<style>
      h1{
        text-align:center;
      }

      table{
        background-color:#FFC;
        padding:5px;
        border:#666 5px solid;
      }
      
      .no_validado{
        font-size:18px;
        color:#F00;
        font-weight:bold;
      }
      
      .validado{
        font-size:18px;
        color:#0C3;
        font-weight:bold;
      }


    </style>

<?php
    if (isset($_POST["enviando"])) { //isset -> comprobar si se ha pulsado el boton de enviar.
    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    if($usuario == "Michael" && $edad >= 18){
        echo ("<p class = 'validado' > Puedes entrar </p>");
    }else{
        echo ("<p class = 'no_validado' > No puedes entrar</p> ");
    }
    }
?>