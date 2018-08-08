<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title><?php echo $pageTitle; ?></title>
</head>
<div class="form-group">
<body>
    <main class="container-fluid">
      <a href="/"><button class="btn btn-info btn-lg">Shoyanet Foodtruck App</button></a>

      <header><h3 class="well">Dashboard {UserName}:</h3></header>
      <main id="content">
        <h2>Here are the Foodtrucks in your area!</h2>
        <hr><hr>
        <section>
          <h3>Google Maps Goes here!</h3>
          <hr>
          <div id="row map"></div>
          <div>End of Google Maps</div>
        </section>

      </main>

      <hr />
      <section class="information">

      </section>

    </main>



<script src="assets/node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="assets/js/formFunctions.js" charset="utf-8"></script>
</body>
</html>
