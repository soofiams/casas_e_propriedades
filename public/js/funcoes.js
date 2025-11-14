function abrir_popup(id){
    window.open(
      `http://localhost/casas_e_propriedades/public/filemanager/dialog.php?field_id=${id}&popup=1`,
      "Gestor de Ficheiros",
      "width=850,height=600"
    );
  }

  function scroll_automatico(){
    document.querySelector("main").scrollIntoView();
  }
  
  function verificar_scroll(){
    if(menu_atual != "home"){scroll_automatico();}
  }


  function abrir_menu_empresas(){
    menu_empresas.click(); }
   
   function abrir_menu_delay1(){
   setTimeout(abrir_menu_empresas, 850);
   }


function abrir_menu_projetos(){
 menu_projetos.click(); }

function abrir_menu_delay2(){
setTimeout(abrir_menu_projetos, 850);
}

function abrir_menu_portefolio(){
    menu_portefolio.click(); }
   
   function abrir_menu_delay3(){
   setTimeout(abrir_menu_portefolio, 850);
   }
   
  window.addEventListener("load", verificar_scroll);