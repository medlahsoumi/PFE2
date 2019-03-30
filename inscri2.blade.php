@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

@section('content')
       
       
        <style>
body {
background: rgba(0, 0, 0, 0.1);
background-image: url("/img/back3.jpg") !important;
line-height: 1.45rem;
color: #444;
}

body.freeze {
pointer-events: none;
}

h1 {
margin: 0;
margin-bottom: 2rem;
text-align: center;
font-weight: normal;
line-height: 2.2rem;
}

.section {
max-width: 500px;
padding: 4rem;
margin: 5vh auto 0 auto;
background: #EAFAFE;
opacity: 0.8;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}

.section:before {
content: "";
width: 100%;

height: 170px;
position: absolute;
top: 0;
left: 0;
z-index: -1;

}

.form-instructions {
text-align: center;
}

form {
margin: 2rem auto;

width: 100%;
max-width: 330px;
will-change: transform;
}

.fieldgroup {
margin: 1.5rem 0;
position: relative;
}

label {
position: absolute;
top: .8rem;
left: 0;
display: block;
font-size: 1rem;
transition: 0.2s ease-out;
opacity: .5;
will-change: top, font-size;
}

label:hover {
cursor: text;
}

input {
border: 1px solid #fff;
vertical-align:middle !important;
font-size: 1.2rem;
padding: .6rem;
padding-left: 0;
background: transparent;
border: none;
border-bottom: 2px solid #444;

max-width: 350px;
border-radius: 0;
 display: table-cell;

}


input:focus {
outline: none;
}

input:valid {
border-color: #3dc4c7;
}

input:focus + label,
input.hasInput + label {
top: -.8rem;
font-size: .7rem;
}

.btn {
color: #fff;
background-color:#244ea7;
padding: .8rem;
font-size: 1.2rem;
line-height: 1.2rem;
border-radius: 5px;
border: 2px solid transparent;
min-width: 45px !important;
}

.btn:hover, .btn.hover {
color: #244ea7;
background-color: #b0c6f4;
text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
transition: .2s;
}

.btn:active, .btn.active {
color: #244ea7;
background-color: #244ea7;
box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.3);
outline: 2px solid #0bcc6c;
}

.btn:focus, .btn.focus {
color: #fff;
outline: 2px solid #244ea7;
outline-offset: 2px;
}

.btn:active:focus, .btn.active.focus {
outline: 4px solid #244ea7;
}

.btn.hover, .btn.active {
outline: none;
}

.btn-alt {
background-color: transparent;
color: #244ea7;
border: 2px solid #244ea7;
}

.btn-alt:hover, .btn-alt.hover {
background-color: transparent;
color: #244ea7;
border-color: #244ea7;
text-shadow: none;
}

.btn-alt:focus, .btn-alt.focus {
color: #00b858;
}

.btn-alt:active, .btn-alt.active {
color: #fff;
background-color: #244ea7;
text-shadow: 0 -1px 0 rgba(255, 255, 255, 0.2);
}

.btn-alt.hover, .btn-alt.active {
outline: none;
}

.buttons {
display: flex;

}

.buttons .btn {
margin-right: 15px;
}

form .btn {
display: inline-block;

max-width: 220px;
margin: 4rem auto 0 auto;
}

[data-step="4"] button.btn {
display: block;
margin: 0 auto;
}

.form-progress {
position: relative;
display: block;
margin: 3rem auto;
width: 100%;
max-width: 400px;
}

progress {
display: block;
position: relative;
top: 5px;
left: 5px;
-webkit-appearance: none;
appearance: none;
background: #244ea7;
width: 100%;
height: 5px;
background: none;
transition: 1s;
will-change: contents;
}

progress::-webkit-progress-bar {
background-color: #ddd;
}

progress::-webkit-progress-value {
background-color: #244ea7;
transition: all 0.5s ease-in-out;
}

