/** 
 *  (name mt3 national wala international).click
 * if (input! vide){
 * (#score)+=elibch yedzed
 * } 
 * 
 * exmp:
 * jQuery("input[ ]").each(function() {
    var comu=$('#communication');
        if(comu!=""){
    $("#score").html(sommeCalc(1.5,0,0,0));
});
*/
var tabSomme = new Array(6).fill(0);
function sommeCalc(i,v){
    tabSomme[i] = v;
    return tabSomme.reduce((total, num) => total + num);
}

$('#mentiondiplome').change(function(){
    var sum1 = 0;     
        sum1 += Number($(this).val());
        $("#score").html(sommeCalc(0, sum1));

});   
$('#Doctorat').change(function(){
    var sum1 = 0;     
        sum1 += Number($(this).val());
        $("#score").html(sommeCalc(0, sum1));

});
$("#redoublement").change(function(){
    var sum2 = 0;
        sum2 += Number($(this).val());
        $("#score").html(sommeCalc(1,sum2));
})
$("#communication").on('input', function(){
    var tab = document.querySelectorAll('#communication');
   
    if($('#nationalC').is(':checked')){
        $("#score").html(sommeCalc(4,0.5));
    }
    else if ($('#internationalC').is(':checked')){
        $("#score").html(sommeCalc(4,1));
    }
})

$("#publication").on('input',function(){
    if($('#nationalP').is(':checked')){
        $("#score").html(sommeCalc(4,0.5));
    }
    else if ($('#internationalP').is(':checked')){
        $("#score").html(sommeCalc(4,1));
    }

})
$("#experiencePedagogiqueSecondaire").change(function(){
    var sum=0;
    sum += Number($(this).val());
        $("#score").html(sommeCalc(5,sum));
})
$("#experiencePedagogiqueSupérieur").change(function(){
    var sum=0;
    sum += Number($(this).val());
        $("#score").html(sommeCalc(5,sum));
})

