

<html>
	<head>
		<title>ALEXFOXGAMES Main Page</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<link rel="stylesheet" href= "../../general_use/css/parallaxelements.css" type="text/css" charset="utf-8"/>
		<link rel="stylesheet" href="../../general_use/css/font_ss.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="../css/index_ss.css" type="text/css" charset="utf-8"/>
	</head>
	<body>
		<div class="bg"></div>
		<div class="mainWrapper">
			<h1>alexfoxgames</h1>
			<p class = "rel">	
				<div class="bubble-speech bubble-left">
					<div class="message" style = "text-align: center">
						<a href="../../ehb_page/html/ehb.html">EHB/Project Torchman</a>
					</div>
				</div>
				<div class = "t-image">
					<a target="_blank" href="../../ehb_page/assets/ehb1.jpg">
				    	<img src="../../ehb_page/assets/ehb1.jpg" alt="space" align = "left">
					</a>
					<p style = "position:relative;top:30px;">
						Get to learn a little about my first project.
					</p>
				</div>
			</p>

			<p class = "rel">	
				<div class="bubble-speech bubble-right" style = "position:relative;top:-17px;">
					<div style = "text-align: center">
						<a style = "position:relative;text-align:center" href="../../warp_hunters_page/html/spacegame.html">Warp Hunter</a>
					</div>
				</div>
				<div class = "flip-img">
					<a target="_blank" href="../../harbinger_page/assets/merchant.gif">
				    	<img src="../../harbinger_page/assets/merchant.gif" alt="space" align = "left">
					</a>
					<p class = "flip-img" style = "position:relative;top:20px;left:30px;margin-left:60px; margin-right:120px">
						A game that borrows lovingly from it's inspiration: Super Metroid.
					</p>
				</div>
			</p>

			<p class = "rel">	
				<div class="bubble-speech bubble-left" style = "position:relative;top:-10px;">
					<div class="message" style = "text-align: center">
						<a href="../../harbinger_page/html/namelessgame.html">Harbinger</a>
					</div>
				</div>
				<div class = "t-image" style = "position:relative;top:-35px;right:-20px;margin:auto;">
					<a target="_blank" href="../../harbinger_page/assets/01.png">
				    	<img src="../../harbinger_page/assets/01.png" alt="space" align = "left">
					</a>
					<p style = "position:relative;top:20px;left:30px; margin-left:120px;margin-right:60px">
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

<!--       		BEGIN DATABASE SECTION -->
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
						echo '<p style = "margin-top:20px">';

						if(mysql_num_rows($name_result) == 0){
							//row wasn't found - we can add it
							$command = "INSERT INTO mailinglist_tbl (name, email, fav_game) VALUES (".'"'."$name".'",'.'"'."$email".'",'.'"'."$fav_game".'"'.");";
							echo "Name successfully added to mailing list!";
							mysql_query($command, $link)or die(mysql_error());

						} else {
							echo "Could not add name to mailing list!";
							//row was found - don't add it

						}
						echo '</p>';

						$query = "SELECT * FROM mailinglist_tbl";$result = mysql_query($query)or die(mysql_error());
						$num = mysql_num_rows($result);
			?>
			<table style = "margin-top:20px"border = "1" align = "center">
				<tr align = "center">
			        <td style = "font-size:x-large"> NAME </td>
			        <td style = "font-size:x-large"> EMAIL </td> 
			        <td style = "font-size:x-large"> FAVORITE GAME </td> 
		        </tr>
			<?
				$array = array();
				for($i = 0; $i<$num; $i++){
					$show_name = mysql_result($result,$i,"name")or die(mysql_error());
					$show_email = mysql_result($result,$i,"email")or die(mysql_error());
					$show_fav_game = mysql_result($result,$i,"fav_game")or die(mysql_error());
			?>
				<tr align = "center">
         			<td> <?php echo $show_name;?> </td>
        			<td> <?php echo $show_email;?> </td> 
         			<td> <?php echo $show_fav_game;?> </td> 
         		</tr>
			<?
				}
			?>
			</table>
			<?
					mysql_close($link);
				}
			}
			?>
		</div>
<!--       		END DATABASE SECTION -->
		<div class = "blogWrapper">
			<h1 id = "blog" >Development Blog</h1>
			<script type="text/javascript">
				var posts = <?
					$posts = file("../assets/blogposts.txt");
					$js_array = json_encode($posts);
					echo $js_array;
				?>;
			</script>
			<script type="text/javascript" src="../js/blog.js"></script>
		</div>
	</body>
</html>