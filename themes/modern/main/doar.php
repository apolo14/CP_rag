<?php if (!defined('FLUX_ROOT')) exit; ?>
  <style>
  
  #about{
  display:flex;              /* empilha título, grade, aviso          */
  flex-direction:column;
  align-items:center;        /* tudo centralizado no eixo X           */

  min-height:100vh;          /* altura total da janela                */
  padding:150px 0 100px;      /* 50px topo  |  100px fundo             */

  box-sizing:border-box;     /* padding conta dentro do 100 vh        */
}

    h1 {
      margin-bottom: 30px;
      color: #333;
    }
    
    /* Container dos itens com maior separação horizontal */
    .container {
	  display:grid;
	  grid-template-columns:repeat(5,1fr);
	  column-gap:16px;   /* ou `gap:16px 30px;` se preferir 1 linha   */
	  row-gap:60px;
    }
.loja{
  display:flex;
  justify-content:center;
  align-items:center;
  flex:1;                    /* ocupa o espaço que sobrar             */
  /*  (remova qualquer min-height:100vh antigo)                     */
}

    
    /* Cada item agrupa o valor (caption) e o losango */
    .item {
      width: 150px;
	  display: flex;
	  flex:0 0 25%;        /* 4 por linha ⇒ 25 % cada                 */
	  box-sizing:border-box;
	  flex-direction: column;
	  align-items: center;

    }
    
    /* Texto com o valor, posicionado acima do losango */
    .caption {
      margin-bottom: 10px;
      font-weight: bold;
      color: #46305e;
      text-align: center;
	  transform: translateY(-20px); /* Valor negativo para mover para cima */

    }
    
    /* Losango com contorno em volta da imagem */
    .diamond {
      width: 90px;
      height: 90px;
      border: 4px solid #46305e;
      background-color: transparent;
      position: relative;
      transform: rotate(45deg);
      overflow: hidden;
      cursor: pointer;
	  margin: 0 auto;
      transition: border-color 0.3s ease, transform 0.3s ease;
    }
    
    /* Efeito hover: muda o contorno para #8815d8 e aumenta levemente */
    .diamond:hover {
      border-color: #8815d8;
      transform: rotate(45deg) scale(1.05);
    }
    
    /* A imagem é posicionada corretamente dentro do losango */
    .diamond img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: rotate(-45deg);
      display: block;
    }
    
    /* Tooltip que segue o mouse */
    #tooltip {
      position: absolute;
      pointer-events: none;
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 5px 8px;
      border-radius: 4px;
      font-size: 12px;
      display: none;
      z-index: 1000;
      white-space: pre-line;
    }
.titulo-loja{
  text-align:center;
  font-size:2rem;
  font-weight:600;
  margin:0 0 32px;           /* zera topo porque já temos 50px no pai */
  display:flex;
  align-items:center;
  justify-content:center;
  gap:20px;
}

.titulo-loja::before,
.titulo-loja::after{
  content:"";
  flex:1;
  height:2px;
  background:#c0c0c0;
}


@media(max-width:600px){
  .container{
    grid-template-columns:repeat(2,1fr);
  }
}

/* =====  LINHA EM CIMA, TEXTO EMBAIXO  ===== */
.aviso-bonus{
  position:relative;
  margin-top:auto;           /* cola no fim do flex-coluna            */
  text-align:center;
  font-size:0.875rem;
  color:#666;
  line-height:1.4;
}
.aviso-bonus::before{
  content:"";
  display:block;
  width:100%;
  height:1px;
  background:#c0c0c0;
  margin-bottom:8px;
}

  </style>
  
  <div id="about">
    <h1 class="titulo-loja">Bônus por doação</h1>
  <!-- Tooltip que seguirá o mouse -->
  <div id="tooltip"></div>
  <div class="loja">

  <div class="container">
    <!-- Item 1 -->
    <div class="item">
      <div class="caption">A cada R$1,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 1')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="../images/logo.png" alt="Produto 1">
      </div>
    </div>

    <!-- Item 2 -->
    <div class="item">
      <div class="caption">A cada R$10,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 2')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="../images/logo.png" alt="Produto 2">
      </div>
    </div>

    <!-- Item 3 -->
    <div class="item">
      <div class="caption">A cada R$50,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 3')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="../images/logo.png" alt="Produto 3">
      </div>
    </div>

    <!-- Item 4 -->
    <div class="item">
      <div class="caption">A cada R$95,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
	    <!-- Item 4 -->
    <div class="item">
      <div class="caption">A cada R$150,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
	    <!-- Item 4 -->
    <div class="item">
      <div class="caption">A cada R$150,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
	    <!-- Item 4 -->
    <div class="item">
      <div class="caption">A cada R$1200,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
	    <!-- Item 4 -->
    <div class="item">
      <div class="caption">A cada R$1200,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
	<div class="item">
      <div class="caption">A cada R$2500,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
	<div class="item">
      <div class="caption">A cada R$2500,00</div>
      <div class="diamond"
           onmouseenter="showTooltip(event, 'Descrição do Produto 4')"
           onmousemove="moveTooltip(event)"
           onmouseleave="hideTooltip()">
        <img src="product4.jpg" alt="Produto 4">
      </div>
    </div>
  </div>
 </div>
 <div class="aviso-bonus">
  Doações separadas não acumulam para as bonificações!
</div>

 </div>
  <script>
    function showTooltip(e, text) {
      const tooltip = document.getElementById('tooltip');
      tooltip.style.display = 'block';
      tooltip.textContent = text;
      moveTooltip(e); // Posiciona o tooltip logo no início
    }
    
    function moveTooltip(e) {
      const tooltip = document.getElementById('tooltip');
      // Define a posição do tooltip com um pequeno deslocamento em relação ao cursor
      tooltip.style.left = (e.pageX + 10) + 'px';
      tooltip.style.top = (e.pageY + 10) + 'px';
    }
    
    function hideTooltip() {
      const tooltip = document.getElementById('tooltip');
      tooltip.style.display = 'none';
    }
  </script>