$('#score').text('0');
     $(document).ready(function() {
     var MaxInputs= 5; 
     var containerCom = $("#containerCom"); 
     var AddButton= $("#Ajoutcom"); 
     var x = $("#containerCom div").length + 2;
     var FieldCount = x-1; 
    
     $(AddButton).click(function (e) {
           if(x <= MaxInputs) //max input box allowed
          {
            FieldCount++;
          
            $(containerCom).append('<div><input type="text" name="communication" class="communication" id="communication" placeholder="ajouter ici" disabled/><a href="#" id="deletecom'+ FieldCount +'" class="eliminar">&times;</a><input type="radio" id="nationalC'+ FieldCount +'" value="1" onclick="CheckingCommunication2(event),CalculScore()" name="com'+ FieldCount +'"> national<input type="radio" id="internationalC'+ FieldCount +'" value="2" onclick="CheckingCommunication2(event),CalculScore()" name="com'+ FieldCount +'"> international</div>');
            x++; //text box increment
           }
          return false;
            });
            $("#communication2").change(function(){
                Console.log("zeu");
                if($('#nationalC2').is(':checked')){
                    Console.log("nationalc2"+nationalC2.val());
                    $("#score").html(sommeCalc(4,0.5));
                }else if ($('#internationalC2').is(':checked')){
                    $("#score").html(sommeCalc(4,1));
                }
            })
            

     $("body").on("click",".eliminar", function(e){ 
        if( x > 1 ) {
            $(this).parent('div').remove(); 
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

     $(AddButton2).click(function () {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;
            //agregar campo
            $(containerPub).append('<div><input type="text" name="publication[]" id="publication'+ FieldCount +'" placeholder="ajouter ici" disabled/><a href="#" class="eliminar">&times;</a><input type="radio" id="nationalP'+ FieldCount +'" onclick="CheckingPublication2(event),CalculScore()" name="pub'+ FieldCount +'" value="1">National<input type="radio" id="internationalP'+ FieldCount +'" onclick="CheckingPublication2(event),CalculScore()" name="pub'+ FieldCount +'" value="2"> International</div>');
            x++; 
        }
        return false;
     });

     $("body").on("click",".eliminar", function(e){
        if( x > 1 ) {
            $(this).parent('div').remove();
            x--;
        }
        return false;
     });
     });

    function CheckingCommunication2(event) {
        // console.log(event);
        event.path[1].childNodes[0].disabled = false;  
    
    }
    function CheckingCommunication(event){
        event.path[1].childNodes[1].disabled = false;  
       // $(event.currentTarget).closest("#communication").removeAttr('disabled');   
    //    $(event.currentTarget).closest(".communication").disabled=false;  
    } 
    function CheckingPublication2(event) {
 
        event.path[1].childNodes[0].disabled = false;  
    
    }
    function CheckingPublication(event){
        console.log(event)
        event.path[1].childNodes[14].disabled = false;  
       // $(event.currentTarget).closest("#communication").removeAttr('disabled');   
    //    $(event.currentTarget).closest(".communication").disabled=false;  
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


/**function myFunction2() {
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
} */
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
        document.getElementById("titlee").innerHTML = 'Candidature Etudiant ';
       document.getElementById("thediv").innerHTML = '<strong><h2 id="curs"> Cursus universitaire</h2> </strong> <div class="fieldgroup"><h4 style="color:0B0C51">nombre d annees en these : </h4><select  id="nbranne" > <option value="0" disabled >1</option><option value="5">2</option><option value="7">3</option><option value="7">4</option><option value="5" disabled>5</option><option value="0" disabled>6</option><option value="0" disabled>7</option></select></div><h4 style="color:0B0C51">Manuscrit de thèse déposée : </h4>  <h4  style="display: inline;margin: 25px;color:0B0C51" > Oui </h4> <input type="radio" onclick="myFunction3()" name="type" value="10" id="Oui"/> <h4  style="display: inline;margin: 25px;color:0B0C51" > Non </h4><input type="radio" onclick="myFunction3()" name="type"  id="Non"/>  <div id="t2" style="display:none"><h4 style="color:0B0C51">Vous vous pouvez passer à l étape suivant</h4></div><div id="t1" style="display:none" > <br> <h4 style="color:0B0C51" >intitulé du thése : </h4> <input  style="color:0B0C51" type="text" placeholder="intitulé du thése" > <h4 style="color:0B0C51" >Date de dépot :</h4><input style="color:0B0C51" type="date"></div>';
     $('#nbranne').change(function(){
    var sum3 = 0;     
    
      sum3 +=Number($(this).val());
     $("#score").html(sommeCalc(2,sum3));
});
}
           else if(var2.checked==true)
     {
         
       document.getElementById("titlee").innerHTML = 'Candidature Doctor ';   
       document.getElementById("thediv").innerHTML= ' <strong><h2 id="curs"> Cursus universitaire</h2> </strong> <div class="fieldgroup"><h3 style="color:0B0C51" >Années passées en thése :</h3><select name="These1 id="These1"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select><h3 style="color:0B0C51">Date de soutenance de thèse :</h3><input type="Date" name="datesout" id="datesout" /><h3 style="color:0B0C51">Nombre d inscrits en thèse :</h3> <input type="Number" min="1" max="7" name="nbrinscri" id="nbrinscri" /><h3 style="color:0B0C51">Doctorat :</h3> <select name="Doctorat" id="Doctorat"><option value="0">Honorable</option><option value="10">Tres honorable</option> </select></div>';
    }
    
};
function Success(){
    //controle saisie lehne lezem ikono mch vide !
    var x = document.getElementById("form1");
    var y = document.getElementById("successful");
    var cin = document.getElementById('cin');
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var email = document.getElementById('email');
    var telephone = document.getElementById('telephone');
    $(containerPrint).append('<div><p>'+cin+'</p><p>'+nom+'</p><p>'+prenom+'</p><p>'+email+'</p><p>'+telephone+'</p></p></div>');
         
    x.style.display = "none";
    y.style.display = "block";

    
    
}
function myFunction3() {
var checkBox = document.getElementById("Oui");
var checkBox2 = document.getElementById("Non");
var text = document.getElementById("t1");
var text2 = document.getElementById("t2");



if (checkBox.checked == true){
    $("#score").html(sommeCalc(3,10));
text.style.display = "block";
text2.style.display = "none";
} 
else if (checkBox2.checked == true) {
    $("#score").html(sommeCalc(3,0));
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
value += 9;

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
$currentForm.addClass('coming');
setTimeout(function() {
    $currentForm.addClass('hidden');
}, 100);

// Animate container to height of form
$animContainer.css({
    'paddingBottom' : $nextForm.height() + 'px'
});  

// Show next form fields
$nextForm.removeClass('hidden')
                 .addClass('leaving')
                 .one(transitionEnd, function() {
                     $nextForm.removeClass('waiting leaving ');
                 });

// Increment value (based on 4 steps 0 - 100)
value -= 9;

// Reset if we've reached the end
if (value >= 101) {
    formReset();
} else {
    $('.form-progress')
    
        .find('.form-progress-indicator.active')
        .prev('.form-progress-indicator')
        
        .next('.form-progress-indicator')
        .removeClass('active');
       

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
  

