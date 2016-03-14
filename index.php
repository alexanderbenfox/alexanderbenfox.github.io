

<html>
	<head>
		<title>jQuery Parallax Scrolling Demo</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<link rel = "stylesheet" type = "text/css" href= "parallaxelements.css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
		<style type="text/css">
			body{
				font-family: 'silkscreennormal';
			}
			.rel {
			    position: relative; /* Declared position allows for location changes */
			}
			.bg{
				position:fixed;
				background:url(background.png) bottom center no-repeat; 
				background-size: 100% auto;
				height:100%; 
				width:100%;
				top:0; 
				left:0;
			}
			.bubble-speech{
			  position:relative;
			  font-family: 'silkscreennormal', sans-serif;
			  margin:auto;
			  line-height:22px;
			  letter-spacing:1px;
			  margin-top:16px;
			  margin-bottom:48px;
			  width:300px;
			  background-color: #efefef;
			  padding:16px;
			  
			  }

			.bubble-speech.bubble-left:after{
			z-index: 9002;
			display: block;
			content: "";
			position:absolute;
			bottom:-12px;
			left: 10px;
			border-top: 0 #efefef solid;
			border-bottom: 12px transparent solid;
			border-left: 20px  #efefef solid;
			}

			.bubble-square{
			  width:33px;
			  height:25px;
			  text-align:center;
			}

			.bubble-speech.bubble-center:after{
			    z-index: 9002;
			display: block;
			content: "";
			position:absolute;
			bottom:-12px;
			left: 50%;
			margin-left:-18px;
			border-right: 20px transparent solid;
			border-top: 12px #efefef solid;
			border-left: 20px  transparent solid;
			}

			.bubble-speech.bubble-right:after{
			  z-index: 9002;
			display: block;
			content: "";
			position:absolute;
			bottom:-12px;
			right: 50px;
			border-top: 0 #efefef solid;
			border-bottom: 12px transparent solid;
			border-right: 20px  #efefef solid;
			}

			.bubble-speech .author{
			  max-width:200px;
			  font-weight:bold;  
			  margin:0;
			  padding: 0 12px 2px 0;  
			}
			.t-image {
			    position: relative; /* Declared position allows for location changes */
			    top: -50px; /* Moves the image 2px closer to the top of the page */
			}
			.t-image2 {
			    position: relative; /* Declared position allows for location changes */
			    top: -70px; /* Moves the image 2px closer to the top of the page */
			}
			.flip-img{
				position: relative;
				top:-50px;
				right:50px;
				-moz-transform: scaleX(-1);
		        -o-transform: scaleX(-1);
		        -webkit-transform: scaleX(-1);
		        transform: scaleX(-1);
		        filter: FlipH;
		        -ms-filter: "FlipH";
			}
		</style>
		<script>
			$(document).ready(function(){
				$(window).bind('scroll',function(e){
			   		parallaxScroll();
			   	});
			   	
			   	
			   	function parallaxScroll(){
			   		var body = document.body,
    					html = document.documentElement;

					var height = Math.max(	body.scrollHeight, body.offsetHeight, 
                       						html.clientHeight, html.scrollHeight, html.offsetHeight );
					var backgroundscroll = .1;
						closemountainscroll = .5;
						farmountainscroll = .7;
						mountaintreesscroll = .3;
						mountaintreesforegroundscroll = .2;
			   		var scrolledY = $(window).scrollTop();
					$('.bgWrapper').css('background-position','center -'+((scrolledY*backgroundscroll))+'px');
					$('.closemountain').css('top','-'+((scrolledY*closemountainscroll))+'px');
					$('.farmountain').css('top','-'+((scrolledY*farmountainscroll))+'px');
					$('.mountaintrees').css('top','-'+((scrolledY*mountaintreesscroll))+'px');
					$('.mountaintreesforeground').css('top','-'+((scrolledY*mountaintreesforegroundscroll))+'px');
					
					
			   	}

			   	
			});
		</script>
	</head>
	<body>
		<div class="bg"></div>
		<!-- <div class="bgWrapper"></div>
		<div class="blackbar"></div>
		<div class="farmountain"></div>
		<div class="closemountain"></div>
		<div class="mountaintrees"></div>
		<div class="mountaintreesforeground"></div> -->
  

		<div class="mainWrapper">
			<h1>FUCK</h1>

		
			<p class = "pixel">When I need to search for something, I use
			<a href="http://google.com">Google</a>.</p>
			

			<p class = "rel">	
				<div class="bubble-speech bubble-left">
					<div class="message" style = "text-align: center">
						<a href="http://localhost/jq/ehb.html">EHB/Project Torchman</a>
					</div>
				</div>
				<div class = "t-image">
					<a target="_blank" href="ehb/ehb1.jpg">
				    	<img src="ehb/ehb1.jpg" alt="space" align = "left">
					</a>
					<p style = "position:relative;top:30px;">
						Get to learn a little about my first project.
					</p>
				</div>
			</p>

			<p>	
				<div class="bubble-speech bubble-right" style = "position:relative;top:-17px;">
					<div style = "text-align: center">
						<a href="http://localhost/jq/spacegame.html">Space Game</a>
					</div>
				</div>
				<div class = "flip-img">
					<a target="_blank" href="darkgame/merchant.gif">
				    	<img src="darkgame/merchant.gif" alt="space" align = "left">
					</a>
					<p class = "flip-img" style = "position:relative;top:20px;left:10px">
						Get to learn a little about my first project.
					</p>
				</div>
			</p>

			<p class = "rel">	
				<div class="bubble-speech bubble-left" style = "position:relative;top:-10px;">
					<div class="message" style = "text-align: center">
						<a href="http://localhost/jq/namelessgame.html">Nameless Game</a>
					</div>
				</div>
				<div class = "t-image" style = "position:relative;right:-10px;margin:auto;">
					<a target="_blank" href="darkgame/01.png">
				    	<img src="darkgame/01.png" alt="space" align = "left">
					</a>
					<p style = "position:relative;top:30px;">
						Get to learn a little about my first project.
					</p>
				</div>
			</p>

			<div style = "position:relative;top:10px;">

				<p>Join the mailing list:</p>

				<form action = "index.php" method = "GET">
	         		Name: <input type = "text" name = "name" />
	        		E-mail: <input type = "text" name = "email" />
	        		Favorite Game: <input type = "text" name = "fav_game" />
	        		<input type = "submit" />
	      		</form>

      		</div>


