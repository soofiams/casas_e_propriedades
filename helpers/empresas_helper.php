<?php

function get_empresas(){
  $resultado = select_sql("SELECT * FROM empresas ");
  return $resultado;
}
function get_empresas_nav(){
  $resultado = select_sql("SELECT id, titulo FROM empresas");
  return $resultado;
}

function get_empresas_especifico($id){
  $resultado = select_sql_unico("SELECT * FROM empresas WHERE id=$id LIMIT 1");
  return $resultado;
}
