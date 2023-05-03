<section id="location" class="py-5 animate__animated animate__fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-4">Localização</h2>
        <p>O nosso hotel está localizado em uma área privilegiada da cidade, próximo aos principais pontos turísticos e centros comerciais. Confira o mapa para saber como chegar até nós.</p>
      </div>
      <div class="col-md-6">
        <div id="map" style="height: 300px;"></div>
      </div>
    </div>
  </div>
</section>

<script>
    var mymap = L.map('map').setView([-3.0914283,-60.0286104], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18
    }).addTo(mymap);
    var marker = L.marker([-3.0914283,-60.0286104]).addTo(mymap);
    marker.bindPopup("<b>Faculdade Estácio do Amazonas</b><br>Manaus, AM.").openPopup();
</script>