<?
	if(isset($_GET['name'])){
		$name = $_GET['name'];
		$email = $_GET['email'];
		$fav_game = $_GET['fav_game'];

		if(!$_GET['name']){
	 		exit();
		}else{
			$host = "localhost";
			$user = "root";
			$pass = "";
			$link = mysql_connect($host, $user, $pass);
			mysql_select_db("test",$link);

			$query_name = "SELECT name FROM mailinglist_tbl WHERE " . 'name' ." = ".'"'."$name".'"'.";";
			$query_email = "SELECT email FROM mailinglist_tbl WHERE " . 'email' ." = ".'"'."$email".'"'.";";
			$query_game = "SELECT fav_game FROM mailinglist_tbl WHERE " . 'fav_game' ." = ".'"'."$fav_game".'"'.";";

			$name_result = mysql_query($query_name) or die(mysql_error());
			$email_result = mysql_query($query_email) or die(mysql_error());
			$game_result = mysql_query($query_game) or die(mysql_error());

			$thenum = mysql_num_rows($name_result);

			if(mysql_num_rows($name_result) == 0){
				//row wasn't found - we can add it
				$command = "INSERT INTO mailinglist_tbl (name, email, fav_game) VALUES (".'"'."$name".'",'.'"'."$email".'",'.'"'."$fav_game".'"'.");";
				echo "Name successfully added to mailing list!";
				mysql_query($command, $link)or die(mysql_error());

			} else {
				echo "Could not add name to mailing list!";
				//row was found - don't add it

			}

			$query = "SELECT * FROM mailinglist_tbl";$result = mysql_query($query)or die(mysql_error());
			$num = mysql_num_rows($result);
?>
			<table border = "1" align = "center">
							<tr align = "center">
         	<td>
         </td>
         <td> NAME </td>
         <td> EMAIL </td> 
         <td> FAVORITE GAME </td> 
         </tr>
<?
			$array = array();
			for($i = 0; $i<$num; $i++){
				$show_name = mysql_result($result,$i,"name")or die(mysql_error());
				$show_email = mysql_result($result,$i,"email")or die(mysql_error());
				$show_fav_game = mysql_result($result,$i,"fav_game")or die(mysql_error());
?>
			<tr align = "center">
         	<td>
         </td>
         <td> <?php echo $show_name;?> </td>
         <td> <?php echo $show_email;?> </td> 
         <td> <?php echo $show_fav_game;?> </td> 
         </tr>
<?
							//array_push($array, $show_lname, $show_fname);
			}
			?>
		</table>
			<?

			//$query = "SHOW COLUMNS FROM names_tbl";$result = mysql_query($query)or die(mysql_error());

			//echo "$result";



			mysql_close($link);

			//exit();
		}
	}
		

?>




			
		</div>
	</body>
</html>



<!--
<div class="bgWrapper"></div>
<div class="bgBird"></div>
<div class="bgRoo"></div>

<div class="mainWrapper">
	<!--content in here-->
<!--</div>-->