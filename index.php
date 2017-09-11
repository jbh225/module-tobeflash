<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <link rel="stylesheet" href="css/custom.css">

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
      <div class="col-lg-offset-2 col-lg-4">
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
            <button type="button" class="btn btn-valider marge-left">Valider</button>
          </div>
        </form>
      </div>

      <div class="col-lg-7">
        <!--debut php-->
        <?php
        require ('date.php');

        $date = new Date();

        $year = date ('Y');
        $dates = $date->getAll($year);
        ?>

        <div class="periods">
          <div class="year"><?php echo $year ?></div>
          <div class="months">
            <ul>
              <?php foreach ($date->months as $id=>$m): ?>
                <li><a href="#" id="linkMonth <?php echo $id+1; ?>"><?php echo utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>
              <?php endforeach ?>
            </ul>
          </div>
          <?php $dates = current($dates); ?>

          <?php foreach ( $dates as  $m=> $days): ?>
            <div class="month" id="month<?php echo $m; ?>">
              <table>
                <thead>
                  <tr>
                    <?php foreach ($date->days as $d): ?>
                      <th><<?php echo substr($d,0,3); ?></th>
                      <?php endforeach; ?>
                    </tr>
                  </thead>
                </table>
              </div>
            <?php endforeach ?>
          </div>
          <!--fin php-->
          <!-- <pre><?php print_r($dates); ?></pre> -->


        </div>
      </div>
    </div>

    <!--fin container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/script/js" type="text/javascript">

    </script>
  </body>
  </html>
