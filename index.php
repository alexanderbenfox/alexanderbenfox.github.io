

<html>
	<head>
		<title>ALEXFOXGAMES Main Page</title>
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
			  text-align: center;
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
			text-align: center;
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
			.blogWrapper{
				/*font-family: Silk, sans-serif;*/
				width:400px; 
				height:400px;
				border-radius:10px;
				-moz-border-radius:10px;
				-webkit-border-radius:10px;
				-o-border-radius:10px;
				background:#fff;
				box-shadow:0px 0px 5px #000;
				-moz-box-shadow:0px 0px 5px #000;
				-webkit-box-shadow:0px 0px 5px #000;
				-o-box-shadow:0px 0px 5px #000;
				text-align:right;
				padding:10px;
				position:absolute;
				/*margin:15px auto;*/
				margin:15px auto;
				margin-right: 0;
				top:0;
				right:0;
				float:right;
				overflow: scroll;
			}
			#blog{

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
			   	function getCount(parent, getChildrensChildren){
				    var relevantChildren = 0;
				    var children = parent.childNodes.length;
				    for(var i=0; i < children; i++){
				        if(parent.childNodes[i].nodeType != 3){
				            if(getChildrensChildren)
				                relevantChildren += getCount(parent.childNodes[i],true);
				            relevantChildren++;
				        }
				    }
				    return relevantChildren;
				}

			   	
			});
		</script>
	</head>
	<body>
		<div class="bg"></div>
		<div class="mainWrapper">
			<h1>alexfoxgames</h1>

		
			

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

			<p class = "rel">	
				<div class="bubble-speech bubble-right" style = "position:relative;top:-17px;">
					<div style = "text-align: center">
						<a style = "text-align :center" href="http://localhost/jq/spacegame.html">Warp Hunter</a>
					</div>
				</div>
				<div class = "flip-img">
					<a target="_blank" href="darkgame/merchant.gif">
				    	<img src="darkgame/merchant.gif" alt="space" align = "left">
					</a>
					<p class = "flip-img" style = "position:relative;top:20px;left:10px">
						A game that borrows lovingly from it's inspiration: Super Metroid.
					</p>
				</div>
			</p>

			<p class = "rel">	
				<div class="bubble-speech bubble-left" style = "position:relative;top:-10px;">
					<div class="message" style = "text-align: center">
						<a href="http://localhost/jq/namelessgame.html">Harbinger</a>
					</div>
				</div>
				<div class = "t-image" style = "position:relative;right:-10px;margin:auto;">
					<a target="_blank" href="darkgame/01.png">
				    	<img src="darkgame/01.png" alt="space" align = "left">
					</a>
					<p style = "position:relative;top:30px;">
						Look at my current project: a game about slaying Demons.
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


			mysql_close($link);
		}
	}
		

?>



			
		</div>
		<div class = "blogWrapper">
			<h1 id = "blog" >Development Blog</h1>
				<script type="text/javascript">
					var posts = ["Check back here for the latest development news!  Will be adding a comment feature to this devblog wall very soon but I do not have time right now!", "Test Post", "javascript is really really cool!"];
					var iDiv = document.createElement('div');
					//iDiv.id = 'block';

					// Create the inner div before appending to the body
					for (var i = 0; i < posts.length; i++) {
						var innerDiv = document.createElement('div');
						if((i%2) == 0)
							innerDiv.className = 'bubble-speech bubble-left';
						else 
							innerDiv.className = 'bubble-speech bubble-right';

						var authorDiv = document.createElement('div');
						authorDiv.className = "author";
						authorDiv.style.fontSize = 'medium'
						authorDiv.innerHTML = "3/14/2016";

						var messageDiv = document.createElement('div');
						messageDiv.className = "message";
						messageDiv.style.textAlign = "left";
						messageDiv.style.fontSize = 'small';
						messageDiv.innerHTML = posts[i];

						innerDiv.appendChild(authorDiv);
						innerDiv.appendChild(messageDiv);

						iDiv.appendChild(innerDiv);
					}
					document.getElementById('blog').appendChild(iDiv);
				</script>
		</div>
	</body>
</html>