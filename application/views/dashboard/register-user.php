<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Foodtruck Finder: <?php echo $pageTitle; ?></title>
</head>
<div class="form-group">
<body>
    <main class="container-fluid">
      <a href="/"><button class="btn btn-info btn-lg">Shoyanet Foodtruck App</button></a>

      <h3 class="well">Registration:
        <span class="user-exists text-danger hidden">Please choose another username!</span>
        <span class="email-exists text-danger hidden">Please choose another email!</span>
        <span class="user-too-short text-danger hidden">Username needs to be more than three (3) characters!</span>
      </h3>

      <hr />
      <section class="information">
        <form>
          <!-- Email field -->
          <div class="form-group">
            <label for="email">Your email</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com"><span class="email-error label label-danger"></span>

              <div class="assurance-message" style="padding:3px;">
                <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
              </div>
          </div>
          <!-- Username Field -->
          <div class="form-group">
            <label for="username">Your username</label>
              <input type="text" class="form-control" id="username" placeholder="bobsheppard"><span class="username-error label label-danger"></span>
          </div>
          <!-- Register Button -->
          <div class="form-group form-check container text-center">
            <button type="button" id="register" class="btn btn-block btn-success">Create Account</button>
          </div>
        </form>
      </section>

    </main>



<script src="assets/node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="assets/js/formFunctions.js" charset="utf-8"></script>
</body>
</html>
