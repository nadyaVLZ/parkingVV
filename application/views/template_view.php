
<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parking</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>


</head>
<body>
   <div class="container-fluid">
      <div class="row">
  		<div class="col-sm-1 col-md-2 Sidebar">
    		<div class="sidebar-nav">
      			<div class="navbar navbar-default" role="navigation">   
      			<div class="navbar-header"></div>
        		<div class="navbar-collapse collapse sidebar-navbar-collapse">
          		<ul class="nav navbar-nav">
            		<li class="active"><a href="/main">Клиенты парковки</a></li>
          		</ul>
        		</div>
      			</div>
    		</div>
  		  </div>
        <div id="content">
          <div class="col-sm-8 col-md-10  main">
            <?php include 'application/views/'.$content_view; ?>
            </div>
                <br class="clearfix" />
            </div>
        </div>
    </div>
  </body>
</html>