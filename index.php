<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>پذیرش</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style type="text/css">
     @font-face {
font-family: 'BRoya';
src: url('fonts/BRoya.eot?#') format('eot'),
url('fontonline.ir/fonts/BRoya.ttf') format('truetype'),
url('fonts/BRoya.woff') format('woff');
}
       body{
        background-color: #272822;
        background-size:cover;
        background-position: center;
        padding-top: 30px;
       }

       .title-bar{
             font-family:BRoya,'BRoya',tahoma;
             direction: rtl;
             color: #FFF;
            }
            .col-sm-6{
              border: 5px #FFF solid;
            }
      </style>
      <script> setInterval(function(){
  $('#FirstRoom').load('first.php').fadeIn("slow");
  $('#SecondRoom').load('second.php').fadeIn("slow");
  $('#ThirdRoom').load('third.php').fadeIn("slow");
  $('#ForthRoom').load('forth.php').fadeIn("slow");
}, 3000);
</script>
  </head>


  <body role="document">

    <div class="container theme-showcase" role="main">

      
       <div class="row">
        <div class="col-sm-6" id="ThirdRoom">
          <h1>خیام</h1>
         
        </div> <!-- /sliders -->
      <div class="col-sm-6" id="ForthRoom">
          
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" id="FirstRoom">
         
        </div> <!-- /sliders -->
      <div class="col-sm-6" id="SecondRoom">
        </div>
      </div>
  </div>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
