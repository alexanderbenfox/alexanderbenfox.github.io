$(document).ready(function(){
	$('#commentBox form').append('Comment<input type="text" name="comment">');
	$('#commentBox form').append('Author<input type="text" name="author">');
	$('#commentBox form').append('<input type="submit">');

	$('#commentBox').submit(function (event){
		event.preventDefault();
		var commentString = $('input[name="comment"]').val();
		var authorString = $('input[name="author"]').val();

		if(commentString != null && authorString != null){
			var commentBuilder = '<div class =' + "'bubble-speech bubble-right'>";
			commentBuilder = commentBuilder + "<div class = 'author' style = 'font-weight:bold;text-decoration:underline'>" + authorString + "</div>";
			commentBuilder = commentBuilder + "<div class = 'message'>" + commentString +"</div>";
			commentBuilder = commentBuilder + "</div>";
			$('#commentWall').append(commentBuilder);
		}
	});
});