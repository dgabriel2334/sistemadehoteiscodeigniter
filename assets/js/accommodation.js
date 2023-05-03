$(function() {
    $('#check-available-rooms').submit(function(event) {
      event.preventDefault(); 
      let data = paramsString($(this).serialize());
      checkAvailability(data);
    });
});

$(function() {
  $('#booking-confirmation').submit(function(event) {
    event.preventDefault(); 
    let data = paramsString($(this).serialize());
    addNewCustomerByClient(data);
  });
});

function addNewCustomerByClient(data) {
  $.ajax({
    url : 'client/addNewCustomer',
    type : "POST",
    data : data,
    dataType : 'json',
  }).done(function(res){
    if (res > 0) {
      addNewBooking(res);
    } else {
      alert("Erro ao fazer sua reserva \n Nunca se esqueça disso hakuna matata")
    }
  });
}

function getBookingParams() {
  var parametros = {};
  var query = window.location.search.substring(1);
  if (query.length) {
    var partes = query.split('&');
    for (var i = 0; i < partes.length; i++) {
      var chaveValor = partes[i].split('=');
      if (chaveValor.length == 2) {
        var chave = decodeURIComponent(chaveValor[0]);
        var valor = decodeURIComponent(chaveValor[1]);
        parametros[chave] = valor;
      }
    }
  }
  return parametros;
}


function addNewBooking(customerId) {
  let data = {};
  data = getBookingParams();
  data.customerId = customerId;
  $.ajax({
    url : 'client/addNewBooking',
    type : "POST",
    data : data,
    dataType : 'json',
  }).done(function(res){
    console.log(res);
    $('#booking-link').attr('src', 'data:image/png;base64,' + res.qrCodeBase64);
    $('#btn-enviar').remove();
    $('#open-modal-qrcode').trigger('click');
    $(document).on("click", '#close', function() {
      location.href = 'bookingInfo?uuid='+res.uuid;
    });
  });
}

function checkAvailability(data) {
  $.ajax({
    url : 'booking/availableRooms',
    type : "POST",
    data : data,
    dataType : 'json',
  }).done(function(res){
    console.log(res);

    if (res.status == true) {
      data.roomId = res.data[0].roomId;
      let queryString = '';
      for (let key in data) {
        if (data.hasOwnProperty(key)) {
            if (queryString.length > 0) {
                queryString += '&';
            }
            queryString += encodeURIComponent(key) + '=' + encodeURIComponent(data[key]);
        }
      }
      window.location.href = "newBooking?" + queryString;
    } else {
      $('#open-modal').trigger('click');
    }
  });
}

function paramsString(params) {
  let searchParams = new URLSearchParams(params);

  let obj = {};
  for (let [key, value] of searchParams.entries()) {
    obj[key] = value;
  }
  return obj;
}