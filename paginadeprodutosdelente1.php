<?php
include ("conecta.php");


$foto = ["imagem"];

$nomefoto = "armacao3";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentes</title>
     <!--ICON NA GUIA-->
     <link rel="icon" href="imagensTelaInicial/logo.png">
    <link rel="stylesheet" href="css/estiloQuemsomos.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main>
      <center>
        <section>
            <div class="container">
                <div class="seta">
                    <a href="javascript:history.back()"><img src="images/setaespeculary (1).jpg"></a>
                </div>
                <div class="left-side">
                <div class="items">
                <div class="select-image">
                    <img src="images/lente.jpeg">
                </div>
            </div>
        </div>
                <div class="right-side">
                <div class="content">
                    <h6>LENTES DE CONTATO</h6>
                    <h1>Caixa de Lentes de Contato Acuvue 6 unidades</h1>
                    <p>poucas unidades</p>
                    <div class="prices">
                    <span class="price">$85,00</span>
                    <span class="off">$100,00</span>
                    </div>
                    <div class="options">
                    <button onclick="comprar()" type="submit" name="comprar" class=button>Adicionar ao Carrinho</button>
                        <div class="con-like">
                            <input title="like" type="checkbox" class="like">
                            <div class="checkmark">
                              <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z"></path>
                              </svg>
                              <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"></path>
                              </svg>
                              <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="10,10 20,20" class="poly"></polygon>
                                <polygon points="10,50 20,50" class="poly"></polygon>
                                <polygon points="20,80 30,70" class="poly"></polygon>
                                <polygon points="90,10 80,20" class="poly"></polygon>
                                <polygon points="90,50 80,50" class="poly"></polygon>
                                <polygon points="80,80 70,70" class="poly"></polygon>
                              </svg>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </center>
    </main>
</body>
<script src="alertCarrinho.js"></script>
<script>
function comprar()
{
  window.open("carrinho.php?nome=" +document.getElementById("nome").innerHTML+"&preco="+document.getElementById("preco").innerHTML+"&imagem="+"images/armacao3.jpg", "_self");
}
</script>
</html>