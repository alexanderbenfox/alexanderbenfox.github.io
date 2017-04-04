$(document).ready(function(){

	/*$.ajax({
	    url:"../php/getBlogPosts.php",
	    type:"POST",
	    success:function(stuff){
	        createPosts(stuff);
	    },
	    dataType:"json"
	});*/

	function Post(title, date, words, link){
		this.title = title;
		this.date = date;
		this.words = words;
		this.link = link;

	}

	var posts = [];

	var firstPost = new Post("Some music", "4/4/2017", "No blog posts yet, so here's a song that I like", "https://www.youtube.com/embed/fYSMZpiF7sA" )
	posts.push(firstPost);
	//function createPosts(posts){
		var iDiv = document.createElement('div');

		for (var i = 0; i < posts.length; i++) {
			var innerDiv = document.createElement('div');
			if((i%2) == 0)
				innerDiv.className = 'bubble-speech bubble-left';
			else 
				innerDiv.className = 'bubble-speech bubble-right';

			var authorDiv = document.createElement('div');
			authorDiv.className = "author";
			authorDiv.style.fontSize = 'medium';
			authorDiv.innerHTML = posts[i].date;

			var messageDiv = document.createElement('div');
			messageDiv.className = "message";
			messageDiv.style.textAlign = "left";
			messageDiv.style.fontSize = 'small';

			var more = "";
			if(posts[i].link != null){
				var text = '<iframe width="250" height="200" src="QQQQ?autohide=0" frameborder="0" allowfullscreen></iframe>';
				text = text.replace("QQQQ",posts[i].link);
				more += text;
			}

			var anotherDiv = document.createElement('div');
			anotherDiv.innerHTML = more;

			messageDiv.innerHTML = posts[i].words;
			messageDiv.appendChild(anotherDiv);

			innerDiv.appendChild(authorDiv);
			innerDiv.appendChild(messageDiv);

			iDiv.appendChild(innerDiv);
		}

		document.getElementById('blog').appendChild(iDiv);
	//}
});
