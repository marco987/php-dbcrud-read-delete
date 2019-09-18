$(document).ready(function(){

function ricarica() {
  $("#pagamenti").html("");
}

function getPagamenti() {

  ricarica();

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

function deletePagamento() {

  var bottoneDelete = $(this);
  var box = bottoneDelete.parent();

  var idPagamento = box.attr("operazione-id");

  $.ajax({
    url: "api-delete.php",
    method: "GET",
    data: { id : idPagamento },
    success: function(data){
      getPagamenti();
    },
    error: function(){
      alert("Errore");
    }
  });

}




// Richiamo funzioni
getPagamenti();
deletePagamento();
$(document).on("click", ".cancella", deletePagamento)














// Chiusura funzione riga 1
// $(document).ready(function(){
});
