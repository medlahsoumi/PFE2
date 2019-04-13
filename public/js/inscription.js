
$(document).ready(function() {
    var MaxInputs= 5; 
    var containerCom       = $("#containerCom"); 
    var AddButton       = $("#Ajoutcom"); 
    var x = $("#containerCom div").length + 2;
    var FieldCount = x-1; //para el seguimiento de los campos

    $(AddButton).click(function (e) {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;
            //agregar campo
            $(containerCom).append('<div><input type="text" name="communication[]" id="campo_'+ FieldCount +'" placeholder="ajouter ici '+ FieldCount +'"/><a href="#" class="eliminar">&times;</a><input type="radio" id="nationalC'+ FieldCount +'" value="1" onclick="CalculScore()" name="com'+ FieldCount +'"> national<input type="radio" id="internationalC'+ FieldCount +'" value="2" onclick="CalculScore()" name="com'+ FieldCount +'"> international</div>');
            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
        if( x > 1 ) {
            $(this).parent('div').remove(); //eliminar el campo
            x--;
        }
        return false;
    });
});

$(document).ready(function() {
    var MaxInputs= 3; 
    var containerPub       = $("#containerPub"); 
    var AddButton2       = $("#Ajoutpub"); 
    var x = $("#containerPub div").length + 1;
    var FieldCount = x-1; //para el seguimiento de los campos

    $(AddButton2).click(function (e) {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;
            //agregar campo
            $(containerPub).append('<div><input type="text" name="publication[]" id="pub_'+ FieldCount +'" placeholder="ajouter ici '+ FieldCount +'"/><a href="#" class="eliminar">&times;</a><input type="radio" id="nationalP'+ FieldCount +'" onclick="CalculScore()" name="pub'+ FieldCount +'" value="1">National<input type="radio" id="internationalP'+ FieldCount +'" onclick="CalculScore()" name="pub'+ FieldCount +'" value="2"> International</div>');
            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
        if( x > 1 ) {
            $(this).parent('div').remove(); //eliminar el campo
            x--;
        }
        return false;
    });
});

  function CalculScore() {
    communicationD= document.getElementById("communicationD");
    publicationD= document.getElementById("publicationD");
    NC= document.getElementById("nationalC");
    IC= document.getElementById("internationalC");
    NP= document.getElementById("nationalP");
    IP= document.getElementById("internationalP");
    var score=0;
    console.log("score",score);
    console.log("publicationD",publicationD.value);
    console.log("internationalC",IC);
    console.log("internationalC",IC.value);
    console.log("nationalC",NC.value);
    console.log("nationalP",NP.value);
    console.log("internationalP",IP.value)  ;
    console.log("communicationD",communicationD.value);

    if (NC.checked == true)
    {
    score=parseInt(NC.value)*parseInt(communicationD.value);
    }else if(IC.checked == true)
    {
    score=parseInt(IC.value)*parseInt(communicationD.value);
    }
    else if(NP.checked == true){
    score=parseInt(NP.value)*parseInt(publicationD.value);

    }
    else {
    score=parseInt(IP.value)*parseInt(publicationD.value);
    }
    document.getElementById("score").innerHTML =parseInt(score);


}

        function disablebtn() {
                    Etudiant=document.getElementById("Etudiant");
        Doctor=document.getElementById("Doctor");
                    if(Etudiant.checked==true || Doctor.checked==true)
                    btn=document.getElementById("suiv1").disabled=false;		
		}
function submitform2(){
   cin=document.getElementById("cin");
  nom=document.getElementById("nom");
 prenom=document.getElementById("prenom");
 if(cin.length>0)
 btn=document.getElementById("suiv").disabled=false;
}

function validateForm() {
var x = document.forms["form-step-2"]["cin"].value;
var y = document.forms["form-step-2"]["nom"].value;

if ((x == "")||(y.length==0)) {
alert("Nom Obligatoire");
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
        document.getElementById("thediv").innerHTML = '<div class="fieldgroup"><h4 style="color:0B0C51">nombre d annees en these </h4><select id="nbranne" ></br> <option value="1" disabled>1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5" disabled>5</option><option value="6" disabled>6</option><option value="7" disabled>7</option></select></div><br><h4 style="color:0B0C51">Manuscrit de thèse déposée : </h4>  <h4  style="display: inline;margin: 25px;color:0B0C51" > Oui </h4> <input type="radio" onclick="myFunction3()" name="type"  id="Oui"/> <h4  style="display: inline;margin: 25px;color:0B0C51" > Non </h4><input type="radio" onclick="myFunction3()" name="type"  id="Non"/>  <div id="t2" style="display:none"><h4 style="color:0B0C51">Vous vous pouvez passer à l étape suivant</h4></div><div id="t1" style="display:none" > <br> <h4 style="color:0B0C51" >intitulé du thése : </h4> <input  style="color:0B0C51" type="text" placeholder="intitulé du thése" > <h4 style="color:0B0C51" >Date de dépot :</h4><input style="color:0B0C51" type="date"></div>';}
 else
 {
    document.getElementById("thediv").innerHTML = '<div class="fieldgroup"><h5 style="color:0B0C51" ><b>Combien d années avez-vous passé dans la thése :</b></h5><input type="Number" min="1" max="7" name="Thése1" id="these1" /></div><div class="fieldgroup"><h5><b>Date soutenance de thèse :</b></h5><input type="Date" name="datesout" id="datesout" /></div><div class="fieldgroup"><h5><b>Nombre d inscrits en thèse :</b></h5> <input type="Number" min="1" max="7" name="nbrinscri" id="nbrinscri" /></div>';}
}
function myFunction3() {
var checkBox = document.getElementById("Oui");
var checkBox2 = document.getElementById("Non");
var text = document.getElementById("t1");
var text2 = document.getElementById("t2");


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
/**
* Sets up the click handlers on the form. Next/reset.
* ===================================================
*/
function setupClickHandlers() {

// Show next form on continue click
$('button[name="suiv"]').on('click', function(event) {
        event.preventDefault();
        var $currentForm = $(this).parents('.js-form-step');
        showNextForm($currentForm);

});
$('button[name="prev"]').on('click', function(event) {
        event.preventDefault();
        var $currentForm = $(this).parents('.js-form-step');
        showPrevForm($currentForm);

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
value += 10;

// Reset if we've reached the end
if (value >= 5000) {
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

$body.removeClass('freeze');

return false;
}
//-----------------------------------------------------------------------------------------
function showPrevForm($currentForm) {
var currentFormStep = parseInt($currentForm.attr('data-step')) || false;
var $nextForm = $('.js-form-step[data-step="' + (currentFormStep - 1) + '"]');

console.log('Current step is ' + currentFormStep);
console.log('The next(previous) form is # ' + $nextForm.attr('data-step'));

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
                 .addClass('leaving')
                 .one(transitionEnd, function() {
                     $nextForm.removeClass('leaving waiting');
                 });

// Increment value (based on 4 steps 0 - 100)
value -= 10;

// Reset if we've reached the end
if (value >= 101) {
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
$('.js-form-progress-completion').html($progressBar.val() - '% complete');

$body.removeClass('freeze');

return false;
}

//-------------------------------------------------------------------------------------------
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
  
