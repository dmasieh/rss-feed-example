<!DOCTYPE html>
<html>
<head>

	<title>NBC jQuery News Feed</title>

	<title>Not an NBC jQuery News Site</title>
	<meta charset="utf-8">

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
</head>
<body>
    <nav>
    	<div class="nav-wrapper container">
    		<a href="https://www.nbcnews.com/" class="brand-logo center" style="text-decoration-color: black;">
          This Is Not <img src="images/nbc.png">
        </a>
    	</div>
  	</nav>
    <main>
		<div class="container">
      <div class="row">
      <div class="col s12">
        <div class="card-panel">
          <span class="black-text">
            <h5>Not an NBC News Site</h5>
            <form>
              But You Can Search Their News Stories: <input type="text" onkeyup="showQuoteSite(this.value)" />
            </form>
            <p>
            <div id="showRss"></div>
            </p>
          </span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
      	<div class="card-panel">
      	<a href="#!" class="btn" id="buttpress" onclick="Materialize.showStaggeredList('#showCard'); showClick();" style="margin-bottom: 2em;">Show Every News Story</a>
      	<ul id="showCard">
          <?php
            /*
            $xmlDoc = simplexml_load_file("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
            */
            $xmlDoc = simplexml_load_file("https://www.nbcnewyork.com/news/top-stories/?rss=y&summary=y");
            foreach ($xmlDoc->channel->item as $item) {
              echo '<li class="popStyle">';

              echo '<a href="' . $item->guid . '">' . $item->title . '</a>';
              echo '<p>' . $item->description . '</p>';
              echo '<hr>';
              echo '</li>';
              }
            ?>
      	</ul>
      	</div>
      </div>
    </div>

		</div>
	</main>
	<footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
            	    <h5 class="white-text">We are not affiliated with NBC</h5>
                	<p class="grey-text text-lighten-4">However, if you want to see all of the articles located on NBC, </p><a href="https://www.nbcnews.com/" class="waves-effect waves-light btn">Click Here!</a>
              	</div>
            </div>
        </div>
        <div class="footer-copyright">
        	<div class="container">
            	© 2017 Degaulle Masieh
            </div>
        </div>
    </footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" src="init.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
