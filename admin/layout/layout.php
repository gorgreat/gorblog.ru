<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Egor Makarov">
    <meta name="copyright" content="www.EgorMakarov.ru">

    <link rel="stylesheet" href="template/css/bootstrap.min.css">
   
    <title></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
        <?php include "header.inc.php"; ?>
    </header>

    <main>
        <div class="container">
            <?php 
                include "admin/includes/func.inc.php";

                showArticles($link);
            ?>
            
        </div>            
    </main>

    <footer>
        <?php include "footer.inc.php";?>        
    </footer>

</body>
</html>    