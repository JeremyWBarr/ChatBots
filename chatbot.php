<?php
include_once("model.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat bots</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
			body {
		  		padding-top: 5rem;
			}

			.col-sm-2{
				background: #DDD;
				padding: 10px;
				border-bottom-left-radius: 10px;
				border-top-left-radius: 10px;
			} 

			.col-sm-3{
				background: #DDD;
				padding: 10px;
				border-bottom-right-radius: 10px;
				border-top-right-radius: 10px;
			}

			.bots {
				margin-bottom: 40px;
			}

			a {
				color: black;
			}

			h6 {
				color: #666;
			}

			#name {
				margin-left: 40px;
			}

			#botimg {
				border-radius: 50%;
				width: 100px;
				padding: 0 5px;
				margin-left: 40px;
			}

		</style>
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Chat Bots</a>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <ul class="navbar-nav mr-auto">
				<li class="nav-item active">
		            <a class="btn btn-outline-primary my-2 my-sm-0" href="addBot.html" type="submit">New Chatbot</a>
				</li>
	        </ul>

	        <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	        </form>
		</div>
    </nav>

    <div class="container">

    	<?php
    		foreach (getBots() as $bot) {
    			echo $bot["bot_name"];
    		}
    	?>

		<div class="row bots">
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
			<div class="col-sm-1" style="background: none"></div>
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
		</div>

		<div class="row bots">
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
			<div class="col-sm-1" style="background: none"></div>
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
		</div>

		<div class="row bots">
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
			<div class="col-sm-1" style="background: none"></div>
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
		</div>

		<div class="row bots">
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
			<div class="col-sm-1" style="background: none"></div>
			<div class="col-sm-2">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'>
					<img id="botimg" src="https://cdn.pixabay.com/photo/2013/07/13/12/04/android-159109__340.png">
				</a>
				<h6 id="name" style="color: #46a3c9"> Student Name </h6>
			</div>
			<div class="col-sm-3">
				<a href='https://snatchbot.me/webchat/?botID=37140&appID=tWMWznNCaryxj3KD2Qoo'><h2>Bot Name</h2></a>
                <h6>description description description description description description description description description description description description</h6>
			</div>
		</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
    	var colors = ['#86b3f9', '#93f985', '#f98585', '#f9b585', '#f7f985'];
    	var bots = document.querySelectorAll('#botimg');
    	console.log(bots);
    	for(var i = 0; i < bots.length; i++) {
    		bots[i].style.background = colors[Math.floor(Math.random() * colors.length)];;
    	}
    </script>
  </body>
</html>
