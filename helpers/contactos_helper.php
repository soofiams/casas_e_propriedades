<?php

function get_contactos(){
  $resultado = select_sql_unico("SELECT * FROM contactos");
  return $resultado;
}
