<br>
<script src="assets/js/contact.js"></script>
<body>
  <div class="container animate__animated animate__fadeInUp">
    <h1>Entre em contato</h1>
    <div class="row">
      <div class="col-md-6">
        <form id="contato">
          <div class="form-group">
            <label for="inputName">Nome</label>
            <input type="text" class="form-control" id="inputName" placeholder="Digite seu nome">
          </div>
          <div class="form-group">
            <label for="inputEmail">E-mail</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Digite seu e-mail">
          </div>
          <div class="form-group">
            <label for="inputSubject">Assunto</label>
            <input type="text" class="form-control" id="inputSubject" placeholder="Digite o assunto">
          </div>
          <div class="form-group">
            <label for="inputMessage">Mensagem</label>
            <textarea class="form-control" id="inputMessage" rows="5" placeholder="Digite sua mensagem"></textarea>
          </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSucesso">
            Enviar
            </button>
        </form>
      </div>
      <div class="col-md-6">
        <h2>Informações de contato</h2>
        <p><i class="fas fa-map-marker-alt"></i> Endereço: Rua 123, Bairro X, Cidade Y</p>
        <p><i class="fas fa-phone"></i> Telefone: (11) 1234-5678</p>
        <p><i class="fas fa-envelope"></i> E-mail: contato@exemplo.com</p>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="modalSucessoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSucessoLabel">Sucesso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Seu formulário foi enviado com sucesso!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</body>
