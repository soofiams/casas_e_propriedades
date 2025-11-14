<?php

function get_carousel(){
  $resultado = select_sql("SELECT * FROM carrossel_header");
  return $resultado;
}
