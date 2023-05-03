$(function() {
    $('#contato').submit(function(event) {
      event.preventDefault(); 
      $('#modalSucesso').modal('show');
      setTimeout(() => {
        location.reload();
      }, 3000);
    });
});