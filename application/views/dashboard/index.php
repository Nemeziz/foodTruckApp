<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Foodtruck Finder Registration</title>
</head>
<div class="form-group">
<body>
    <main class="container-fluid">
      <a href="/"><button class="btn btn-info btn-lg">Shoyanet Foodtruck App</button></a>


      <h3 class="well">Registration</h3>
      <hr />
      <section class="information">
        <form>
          <div class="form-group">
            <label for="email">Your email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
            <span class="success label label-success"></span>
            <span class="error label label-danger"></span>
            <div class="assurance-message" style="padding:3px;">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Create a Username">
            <span class="label label-success">Success</span>
            <span class="label label-danger">Username exists</span>
          </div>
          <!-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" value="" placeholder="hidden">
          </div> -->
          <!-- <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" value="" placeholder="hidden">
          </div> -->
          <!-- <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="John">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Wayne">
          </div>
          <div class="form-group">
            <label for="mobilePhone">Mobile Phone Number</label>
            <input type="text" class="form-control" id="mobilePhone" placeholder="(512) 825-9546">
          </div> -->
          <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Trucks Assigned:</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option><?php //echo "PHP Loop Will Go Here! (Trucks)" ?></option>
            </select>
          </div> -->
            <!-- <label for="exampleFormControlTextarea1">Instructions</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
          </div>

          <div class="form-check container">
            <!-- <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label> -->
            <button type="button" id="register" class="btn btn-primary">Get Started</button>
          </div>

        </form>
      </section>
      <!-- <hr /><hr /><hr /><hr /> -->
      <!-- <section class="user-login">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </section> -->
      <div class="row container">
        <div id="result">This is Results: </div>
      </div>
    </main>



<script src="assets/node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script>


  $('#email').on('blur',function(){
    //Check if the email is registered
    var thisEmail = $('#email').val();
    formData = {email:thisEmail};
    // console.log(thisEmail);
    $.post('/dashboard/isEmailRegistered',formData,function(data){
      console.log("This is our data ",data);
    });

  })
  //CLICK THE GET STARTED BUTTON
  $('#register').on('click',function(){

    var username = $('#username').val();
    var email = $('#email').val();

    var formData = {username:username,email:email};

    // $.post( "/dashboard/register", formData, function( data ) {
    //   var message = JSON.parse(data);
    //   if (message.error) {
    //     alert(message.error);
    //   }
    //
    // });

  });
  // $('#register').click();
</script>
</body>
</html>
