<?php
	$posts = file("../assets/blogposts.txt");
	$js_array = json_encode($posts);
	echo $js_array;
?>