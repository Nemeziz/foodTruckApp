//Make some checks before they can push that button
$('input#username').on('blur',function(){
  var jqEmail = $('#email').val();
  var jqUsername = $('#username').val();

  /**
   * TODO: add js VALIDATON (jolivetteme)
   */
});

//CLICK THE GET STARTED BUTTON
$('#register').on('click',function(){
  var jqEmail = $('#email').val();
  var jqUsername = $('#username').val();

  var data = {email:jqEmail,username:jqUsername};

  $(':input[type="text"]').prop("disabled",true);
  $(':input[type="email"]').prop("disabled",true);
  $(':input[type="button"]').prop("disabled",true);
  $('button#register').html("Updating . . . ");

  $.post('/dashboard/register/',data,function(data){
      //turn the button off with a message
      $('button#register').addClass("btn-info").html("Done. You can login now.").prop("disabled",true);
      window.locaton.replace("/dashboard/myinfo");
  });

  })
