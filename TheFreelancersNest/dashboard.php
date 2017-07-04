<?php
  session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link href="css/ait.css" rel="stylesheet" type="text/css">
<link href="css/dashboard.css" rel="stylesheet" type="text/css">

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/ait.js" type="text/javascript"></script>

<style type="text/css">
.navbarsdpane>div>ul>li>a,
.navbarsdpane>div>ul>li>a:hover,
.navbarsdpane>div>ul>li>a:focus,
.navbarsdpane>div>ul>li>a:active{text-decoration:none;color:white;font:20px raleway;font-weight:600;font-variant:small-caps;}

ul {margin:0px;padding:0px;list-style-type: none;}

</style>

</head>

<body>
<!--navbarsdpane-->
<div class="navbarsdpane col-xs-2">
<div class="col-xs-12" style="padding:0px;text-align:center;">
<p><img class="logoimg img-responsive" src="resources/logow2.png"></p>

<ul>
<li class="active"><a data-toggle="pill" href="#home"><p class="mnlst"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</p></a></li>

<li><a data-toggle="pill" href="#projects"><p class="mnlst"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;Projects</p></a></li>

<li><a data-toggle="pill" href="#inbox"><p class="mnlst"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Inbox</p></a></li>

<li><a data-toggle="pill" href="#bids"><p class="mnlst"><span class="glyphicon glyphicon-sort-by-attributes-alt"></span>&nbsp;&nbsp;Bids</p></a></li>

<li><a data-toggle="pill" href="#feedback"><p class="mnlst"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Feedbacks</p></a></li>
</ul>

</div>
</div>
<!--navbarsdpaneEnds-->

<!--settingsIcon-->
<div class="cog dropdown" style="padding:5px 5px 0px 5px;">
      <span class="glyphicon glyphicon-cog dropdown-toggle" data-toggle="dropdown"></span>
      <ul class="dropdown-menu wii">
        <li><a href="backend/logout.php"><span class="glyphicon glyphicon-lock"></span> Logout: &nbsp;<?php echo $_SESSION['Username']?></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Stats</a></li>
      </ul>
      </div>
<!--settingsIcon-->

<!--sideHeader-->
<div class="col-xs-push-2 col-xs-9 sdhdr">
<img class="col-xs-2 col-xs-push-5 img-responsive" src="resources/user.png">

    <?php
          if(isset($_SESSION['Id']))
          {
            echo '<h1 class="col-xs-12">Welcome, '.$_SESSION['Username'].'</h1>';
          }
          else
            {
            echo '<h1 class="col-xs-12">User not logged in.</h1>';
            }
         ?>
</div>
<!--sideHeaderEnds-->

<!--fillerstuff-->
<div class="col-xs-push-2 col-xs-10 filler tab-content">
                <div id="home" class="tab-pane fade in active col-xs-12 fillbox">
                <h2 class="hd2">News Feed:</h2>
                <div class="dropdown">
                <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">Select Category
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Project: m1911</a></li>
                  <li><a href="#">Project: Projectile Animations</a></li>
                  <li><a href="#">Project: G-Spot Arena</a></li>
                </ul>
                </div>
                </div>

                <div id="inbox" class="tab-pane fade col-xs-12 fillbox">
                <h2 class="hd2">Inbox:</h2>
                <div class="dropdown">
                <button  class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">Select Client
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><a>Worldtech</a></li>
                  <li><a href="#"><a>Infoloops</a></li>
                  <li><a href="#"><a>Czcoders</a></li>
                </ul>
                </div>
                </div>


                <div id="bids" class="tab-pane fade col-xs-12 fillbox">
                <h2 class="hd2">Bids:</h2>
                <div class="dropdown">
                <button " class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">Select Job
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><a>Worldtech</a></li>
                  <li><a href="#"><a>Infoloops</a></li>
                  <li><a href="#"><a>Czcoders</a></li>
                </ul>
                </div>
                </div>

                <div id="projects" class="tab-pane fade col-xs-12 fillbox">
                <h2 class="hd2">Projects:</h2>
                <div class="dropdown">
                <button  class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">Select Project
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Project: m1911</a></li>
                  <li><a href="#">Project: Projectile Animations</a></li>
                  <li><a href="#">Project: G-Spot Arena</a></li>
                </ul>
                </div>
                </div>

                <div id="feedback" class="tab-pane fade col-xs-12 fillbox">
                <h2 class="hd2">Feedback:</h2>
                <div class="dropdown">
                <button  class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">Select Project
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                          <li><a href="#">Worldtech</a></li>
                          <li><a href="#">Infoloops</a></li>
                          <li><a href="#">Czcoders</a></li>
                </ul>
                </div>
                </div>
</div>
<!--fillerstuff-->

<!--sideContent-->
<div class="filler col-xs-push-2 col-xs-10">
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<p>fillercontent</p>
<!--sideContentEnds-->

</body>
</html>
