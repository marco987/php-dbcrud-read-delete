$(document).ready(function(){

function getPagamenti() {
  $.ajax({
    url: "api.php",
    method: "GET",
    success: function(data){
      printPagamenti(data);
    },
    error: function(){
      alert("Errore");
    }
  });
}

function printPagamenti(data) {

  var source = $("#item-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {

    var context = data[i];
    var html = template(context);

    $("#pagamenti").append(html);
  }

}



// Richiamo funzioni
getPagamenti();















// Chiusura funzione riga 1
// $(document).ready(function(){
});
