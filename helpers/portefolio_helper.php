<?php

function get_portefolio_nav()
{
  $resultado = select_sql("SELECT id, nome, localidade FROM portefolio");
  return $resultado;
}

function get_portefolio_especifico($id)
{
  $resultado = select_sql_unico("SELECT * FROM portefolio WHERE id=$id LIMIT 1");
  return $resultado;
}

function get_portefolio()
{
  $resultado = select_sql("SELECT * FROM portefolio");
  return $resultado;
}

function get_portefolio_imagens($id)
{
  $resultado = select_sql_unico("SELECT imagens FROM portefolio WHERE id=$id LIMIT 1");
  return $resultado;
}
