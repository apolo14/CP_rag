<?php if (!defined('FLUX_ROOT')) exit; ?>
  <style>
    
    /* Organiza as colunas em layout flex */
    .about-intro {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    
    /* Cada coluna ocupa metade do espaço */
    .col-half {
      flex: 1;
      min-width: 280px;
    }
    p {
		text-align: center;
		color: black;
	}
    .col-half h3{
      text-align: center;
      margin-bottom: 10px;
    }
    
    /* Estilos para as tabelas */
    .info-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      background-color: #fff;
      color: #333;
    }
    
    .info-table th,
    .info-table td {
      padding: 8px;
      border: 1px solid #ddd;
    }
    
    .info-table th {
      background-color: #dcd0f3;
    }
    
    .info-table tr:nth-child(even) {
      background-color: #f8f8f8;
    }
  </style>
  <section id="about">
    <div class="row about-intro">
	<h3>Informações sobre o <b>servidor</b>!</h3>
				<h4>Midgard Realms</h4>
				<p>O Midgard Realms é um servidor Free-To-Play com Sistema de RMT integrado. Conosco você poderá desfrutar de uma progressão agradável junto com o servidor, 
				 além disso também poderá desfrutar de sistemas como Conquistas, Títulos, Rankings entre outros.</p>
      <!-- Primeira tabela: Configurações do Servidor -->
      <div class="col-half">
        <h3>Configurações do Servidor</h3>
        <table class="info-table">
          <tr>
            <th>Episódio</th>
            <td>16.1</td>
          </tr>
          <tr>
            <th>Nível Max.</th>
            <td>175/70</td>
          </tr>
          <tr>
            <th>Atributos Max.</th>
            <td>130</td>
          </tr>
          <tr>
            <th>Trait Stats</th>
            <td>100</td>
          </tr>
          <tr>
            <th>ASPD Max.</th>
            <td>193</td>
          </tr>
          <!--<tr>
            <th>4th Classes</th>
            <td>Sim</td>
          </tr> -->
          <tr>
            <th>Classes Expandidas</th>
            <td>Sim</td>
          </tr>
          <tr>
            <th>Divisão de EXP</th>
            <td>15 Níveis</td>
          </tr>
        </table>
      </div>
      
      <!-- Segunda tabela: Tabela de EXP e DROP Base -->
      <div class="col-half">
        <h3>Tabela de EXP e DROP Base</h3>
        <table class="info-table">
          <tr>
            <th>Rate</th>
            <td>1x</td>
          </tr>
          <tr>
            <th>Drop de Itens</th>
            <td>10x</td>
          </tr>
          <tr>
            <th>Drop de Cartas</th>
            <td>0,1%</td>
          </tr>
          <tr>
            <th>Drop de Cartas Mini-Boss</th>
            <td>0,05%</td>
          </tr>
          <tr>
            <th>Drop de Cartas MVP</th>
            <td>0,01%</td>
          </tr>
        </table>
      </div>
    </div>
  </section>