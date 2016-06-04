<?php
session_start();
include "studentmenu.php";
?>

<html>
<head>
  <title>My Website</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="style3.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="contents">
    <div class="inner">
      <h1>Welcome to our page</h1>

      logged in as : <?php echo $_SESSION['priv']; ?>
    </div>

  </div>
  <script src="jquery.js"></script>
  <script>
  $(document).ready(function(){
    $("p").click(function(){
      $(this).hide();
    });
  });

  $(function() {
    $('.menu').click(function(){
      var panelId = $(this).attr('data-panelid');
      $('.' + panelId).toggle();
    });
  });
  </script>



</body>
</html>
