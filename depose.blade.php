<!DOCTYPE html>
<html>
<body>
  <div class="form-step js-form-step waiting hidden" data-step="4">
           
                     
      <div class="fieldgroup">
          <p class="form-instructions"><strong><h2  style="color:E3E3E3" >Production Scientifique :</h2></strong></p>
              
<h4 style="color:E3E3E3">communication :</h4>
  <small style="font-family: Arial, Helvetica, sans-serif;">maximum 5</small><br>
            <center> 
                          <a id="Ajoutcom" class="btn btn-info" href="#">Ajouter un communication</a>
                           <br>
                   <input type="radio" id="nationalC" value="1" onclick="CalculScore()" name="com"> 1<br>
                   <input type="radio" id="internationalC" value="2" onclick="CalculScore()" name="com"> 2<br>
                   <br>
            </center>
          <input type="text" v-model="communication" placeholder="communication" name="agreen" id="communication" />
          <br> 
          <hr>
          <h4 style="color:E3E3E3">publication :</h4>
          <small style="font-family: Arial, Helvetica, sans-serif;">maximum 4 </small> <br>
                  <select id="publicationD">
                                  <a id="Ajoutpub" class="btn btn-info" href="#">Ajouter un publication</a>
                    </select> <br>
                   <input type="radio" id="nationalP" onclick="CalculScore()" name="pub" value="1"> 1<br>
                   <input type="radio" id="internationalP" onclick="CalculScore()" name="pub" value="2"> 2<br>
            <br>
   
            <div id="container">


                          <input type="text" name="mitexto[]" id="campo_1" placeholder="Texto 1"/><a href="#" class="eliminar">&times;</a>
                          
                         </div>                                
                       </div>
                                  
                          <div class="buttons">
  <button type="button" class="btn btn-alt js-reset">reprendre</button>
   <button type="button" id="prev" class="btn" >Previously</button>

   <button type="submit" id="suiv" placeholder="submit" class="btn">Suivant</button>
                          </div>
</div>           
                          
</div>

<p id="score"></p>
<script>
  
$(document).ready(function() {

var MaxInputs= 5; 
var container       = $("#container"); 
var AddButton       = $("#agregarCampo"); 
var x = $("#contenedor div").length + 1;
var FieldCount = x-1; //para el seguimiento de los campos

$(AddButton).click(function (e) {
    if(x <= MaxInputs) //max input box allowed
    {
        FieldCount++;
        //agregar campo
        $(container).append('<div><input type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'"/><a href="#" class="eliminar">&times;</a></div>');
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
var score;
console.log("score",score);
console.log(NC.value);
console.log(IC.value);
console.log(NP.value);
console.log(IP.value)  ;
console.log(communicationD.value);

console.log(publicationD.value);


  if (NC.checked == true){
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
document.getElementById("score").innerHTML =score;


}


</script>
</body>
</html>
