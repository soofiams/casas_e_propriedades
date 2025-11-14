<?php

session_start();

function fazer_login($login, $senha){
  $usuario = select_sql_unico("SELECT * FROM backoffice WHERE login='$login' AND senha='$senha'");
  if (!empty($usuario)) {
    $_SESSION["usuario"] = $usuario;
    return true;
  } else {
    return false;
  }
}

function verificar_logado(){
  if (!empty($_SESSION["usuario"])) {
    return $_SESSION["usuario"];
  } else {
    header("Location: index.php");
  }
}

function logout(){
  session_destroy();
  header("Location: index.php");
}
