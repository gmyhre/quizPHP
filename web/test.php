<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>What Character Are You? Quiz</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />





  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>

<!-- Load jquery and bootstrap js -->

	<script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>


<!-- Modal Dialog Windows -->
<div id="theModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-content">
        <div class="loading">Please wait</div>
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" allowtransparency="true" src="" ></iframe>
      </div>
  </div>
</div>
<!-- old 
	  <div id="theModal" class="modal fade text-center">
	    <div class="modal-dialog">
	      <div class="modal-content">
	      </div>
	    </div>
	  </div>
-->

<!-- Questions -->

	<div id="page-wrap">

		<h1 class="transparent index-headline">Which Characters Are You?</h1>

		<form action="grade.php" method="post" id="quiz">

		<?php
		/**
	         * Each <li> holds a question. Follow the same pattern if you want to add more questions.
	         * If you add more questions, be sure to add more $answer variables in grade.php
	         * (See lines 26-30 in grade.php).
	         * The important values here: name value on the rasio buttons for each answer, .fwrd class on labels.
	         * You need the name value to store answers for grading.
	         * In this demo, the frwd class controls question advancement through jQuery.
	         */
            ?>
            <script>
            $('.modal').on('shown.bs.modal',function(e){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
              // var url = $(this).attr('href');
              var invokerURL = $(e.relatedTarget);
              console.log(e.relatedTarget);
              $(this).find('iframe').attr('src', invokerURL.attr('href'))
            
            })

            
            </script>
            
            <ul id="test-questions">

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>1. You are on your first date in a romantic restaurant, your date ask what you want to order, and you answer:</h3>

										<a class="crazyModal" href="http://www.tinkin.com/shitwars/3/index.html" data-toggle="modal" data-target="#theModal">
										<div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">A.  Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo</label>
                    </div>
										</a>

										<a class="crazyModal" href="http://www.tinkin.com/shitwars/1/index.html" data-toggle="modal" data-target="#theModal">
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">B.  James while John had had had had had had had had had had had a better effect on the teacher</label>
                    </div>
										</a>

										<a class="crazyModal" href="http://www.tinkin.com/shitwars/2/index.html" data-toggle="modal" data-target="#theModal">
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">C.  That that is is that that is not is not is that it it is</label>
                    </div>
										</a>

										<a href="modaldialogs/1d/1d.html" data-toggle="modal" data-target="#theModal">
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">D.  Colorless green ideas sleep furiously</label>
                    </div>
										</a>

                    <p class="quiz-progress">1 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>You guzzled down a liter of protein shake, you put on on your spandex, warmed up good and ready to go… now what?</h3>

										<a href="modaldialogs/2a/2a.html" data-toggle="modal" data-target="#theModal">
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">A.  You crash onto your couch vegging out to reruns of the Gilmore Girls </label>
                    </div>
										</a>

										<a href="modaldialogs/2b/2b.html" data-toggle="modal" data-target="#theModal">
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">B.  You get to your water aerobics class to catch up with your Golden gals, its been a minute</label>
                    </div>
										</a>

										<a href="modaldialogs/2c/2c.html" data-toggle="modal" data-target="#theModal">
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">C.  You go to the gym, start grunting a lot working out your vocal cords </label>
                    </div>
										</a>

										<a href="modaldialogs/2d/2d.html" data-toggle="modal" data-target="#theModal">
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">D.  Finally the Chinese take out is here, food enough to feed a small village in Cambodia, turn on your self cam, and announce your MUKbang.</label>
                    </div>
										</a>

                    <p class="quiz-progress">2 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>You are working on an mobile app, and it enables user to:</h3>

                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">A.  date ghosts or other supernatural beings around them</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">B.  track how many pimples and blackhead they can pop in a minute</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">C.  collect Chinese stinky tofu while Wingsuit flying over polluted Beijing skies</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">D.  make pizza with Aliens via traversable Wormhole</label>
                    </div>
                    <p class="quiz-progress">3 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Tomorrow is the vacation you have been longing for, and you are going to:</h3>

                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">A.  Llanfair­pwllgwyngyll­gogery­chwyrn­drobwll­llan­tysilio­gogo­goch</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">B.  Taumatawhakatangihangakoauauotamateaturipukakapikimaungahoronukupokaiwhenuakitanatahu</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">C.  Lake Chargoggagoggmanchauggagoggchaubunagungamaugg</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">D.  Tweebuffelsmeteenskootmorsdoodgeskietfontein</label>
                    </div>
                    <p class="quiz-progress">4 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>You run out of TP, but before you yell out for help, you can’t remember the correct word for #2, is it…</h3>

                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">A.  groundhogging</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">B.  dingleberries</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">C.  dookie</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">D.  Thunder Down Under</label>
                    </div>
                    <p class="quiz-progress">5 of 6</p>
                </li>

								<li>
                    <div class="quiz-overlay"></div>
                    <h3>I didn’t fart for three days because:</h3>

                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A" class="fwrd labela">A.  One Man's Modus Ponens is Another Man's Modus Tollens</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B" class="fwrd labelb">B.  of my recent tapeworm diet</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C" class="fwrd labelc">C.  I am a narwhal</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D" class="fwrd labeld">D.  Big Apple is a melting pot</label>
                    </div>
                    <p class="quiz-progress">6 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>

		</form>

    </div>




	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<?php
	/**
         * This quiz uses jQuery to move the questions up each time you click an answer.
         * You can change the layout of the quiz, but you may need to adjust the $mt variable.
         * The $mt variable is the margin-top of the quiz.
         * This gives the illusion of each question being on a separate page.
         * It is actually one page, just this element moves.
         * Quiz-takers need to get to the end and hit the Submt button to see results.
         * The answers get stored and sent to grade.php for evaluation.
         *
         */
        ?>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt);
                }, 333);
              });
           }(jQuery))
    </script>

		<div class="nomargin">
		 <div class="share lb"><a href="http://www.facebook.com/sharer.php?u=http://www.metalquiz.sacramentowebdesigns.com/&amp;p%5bsummary%5d=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out." title="Share on Facebook" target="_blank"><img src="imgs/fb.png" alt="Share this on Facebook" /></a></div>
			 <div class="share rb"><a href="http://twitter.com/home/?status=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out.%20(http://www.metalquiz.sacramentowebdesigns.com)%20+via+@Lockedown_" title="Share on Twitter" target="_blank"><img src="imgs/tw.png" alt="Share this on Twitter" /></a></div>
			 <p class="shareprompt">Share This Quiz</p>
			 <p class="designby shadow1"><span>Built by </span><a href="https://www.tinkin.com"><img src="imgs/tinkin-logo.png" alt="created by Kenneth Tin-Kin Hung" /></a></p>
		</div>

</body>
</html>
