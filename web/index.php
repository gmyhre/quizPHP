<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Which Characters Are You?</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
<body>

<div id="rotatetolandscape">
</div>



	<div id="page-wrap">
		<form id="start-quiz" method="post" action="test.php">
            <div class="overlay index">
		        <div class="quiz-overlay"></div>
		        <h1 class="index-headline">Which Children Run Characters Are You?</h1>
		        <p class="index-sell">discover your maximum potential</p>
                <input type="submit" id="submit" class="take-quiz-btn index-btn redglow" value="Take The Quiz" />
            </div>
	    </form>
	    <?php
	   /**
            * Top part is just a button to go to the actual test page.
            * Below are sharing buttons for Facebook and Twitter. Change these to match your own details.
            * One thing that needs improvement: The background should be an embedded image,
            * or there should be an Open Graph image assigned.
            * Otherwise, Twitter and Facebook share these button images,
            * as they are the only "images" they can access on the index page.
            */
            ?>

	</div>

	<div class="nomargin">
	 <div class="share lb"><a href="http://www.facebook.com/sharer.php?u=http://www.metalquiz.sacramentowebdesigns.com/&amp;p%5bsummary%5d=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out." title="Share on Facebook" target="_blank"><img src="imgs/fb.png" alt="Share this on Facebook" /></a></div>
		 <div class="share rb"><a href="http://twitter.com/home/?status=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out.%20(http://www.metalquiz.sacramentowebdesigns.com)%20+via+@Lockedown_" title="Share on Twitter" target="_blank"><img src="imgs/tw.png" alt="Share this on Twitter" /></a></div>
		 <p class="shareprompt">Share This Quiz</p>
		 <p class="designby shadow1"><span>Built by </span><a href="https://www.tinkin.com"><img src="imgs/tinkin-logo.png" alt="created by Kenneth Tin-Kin Hung" /></a></p>
	</div>



</body>
</html>
