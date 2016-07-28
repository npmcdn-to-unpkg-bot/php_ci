<div class="jumbotron">
<div class="container">
  <h1>Olá <?php echo $this->session->userdata('nome'); ?></h1>
  <h3><span style="color:#92CE92">Obrigado por acessar a área do cliente!</span></h3>
  <!-- <p><a class="btn btn-primary btn-lg disabled" href="#" role="button">Learn more &raquo;</a></p> -->
</div>
</div>
<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Inventário</h2>
          <p>Listagem dos equipamentos e softwares que foram cadastrados pela FCA</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div>
        <div class="col-md-4">
          <h2>Contas</h2>
          <p>Impressão de Extratos Voip com diversos filtros, e impressão de Boletos a vencer ou vencidos (que não foram pagos)</p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
       </div>
       <div class="col-md-4">
          <h2>Status Servidor(es)</h2>
          <div>
            <?php
              echo status_servidor("http://mail.steinweg.com.br","Zimbra","fa-server");
            ?>
          <a href="#"><em>SLA: 99.98%</em></a>
          </div>
          <div>
            <?php 
              //
            ?>
          </div>

       </div>
      </div>
</div>
