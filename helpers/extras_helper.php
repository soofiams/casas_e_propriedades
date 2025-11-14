<?php

function get_extras(){
  $resultado = select_sql_unico("SELECT * FROM Extras ");
  return $resultado;
}


function get_extras_especifico($id){
  $resultado = select_sql_unico("SELECT * FROM Extras WHERE id=$id LIMIT 1");
  return $resultado;
}
