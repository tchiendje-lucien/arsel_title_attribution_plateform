//Login Script
$ ('#LoginButtun').click (function (e) {
  e.preventDefault ();
  //alert("bonjour")
  var postData = $ ('#LoginForm').serialize ();
  var email = $ ('#EmailLogin').val ();
  var password = $ ('#PasswordLogin').val ();
  const EMAIL_REGEX = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (email != '' && password != '') {
    if (EMAIL_REGEX.test (email)) {
      $.ajaxSetup ({
        headers: {
          'X-CSRF-TOKEN': $ ('meta[name="csrf-token"]').attr ('content'),
        },
      });

      $.ajax ({
        type: 'post',
        url: '/connection',
        data: postData,
        dataType: 'json',
        success: function (result) {
          if (result.isSuccess == false && result.errorMessage != '') {
            alert ('yo');
            console.log (result.isSuccess);
            $ ('#errorMessage').text (result.errorMessage);
            $ ('#errorEmpty').text ('');
            $ ('#errorEmail').text ('');
          } else {
            window.location.href = '/HomePage';
          }
        },
      });
    } else {
      $ ('#errorEmail').text ("Mauvais format de l'email !!!");
      $ ('#errorMessage').text ('');
      $ ('#errorEmpty').text ('');
    }
  } else {
    $ ('#errorEmpty').text ('Veillez remplir tout les champs !!!');
    $ ('#errorEmail').text ('');
    $ ('#errorMessage').text ('');
  }
});

//Register Script
$ ('#RegisterButtum').click (function (e) {
  e.preventDefault ();
  //alert("bonjour")
  var postData = $ ('#RegisterFrom').serialize ();
  var RepeatPassword = $ ('#RepeatPassword').val ();
  var password = $ ('#Password').val ();
  var email = $ ('#InputEmail').val ();
  var LastName = $ ('#LastName').val ();
  var FirstName = $ ('#FirstName').val ();
  const EMAIL_REGEX = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  const PASSWORD_REGEX = /^(?=.*\d).{4,12}$/;

  if (
    email != '' &&
    password != '' &&
    RepeatPassword != '' &&
    LastName != '' &&
    FirstName != ''
  ) {
    if (EMAIL_REGEX.test (email)) {
      if (PASSWORD_REGEX.test (password)) {
        if (password == RepeatPassword) {
          $.ajaxSetup ({
            headers: {
              'X-CSRF-TOKEN': $ ('meta[name="csrf-token"]').attr ('content'),
            },
          });

          $.ajax ({
            type: 'post',
            url: '/create',
            data: postData,
            dataType: 'json',
            success: function (result) {
              if (result.isSuccess == false && result.SuperError != '') {
                console.log (result.isSuccess);
                $ ('#SuperError').text (result.SuperError);
                $ ('#erreurEmail').text ('');
                $ ('#errorPassword').text ('');
              } else if (
                result.isSuccess == false &&
                result.erreurEmail != ''
              ) {
                $ ('#SuperError').text ('');
                $ ('#erreurEmail').text (result.erreurEmail);
                $ ('#errorPassword').text ('');
              } else if (
                result.isSuccess == false &&
                result.errorPassword != ''
              ) {
                $ ('#SuperError').text ('');
                $ ('#erreurEmail').text ('');
                $ ('#errorPassword').text (result.errorPassword);
              } else if (result.isSuccess == true) {
                $ ('#SuperError').text ('');
                $ ('#erreurEmail').text ('');
                $ ('#errorPassword').text ('');
                window.location.href = '/Login';
              }
            },
          });
        } else {
          $ ('#SuperError').text ('');
          $ ('#erreurEmail').text ('');
          $ ('#errorPassword').text ('Mots de passe differents !!!');
        }
      } else {
        $ ('#SuperError').text ('');
        $ ('#erreurEmail').text ('');
        $ ('#errorPassword').text (
          'password invalid (must length 4 - 12 and include 1 number at least !!!'
        );
      }
    } else {
      $ ('#SuperError').text ('');
      $ ('#erreurEmail').text ('email is not valid because bad format');
      $ ('#errorPassword').text ('');
    }
  } else {
    $ ('#SuperError').text ('Veillez remplir tous les champs !!!');
    $ ('#erreurEmail').text ('');
    $ ('#errorPassword').text ('');
  }
});

//Update Profile Script
$ (document).ready (function () {
  $ ('#UpdateForm').on ('submit', function (event) {
    event.preventDefault ();
    //alert ('bonjour lucien');
    var first_name = $ ('#first_name').val ();
    var formdata = new FormData (this);
    var last_name = $ ('#last_name').val ();
    var pseudo = $ ('#pseudo').val ();
    var email = $ ('#email').val ();
    var phone = $ ('#phone').val ();
    //alert ('totalDataForm');

    if (first_name != '' && last_name != '' && email != '') {
      $.ajaxSetup ({
        headers: {
          'X-CSRF-TOKEN': $ ('meta[name="csrf-token"]').attr ('content'),
        },
      });

      $.ajax ({
        type: 'POST',
        url: '/UpdateInfoProfile',
        data: formdata,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (result) {
          alert (result.isSuccess);
          if (result.isSuccess == false && result.SuperError != '') {
            alert ('Fail updating');
            console.log (result.isSuccess);
            $ ('#SuperError').text (result.SuperError);
          } else if (result.isSuccess == true && result.SuperError == '') {
            //alert ('Success updating');
            window.location.href = '/Profile';
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log (JSON.stringify (jqXHR));
          console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
        },
      });
    } else {
      $ ('#SuperError').text ('Veillez remplir tout les champs !!!');
    }
  });
});

function doAfterSelectImage (input) {
  readURL (input);
}

function readURL (input) {
  if (input.files && input.files[0]) {
    console.log (input.files);
    console.log (input.files[0]);
    var f = $ ('#formData').serialize ();
    console.log (f);
    var form = new FormData ();
    form.append ('ImageUser', $ ('#ImageUser').val ());
    var reader = new FileReader ();
    reader.onload = function (e) {
      $ ('#post_user_image_').attr ('src', e.target.result);
    };
    reader.readAsDataURL (input.files[0]);
  }
}
