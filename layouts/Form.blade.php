<section class="section">
                <h1 style="color:white">{{$title}}</h1>

<div class="form-progress">
        <progress class="form-progress-bar" min="0" max="50" value="0" step="10" aria-labelledby="form-progress-completion"></progress>  
        <div class="form-progress-indicator one active"></div>
        <div class="form-progress-indicator two"></div>
        <div class="form-progress-indicator three"></div>
        <div class="form-progress-indicator four"></div>
        <div class="form-progress-indicator five"></div>
        <div class="form-progress-indicator six"></div>
        <p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complet</p>
</div>
        <form method="POST" action="/success">

<div class="animation-container" >
        <!-- Step one -->

        <div class="form-step js-form-step" style="left: 80;" data-step="1">

                 <p class="form-instructions"><strong><h2 style="color:C0BFBF">Type de contrat : </h2></strong><br>
                        
         
                                  
          <h4  style="display: inline;margin: 25px;color:C0BFBF" > Etudiant </h4>
        <input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type"  id="Etudiant"/> 
 
                <hr>

                        
  <h4 style="display: inline;margin: 31px ;color:C0BFBF"> Doctor </h4>
        <input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type" id="Doctor"/> 
                <div class="buttons" style="left: 37" >
                        <button type="button" class="btn btn-alt js-reset">reprendre</button>
                        <button type="submit" id="suiv" disabled class="btn btn-info" onclick="submitform()">Suivant</button>
                        
                </div>
 
        </div>
        
                <!-- Step two -->
        <div class="form-step js-form-step waiting hidden"data-step="2">
                <strong><h2 style="color:C0BFBF">Données personnelles:</h2></strong>
                        <p v-if="errors.length">
                                <b>Please correct the following error(s):</b>
                                        <ul>
                                                <li v-for="error in errors">@{{ error }}</li>
                                        </ul>
                                </p>
                              
                                <div id="f2" class="form-col">
                                        
                                                <p  id="text" style="display:none; font-weight: bold;color:F95252">tu es un étudiant </p>
                                                <p id="text2" style="display:none;font-weight: bold;color:F95252">tu es un Doctor </p>
                                </div>
                                <div class="fieldgroup">
                                                <input type ="text" style="color:C0BFBF" onclick="submitform2()" name="cin" id="cin" v-model="cin" placeholder="Cin" maxlength="8" required ></i><br>
                                         
                                </div>
                        
                                
                                <div class="fieldgroup">
                                                <input type="text" style="color:C0BFBF" v-model="nom" onclick="submitform2()" name="nom" id="nom" placeholder="nom" required><br>
                                                </div>


                                <div class="fieldgroup">
                                                <input type="text" style="color:C0BFBF" v-model="prenom"  name="prenom" id="prenom" placeholder="prenom" required><br> 
                                        </div>

                                        <div class="fieldgroup">
                                                        <input type="mail" style="color:C0BFBF" name="mail" id="mail" placeholder="email" required/>
                                                        
                                        </div>
                                        <div class="fieldgroup">
                                                <input type="tel" style="color:C0BFBF" name="tel" id="tel"  placeholder="Telephone" required/>
                                                
                                        </div>
        

                        
                                         
                        
                
                                <div class="fieldgroup">
                                                
                                        {{-- <b style="color:C0BFBF">Specialité:</b><br> --}}
<input type="text" style="color:C0BFBF;" placeholder="choisir votre Specialité" list="specialite" name="specialite">
    <datalist id="specialite">
                                                @if(count($Specialité)>0)
                                                @foreach ($Specialité as $Specialite)
                                                <option  value={{$Specialite}}></option>
                                                @endforeach
                                                @endif
 
                        </div>
                                        <div class="buttons">
                                                        <button type="button" class="btn btn-alt js-reset">reprendre</button>
                                                        <button type="button" id="prev" class="btn" >Previously</button>

                                                        <button type="submit" id="suiv" placeholder="submit" class="btn">Suivant</button>
                                        </div>
            

        </div>
        
        
        
                                <!-- Step three -->
        <div class="form-step js-form-step waiting hidden"  style="height:469px;left: 37;"  data-step="3">

                                                        
                                                         
                                                                <p class="form-instructions"  id="thediv"><strong></strong>
                                                                 
                                                                        <br> Veuillez remplir tous les champs obligatoires.</p>
                                                                         
                                                                <p id="demo"></p>
                                                         
                                                                <div class="buttons">
                                                                                <button type="button" class="btn btn-alt js-reset">reprendre</button>
                                                                                <button type="button" id="prev" class="btn" >Previously</button>

                                                <button type="submit" id="suiv" placeholder="submit" class="btn">Suivant</button>
                                                                </div>
                                              

                                </div>
                         
        
        
        
        <!-- Step four -->
        <div class="form-step js-form-step waiting hidden" data-step="4">

                        <p class="form-instructions"><strong><h2  style="color:E3E3E3" >Production Scientifique :</h2></strong></p>

                     
                                        <div class="fieldgroup">
          <h4 style="color:E3E3E3">communication :</h4>
                <small style="font-family: Arial, Helvetica, sans-serif;">maximum 5</small><br>

                        <input type="text" placeholder="communication" name="agreen" id="communication" />
                        <br>   <hr>
                  <h4 style="color:E3E3E3">publication :</h4>
                <small style="font-family: Arial, Helvetica, sans-serif;">maximum 4 </small> <br>
                <input type="text" placeholder="communication" name="agreen" id="publication" />
                                                
                                     </div>
                                                
                                        <div class="buttons">
                <button type="button" class="btn btn-alt js-reset">reprendre</button>
                 <button type="button" id="prev" class="btn" >Previously</button>

                 <button type="submit" id="suiv" placeholder="submit" class="btn">Suivant</button>
                                        </div>
                                        
                                        
        </div>
         <!-- Step five -->
        <div class="form-step js-form-step waiting hidden" data-step="5">
                      
                <div class="fieldgroup">
                        <H3>Experience Pedagogique : </H3>
                        <h4 style="color:E3E3E3">secondaire :</h4>
                              <small style="font-family: Arial, Helvetica, sans-serif;">2 ans max</small><br>
              
                                      <input type="text" placeholder="Experience Pedagogique Secondaire" name="agreen" id="experiencePedagogiqueSecondaire" />
                                      <br>   <hr>
                                <h4 style="color:E3E3E3">Supérieur :</h4>
                              <small style="font-family: Arial, Helvetica, sans-serif;">2 ans max</small> <br>
                              <input type="text" placeholder="Experience Pedagogique Supérieur" name="agreen" id="experiencePedagogiqueSupérieur" />
                                                              
                                                   </div>
                                                              
                                                      <div class="buttons">
                              <button type="button" class="btn btn-alt js-reset">reprendre</button>
                               <button type="button" id="prev" class="btn" >Previously</button>
              
                               <button type="submit" id="suiv" placeholder="submit" class="btn">Suivant</button>
                                                      </div>
                    </div>
         <!-- Step six -->
         <div class="form-step js-form-step waiting hidden" data-step="6">
                        <h1>enq step six</h1>
                        <button type="submit" >FINISH</button>
   
                </div>
</div>
</form>
</section>