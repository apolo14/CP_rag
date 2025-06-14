<?php
if (!defined('FLUX_ROOT')) exit;
$this->loginRequired();
?>
 <style>
 
  form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    max-width: 900px;
    /* margin removido, pois o alinhamento é feito pelo flex container */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  table.vertical-table {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    word-wrap: break-word;
  }
  
  table.vertical-table th {
    text-align: left;
    padding-right: 10px;
    vertical-align: top;
    width: 25%;
  }
  
  table.vertical-table td {
    width: 100%;
    padding-bottom: 10px;
  }
  
  h3 {
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
    margin-bottom: 15px;
  }
  
  input[type="text"],
  select,
  textarea {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px;
    width: 100%;
    box-sizing: border-box;
    height: 3rem;
  }
  
input[type="submit"] {
  background-color: #46305E;
  text-align: center;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 0;
}
  
  input[type="submit"]:hover {
    background-color: #8815D8;
  }
  
  @media screen and (max-width: 600px) {
    form {
      margin: 10px;
      padding: 15px;
    }
  }
  
  /* Remove margens padrão para os elementos listados */
  input, textarea, select, pre, blockquote, figure, table, p, ul, ol, dl, form, .fluid-video-wrapper, img.pull-right {
    margin: 0;
  }

  </style>

<section id="about">
<div class="row about-intro">
<h2><?php echo htmlspecialchars(Flux::message('SDCreateNew')) ?></h2>
 <form action="<?php echo $this->urlWithQs ?>" method="post">
    <!-- Campo Account ID oculto -->
    <input type="hidden" name="account_id" id="account_id" value="<?php echo $session->account->account_id ?>" />

    <h3>Informações Principais (Obrigatório)</h3>

    <table class="vertical-table">
      <tr>
        <th>Personagem</th>
        <td>
          <select name="char_id">
            <?php echo $charselect ?>
          </select>
        </td>
      </tr>
      <tr>
        <th>Título</th>
        <td>
          <input type="text" name="subject" id="subject" placeholder="Digite uma breve descrição sobre o ticket." />
        </td>
      </tr>
      <tr>
        <th>Categoria</th>
        <td>
          <select name="category" id="category" onchange="showInfo()">
            <?php if(!$catlist): ?>
              <option value="-1"><?php echo Flux::message('SDNoCatsAvailable') ?></option>
            <?php else: ?>
              <?php foreach($catlist as $cat): ?>
                <option value="<?php echo $cat->cat_id ?>"><?php echo $cat->name ?></option>
              <?php endforeach ?>
            <?php endif ?>
          </select>
        </td>
      </tr>
      <tr>
        <th>Conte o que aconteceu</th>
        <td>
          <textarea name="text" style="height:100px;"></textarea>
        </td>
      </tr>
    </table>
    
    <h3>Informações Adicionais (Opcional)</h3>
    <table class="vertical-table">
      <tbody id="chatrow">
        <tr>
          <th>Gepard Log</th>
          <td>
            <input type="text" name="chatlink" id="chatlink" placeholder="Cole o log (recomendamos pastebin.com)" />
          </td>
        </tr>
      </tbody>
      
      <tbody id="ssrow">
        <tr>
          <th>Print</th>
          <td>
            <input type="text" name="sslink" id="sslink" placeholder="Envie as prints para imgur.com e adicione o link." />
          </td>
        </tr>
      </tbody>
      
      <tbody id="videorow">
        <tr>
          <th>Video</th>
          <td>
            <input type="text" name="videolink" id="videolink" placeholder="Envie para o YouTube e coloque o link aqui." />
          </td>
        </tr>
      </tbody>
      
      <tr>
        <td colspan="2">
          <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
          <input type="submit" value="CRIAR TICKET" />
        </td>
      </tr>
    </table>
  </form>
</div>
</section>