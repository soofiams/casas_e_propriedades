<?php

function get_todos_imoveis(){
  $resultado = select_sql("SELECT * FROM imovel");
  return $resultado;
}

function get_todos_imoveis_id($id_projeto){
  $resultado = select_sql("SELECT * FROM imovel WHERE id_projeto=$id_projeto");
  return $resultado;
}

function get_imoveis_especifico($id){
  $resultado = select_sql_unico("SELECT * FROM imovel WHERE id=$id LIMIT 1");
  return $resultado;
}

function get_todos_imoveis_home(){
  $resultado = select_sql("SELECT * FROM imovel WHERE mostrar=1");
  return $resultado;
}

?>