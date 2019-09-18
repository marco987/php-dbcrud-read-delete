<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <!-- JS: JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: CHART -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      <div class="box {{status}}">
        <h4>Pagamenti di categoria "{{status}}" ></h4>
        <div class="operazione" operazione-id:"{{id}}">
          <p>Numero prenotazione: <span>{{prenotazione_id}}</span></p>
          <p>Prezzo: <span>{{price}} €</span></p>
          <p>Codice ospite: <span>{{pagante_id}}</span></p>
          <p id="cancella">Cancella operazione</p>
        </div>
      </div>
    </script>
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>php-dbcrud-read-delete</title>
  </head>

  <body>

    <div id="container">
      <div id="titolo">
        <h1>PAGAMENTI</h1>
      </div>
      <div id="pagamenti">

      </div>
    </div>

  </body>

</html>
