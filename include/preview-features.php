<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
	$("p,a,h1,h2,h3").each(function(){
		$(this).prop('contenteditable','true');
		
	});

	$("p,a,h1,h2,h3").hover(function(){
		var text = $(this).text();
		var characterCount = text.length;
		words = text.replace(/\s+/gi, ' ').split(' ').length
		$(this).attr('title', characterCount + " characters & " + words + " words");
		$('#counter').html(characterCount + " characters <br>" + words + " words");

	});
})
</script>
<div style="width:200px; height:50px;text-align:center;font-size:1.2em; vertical-align:middle; border:3px solid #ff7f00; background-color:white; position:fixed; top:0; right:0;" id="counter"></div>