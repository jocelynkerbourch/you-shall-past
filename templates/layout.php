<?php $colors = array('ad9c88','b1daca','68a3a7','fec14e','fe7979','f57937','beca6a'); ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>You shall pass</title>

    <link rel="apple-touch-icon" href="assets/images/icon-iphone.png" />

    <style type="text/css">
    * { margin: 0; padding: 0;}
    body { background-color: #<?php echo $colors[rand(0,(count($colors)-1))]; ?>; color: #FFFFFF; text-align: center; }
    #title { width: 191px; margin-top: 30px; }
    form { margin-top: Z0px; }
    input[type=password] { width: 70%; height: 30px; font-size: 22px; -webkit-appearance: none; border-radius: 0; border: none; background-color: #FFFFFF; font-family: serif; padding: 0 2%;}
    input[type=submit] { margin-top: 20px; width: 50%; text-align: center; height: 30px; font-size: 22px; -webkit-appearance: none; border-radius: 8px; border: none; background-color: #FFFFFF; font-family: serif; }
    #button { display: block; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); -moz-user-select: -moz-none; -khtml-user-select: none; -o-user-select: none; user-select: none; -webkit-user-select: none; width: 150px; height: 135px; background-repeat: no-repeat; background-size: 300px auto; background-image: url('assets/images/button.png'); background-position: 0 0; margin: 0 auto;}
    #button.active { background-position: -150px 0;}
    </style>

  </head>
  <body>
     <div class="container">
      <div class="row">
        <img id="title" src="assets/images/title.png" />
      </div>
      <div class="row">
        <img src='assets/images/logo.png' width="100">
      </div>
      <?php require_once(dirname(__FILE__) . '/'.$this->page.'.php'); ?>
     </div>
    <script src="assets/jquery/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#button').on('click', function() {
          $(this).addClass('active');

          $.ajax({
            type: "GET",
            url: 'index.php',
            data: {'open':1},
            success: function(data) {
              $('#button').removeClass('active');
            },
            dataType: 'html'
          });

          return false;
        })
      });
    </script>
  </body>
</html>