.form-progress-indicator {
position: absolute;
top: -6px;
left: 0;
display: inline-block;
width: 20px;
height: 20px;
background: #EAFAFE;
border: 3px solid #ddd;
border-radius: 50%;
transition: all .2s ease-in-out;
transition-delay: .3s;
will-change: transform;
}

.form-progress-indicator.one {
left: 0;
}

.form-progress-indicator.two {
left: 33%;
}

.form-progress-indicator.three {
left: 66%;
}

.form-progress-indicator.four {
left: 100%;
}

.form-progress-indicator.active {
animation: bounce .5s forwards;
animation-delay: .5s;
border-color: #244ea7;
}

.animation-container {
position: relative;
width: 100%;
transition: .3s;
will-change: padding;
overflow: hidden;
}

.form-step {
position: absolute;
transition: 1s ease-in-out;
transition-timing-function: ease-in-out;
will-change: transform, opacity;
}

.form-step.leaving {
animation: left-and-out .5s forwards;
}

.form-step.waiting {
transform: translateX(400px);
}

.form-step.coming {
animation: right-and-in .5s forwards;
}

@keyframes left-and-out {
100% {
opacity: 0;
transform: translateX(-400px);
}
}

@keyframes right-and-in {
100% {
opacity: 1;
transform: translateX(0);
}
}

@keyframes bounce {
50% {
transform: scale(1.5);
}

100% {
transform: scale(1);
}
}

.sr-only {
position: absolute;
width: 1px;
height: 1px;
padding: 0;
margin: -1px;
overflow: hidden;
clip: rect(0, 0, 0, 0);
border: 0;
}

.hidden {
display: none;
}
        </style>
     
    </head>

	<body>
      @include('inc.header')
    <section class="section">
	<h1>Deposer Votre Candidature</h1>

	<div class="form-progress">
		<progress class="form-progress-bar" min="0" max="100" value="0" step="33" aria-labelledby="form-progress-completion"></progress>
		
		<div class="form-progress-indicator one active"></div>
		<div class="form-progress-indicator two"></div>
		<div class="form-progress-indicator three"></div>
		<div class="form-progress-indicator four"></div>
		
		<p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complet</p>
	</div>
	
	
	<div class="animation-container">
		<!-- Step one -->
        
		<div class="form-step js-form-step" data-step="1">
      
			<p class="form-instructions"><strong><h2>Type de contrat : </h2></strong><br>
				
                 
			<form action=""  id="app4"
			@submit="checkradio"  name="form-step-1">
					 
		  <h4  style="display: inline;margin: 25px"> Etudiant </h4><input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type"  id="Etudiant"/> 
	 
			<hr>
	
				
          <h4 style="display: inline;margin: 31px"> Doctor </h4><input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type" id="Doctor"/> 
			 
				<div class="buttons" >
							<button type="button" class="btn btn-alt js-reset">reprendre</button>
					
						<button type="submit" id="suiv" disabled class="btn btn-info" onclick="submitform()" placeholder="suivant">Suivant</button>
				</div>
			</form>
          
		</div>
		
			<!-- Step two -->
			<div class="form-step js-form-step waiting hidden" data-step="2">

				<p class="form-instructions"><strong>donné personnel</strong>
						<br></p>

				<form 
					action="/verif" 
				method="post"
				name="form-step-2" >
			
			
					<div class="fieldgroup">
							<input type ="text" onclick="submitform2()" name="cin" id="cin" v-model="cin" placeholder="Cin" maxlength="8" required ></i><br>
						 
					</div>
				
					
					<div class="fieldgroup">
							<input type="text" v-model="nom" onclick="submitform2()" name="nom" id="nom" placeholder="nom" required><br>
							</div>


					<div class="fieldgroup">
							<input type="text" v-model="prenom"  name="prenom" id="prenom" placeholder="prenom" required><br> 
						</div>

						<div class="fieldgroup">
								<input type="mail" name="mail" id="mail" placeholder="email" required/>
								
						</div>
						<div class="fieldgroup">
							<input type="tel" name="tel" id="tel"  placeholder="Telephone" required/>
							
						</div>

				
				 		
				
			<button type="button" class="btn btn-alt js-reset">reprendre</button>

								<button type="submit" class="btn btn-info" id="suiv">Suivant</button>
     
            
				</form>

		</div>
		
		
		
					<!-- Step three -->
			<div class="form-step js-form-step waiting hidden" data-step="3">

				<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
						<br> Please tell us your credit card information. We promise not to store it or use it to buy a new iPhone in the App Store.</p>
						<p id="demo"></p>
				<form action="" name="form-step-3">
						<div class="fieldgroup">
								<input type="text" name="credit-card" id="credit-card" />
								<label for="credit-card">Credit card number</label>
						</div>
					
						<div class="fieldgroup">
								<input type="text" name="credit-card-expiry" id="credit-card-expiry" />
								<label for="credit-card-expiry">Credit card expiry</label>
						</div>

						<div class="buttons">
								<button type="button" class="btn btn-alt js-reset">reprendre</button>

								<button type="submit" placeholder="submit" class="btn">Suivant</button>
						</div>
				</form>

		</div>
		
		
		
		<!-- Step four -->
			<div class="form-step js-form-step waiting hidden" data-step="4">

				<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
						<br> Finally, please just write the words "I Agree" in the field below to consent to us using the previous data you entered to buy a new iPhone.</p>

				<form action="" name="form-step-4" >
                <div class="modified" id="thediv">
                </div>
						<div class="fieldgroup">
								<input type="text" name="agreen" id="agreen" />
								<label for="agreen">I agree</label>
						</div>

						<div class="buttons">
								<button type="button" class="btn btn-alt js-reset">reprendre</button>
						</div>
						
				</form>
					
    </div>
    
	</div>
