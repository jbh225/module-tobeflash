<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <link rel="stylesheet" href="css/custom.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.print.css">

  <link rel="shortcut icon" href="img/logo.png">
  <title>Module | ToBeFlash</title>

</head>
<body>
  <!--debut container-->

  <div class="center">
    <img src="./img/logo.png">
  </div>

  <div class="container">

    <div class="row">
      <div class="col-lg-4">
        <p class="size">Sélectionnez votre produit pour connaître la date de livraison:</p>
        <form>
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
              <option>WEBKEY</option>
              <option>CLE USB</option>
              <option>VIDEO FLYER</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-valider marge-left">Valider</button>
          </div>
        </form>
      </div>


      <div class="col-lg-4">

        <div id="calendarMain" class="calendarMain"></div>



      </div>
    </div>
  </div>

  <!--fin container-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script src="js/new-script.js"></script>
  <script type="text/javascript">
  //<![CDATA[
  var myCalendar = new jsSimpleDatePickr();
  myCalendar.CalAdd({
  'divId': 'calendarMain',
  'inputFieldId': 'no',
  'dateMask': 'JJ/MM/AAAA',
  'dateCentury': 20,
  'titleMask': 'M AAAA',
  'navType': '11',
  'classTable': 'jsCalendar',
  'classDay': 'day',
  'classDaySelected': 'selectedDay',
  'monthLst': ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
  'dayLst': ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
  'hideOnClick': false,
  'showOnLaunch': true
  });
  //]]>
  </script>


</body>
</html>
