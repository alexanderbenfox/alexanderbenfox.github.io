$(document).ready(function(){

	$.ajax({
	    url:"../php/getBlogPosts.php",
	    type:"POST",
	    success:function(stuff){
	        createPosts(stuff);
	    },
	    dataType:"json"
	});

	function createPosts(posts){
		var iDiv = document.createElement('div');

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
	}
});
