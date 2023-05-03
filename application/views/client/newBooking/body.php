<link rel="stylesheet" href="assets/styles/newBooking.css"/>
<script src="assets/js/accommodation.js"></script>
<body>
  <div class="container">
    <h1>Confirmação de Reserva</h1>
    <p>Obrigado por escolher nosso hotel! Confira os detalhes da sua reserva:</p>
    <p>Check-in: <strong><?= date('d/m/Y', strtotime($bookingData['startDate'])); ?></strong></p>
    <p>Check-out: <strong><?= date('d/m/Y', strtotime($bookingData['endDate'])); ?></strong></p>
    <p>Cidade: <strong><?= $bookingData['city'] ?></strong></p>
    <p>Tipo de Quarto: <strong><?= $bookingData['roomName']; ?></strong></p>
    <img src="<?= $bookingData['picture']; ?>" alt="Quarto Luxo" class="image">
  </div>
</body>
<div class="container animate__animated animate__fadeInUp">
    <h1>Preencha os dados para confirmar a sua reserva.</h1>
    <form id='booking-confirmation'>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="customerName" name="customerName" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="customerEmail" name="customerEmail" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" class="form-control" id="customerPhone" name="customerPhone" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="customerAddress" name="customerAddress" required>
    </div>
    <div class="form-group">
        <label for="quantidade_hospedes">Quantidade de Hóspedes:</label>
        <input type="number" class="form-control" id="quantidade_hospedes" name="quantidade_hospedes" required>
    </div>
    <button id="btn-enviar" type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<!-- Botão para abrir o modal -->
<button id="open-modal-qrcode" hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQRCode">
  Exibir QR Code
</button>

<!-- Modal -->
<div class="modal fade" id="modalQRCode" tabindex="-1" role="dialog" aria-labelledby="modalQRCodeLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalQRCodeLabel">Confirmação da reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="rounded mx-auto d-block" width="300" height="300" id="booking-link" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIQAAACEAQMAAABrihHkAAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAA9klEQVRIic2VwQ3DMAwDtQH331IbqCTtIvmGziMGEtj3UCX5olZ9bc1Mo3oK3saETze07/YpJdPNkAW0tkcEw80LRKmh64wIAqr1VvtzonbvdbuL58R3X4PrlJGhAbVcmJ6cqMzSw55hm5CQYm7sOrwcOSPyW7hEDwh14tWNCmaeHZOS3DTcne/KCUNDH50vsmOCDeTVoGIyOtgFpZoTqF+r87vUjAjQJcnwv4uIrKaBvyCYE88hybBnQErcNQm1RlJMPEnguW0dUuJ2Lxt25JAoMBTUeR4RTZNZYh0RaSUrr/+CgHi4Wc1bx56TPfn5lqA5+db6AU2EvsbCP8FcAAAAAElFTkSuQmCC" alt="QR Code">
        <span>Use este Código QR para acessar os dados de sua reserva</span>
      </div>
      <div class="modal-footer">
        <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>