document.addEventListener("DOMContentLoaded", () => {
  
  const imagemPrincipal = document.getElementById("imagemPrincipal");
  const miniaturas = document.querySelectorAll("#caixaMiniaturas img");
  const btnAnterior = document.getElementById("botaoAnterior");
  const btnSeguinte = document.getElementById("botaoSeguinte");

  let pagina = 0;
  const porPagina = 8;

  function mostrarMiniaturas() {
    for (let i = 0; i < miniaturas.length; i++) {
      if (i >= pagina * porPagina && i < (pagina + 1) * porPagina) {
        miniaturas[i].style.display = "inline-block";
      } else {
        miniaturas[i].style.display = "none";
      }
    }
  }

  for (let i = 0; i < miniaturas.length; i++) {
    miniaturas[i].addEventListener("click", function () {
      imagemPrincipal.src = this.src;
      for (let j = 0; j < miniaturas.length; j++) {
        miniaturas[j].classList.remove("ativa");
      }
      this.classList.add("ativa");
    });
  }

  
  btnAnterior.addEventListener("click", () => {
    if (pagina > 0) {
      pagina--;
      mostrarMiniaturas();
    }
  });

  btnSeguinte.addEventListener("click", () => {
    if ((pagina + 1) * porPagina < miniaturas.length) {
      pagina++;
      mostrarMiniaturas();
    }
  });

  mostrarMiniaturas();
});