</section>

<script src="/js/vue.js"></script>  
<script src="/js/script.js"></script>  
        <script>
	function disablebtn() {
						Etudiant=document.getElementById("Etudiant");
            Doctor=document.getElementById("Doctor");
						if(Etudiant.checked==true || Doctor.checked==true)
                        btn=document.getElementById("suiv").disabled=false;				}
function submitform2(){
      cin=document.getElementById("cin");
      nom=document.getElementById("nom");
     prenom=document.getElementById("prenom");
     if(cin.length>0)
     btn=document.getElementById("suiv").disabled=false;
}
function validateForm() {
  var x = document.forms["form-step-2"]["Nom"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}

function check() {
  var inpObj = document.getElementById("form-step-2");
  if (!inpObj.checkValidity()) {
    document.getElementById("demo").innerHTML = inpObj.validationMessage;
  } else {
    document.getElementById("demo").innerHTML = "Input OK";
  } 
} 



							function myFunction2() {
  var checkBox = document.getElementById("Etudiant");
   var checkBox2 = document.getElementById("Doctor");
  var text = document.getElementById("text");
   var text2 = document.getElementById("text2");
    
   if (checkBox.checked == true){
    text.style.display = "block";
    text2.style.display = "none";
  } 
else if (checkBox2.checked == true) {
     text2.style.display = "block";
      text.style.display = "none";
    }
else  {
     text2.style.display = "none";
    text.style.display = "none";
  } 
}
        var $body = $('body');
var $progressBar = $('progress');
var $animContainer = $('.animation-container');
var value = 0;
var transitionEnd = 'webkitTransitionEnd transitionend';

/**
 * Resets the form back to the default state.
 * ==========================================
 */
function formReset() {
	value = 0;
	$progressBar.val(value);
	$('form input').not('button').val('').removeClass('hasInput');
	$('.js-form-step').removeClass('left leaving');
	$('.js-form-step').not('.js-form-step[data-step="1"]').addClass('hidden waiting');
	$('.js-form-step[data-step="1"]').removeClass('hidden');
	$('.form-progress-indicator').not('.one').removeClass('active');
	
	$animContainer.css({
		'paddingBottom': $('.js-form-step[data-step="1"]').height() + 'px'
	});
	
	console.warn('Form reset.');
	return false;
}
function submitform() {
    var1=document.getElementById("Etudiant");
     var2=document.getElementById("Doctor");
     if(var1.checked==true)
     {
        document.getElementById("thediv").innerHTML = '<div class="fieldgroup"><input type="text" name="credit-card" id="credit-card" /><label for="credit-card">ya etudiant</label></div><div class="fieldgroup"><input type="text" name="credit-card-expiry" id="credit-card-expiry" /><label for="credit-card-expiry">Etudiant</label></div>';}
     else
     {
        document.getElementById("thediv").innerHTML = '<div class="fieldgroup"><input type="text" name="credit-card" id="credit-card" /><label for="credit-card">ya doctor</label></div>';
     }
}

/**
 * Sets up the click handlers on the form. Next/reset.
 * ===================================================
 */
function setupClickHandlers() {

	// Show next form on continue click
	$('button[type="submit"]').on('click', function(event) {
			event.preventDefault();
			var $currentForm = $(this).parents('.js-form-step');
			showNextForm($currentForm);
	});

	// Reset form on reset button click
	$('.js-reset').on('click', function() {
		formReset();
	});
	
	return false;
}

/**
 * Shows the next form.
 * @param - Node - The current form.
 * ======================================
 */
function showNextForm($currentForm) {
	var currentFormStep = parseInt($currentForm.attr('data-step')) || false;
	var $nextForm = $('.js-form-step[data-step="' + (currentFormStep + 1) + '"]');
	
	console.log('Current step is ' + currentFormStep);
	console.log('The next form is # ' + $nextForm.attr('data-step'));

	$body.addClass('freeze');

	// Ensure top of form is in view
	$('html, body').animate({
		scrollTop : $progressBar.offset().top
	}, 'fast');

	// Hide current form fields
	$currentForm.addClass('leaving');
	setTimeout(function() {
		$currentForm.addClass('hidden');
	}, 500);
	
	// Animate container to height of form
	$animContainer.css({
		'paddingBottom' : $nextForm.height() + 'px'
	});  

	// Show next form fields
	$nextForm.removeClass('hidden')
					 .addClass('coming')
					 .one(transitionEnd, function() {
						 $nextForm.removeClass('coming waiting');
					 });

	// Increment value (based on 4 steps 0 - 100)
	value += 33;

	// Reset if we've reached the end
	if (value >= 100) {
		formReset();
	} else {
		$('.form-progress')
			.find('.form-progress-indicator.active')
			.next('.form-progress-indicator')
			.addClass('active');

		// Set progress bar to the next value
		$progressBar.val(value);
	}

	// Update hidden progress descriptor (for a11y)
	$('.js-form-progress-completion').html($progressBar.val() + '% complete');
  //make the nex field clickable
	$body.removeClass('freeze');

	return false;
}

/**
 * Sets up and handles the float labels on the inputs.
 =====================================================
 */
function setupFloatLabels() {
	// Check the inputs to see if we should keep the label floating or not
	$('form input').not('button').on('blur', function() {

		// Different validation for different inputs
		switch (this.tagName) {
			case 'SELECT':
				if (this.value > 0) {
					this.className = 'hasInput';
				} else {
					this.className = '';
				}
				break;

			case 'INPUT':
				if (this.value !== '') {
					this.className = 'hasInput';
				} else {
					this.className = '';
				}
				break;

			default:
				break;
		}
	});
	
	return false;
}

/**
 * Gets the party started.
 * =======================
 */
function init() {
	formReset();
	setupFloatLabels();
	setupClickHandlers();
}

init();
        </script>
          @include('inc.footer')
           @endsection