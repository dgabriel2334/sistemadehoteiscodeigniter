<link rel="stylesheet" href="assets/styles/newBooking.css"/>
<script src="assets/js/accommodation.js"></script>
<body>
  <div class="container animate__animated animate__fadeInUp">
    <h1>Reserva confirmada!</h1>
    <p>Obrigado por escolher nosso hotel! Confira os detalhes da sua reserva:</p>
    <p>Check-in: <strong><?= date('d/m/Y', strtotime($bookStartDate)); ?></strong></p>
    <p>Check-out: <strong><?= date('d/m/Y', strtotime($bookEndDate)); ?></strong></p>
    <p>Cidade: <strong>Manaus</strong></p>
    <p>Tipo de Quarto: <strong><?= $sizeTitle; ?></strong></p>
    <p>Cliente: <strong><?= $customerName; ?></strong></p>
    <p>Email cadastrado: <strong><?= $customerEmail; ?></strong></p>
    <p>Telefone cadastrado: <strong><?= $customerPhone; ?></strong></p>
    <img src="<?= $picture; ?>" alt="Quarto Luxo" class="image">
  </div>
</body>