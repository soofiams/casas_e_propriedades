<?php

function get_projetos_nav()
{
  $resultado = select_sql("SELECT id, nome FROM projetos_comercializacao");
  return $resultado;
}

function get_projeto_especifico($id)
{
  $resultado = select_sql_unico("SELECT * FROM projetos_comercializacao WHERE id=$id LIMIT 1");
  return $resultado;
}

function get_projetos()
{
  $resultado = select_sql("SELECT * FROM projetos_comercializacao");
  return $resultado;
}


function get_acabamentos()
{
  $resultado = select_sql_unico("SELECT * FROM projetos_comercializacao ");
  return $resultado;
}

function get_acabamentos_especifico($id)
{
  $resultado = select_sql_unico("SELECT * FROM projetos_comercializacao WHERE id=$id LIMIT 1");
  return $resultado;
}
