
<section id="form2" class="section" style="margin-left: 1100px; color:02034b;bottom: -169px;position: absolute;">
<h1>Score:</h1>
<div id="score"></div>
</section>
<section id="form1" class="section">
                <h1 id="titlee" onclick="submitform()" style="color:0B0C51">Depot de candidature</h1>

<div class="form-progress">
        <progress class="form-progress-bar" min="0" max="50" value="0" step="10" aria-labelledby="form-progress-completion"></progress>  
        <div class="form-progress-indicator one active"></div>
        <div class="form-progress-indicator two"></div>
        <div class="form-progress-indicator three"></div>
        <div class="form-progress-indicator four"></div>
        <div class="form-progress-indicator five"></div>
        <div class="form-progress-indicator six"></div>
        <div class="form-progress-indicator seven"></div>
        <p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complet</p>
</div>
        <form id="deposeform" method="POST" action="/success">
                @csrf
<div class="animation-container" style="padding-bottom: 469px;right: 52px;" >
        <!-- Step one -->

        <div class="form-step js-form-step" style="left: 80;" data-step="1">
                 <p class="form-instructions"><strong><h2 style="color:0B0C51">Type de contrat : </h2></strong><br>             
                                  
         <h4  style="display: inline;margin: 25px;color:0B0C51" > Etudiant </h4>
         <input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type" value="Etudiant"  id="Etudiant"/> 
         <hr>
         <h4 style="display: inline;margin: 31px ;color:0B0C51"> Doctor </h4>
         <input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type" value="Doctor" id="Doctor"/> 
                <div class="buttons" style="left: 37" >
                        <button type="button" class="btn btn-alt js-reset"> <i class="fa fa-refresh" style="font-size:24px"></i></button>
                        <button type="submit" name="suiv" id="suiv1" disabled class="btn btn-info" onclick="submitform()"><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></button>        
                </div>
      </div>
        
                <!-- Step two -->
        <div class="form-step js-form-step waiting hidden"data-step="2">
                <strong><h2 style="color:0B0C51">Données personnelles:</h2></strong>

                              
                               <!-- <div id="f2" class="form-col">
                                        
                                                <p  id="text" style="display:none; font-weight: bold;color:F95252">Vous etes un étudiant </p>
                                                <p id="text2" style="display:none;font-weight: bold;color:F95252">Vous etes un Doctor </p>
                                </div> -->
                                <div class="fieldgroup">
                                                <input type ="text" style="color:0B0C51" onclick="submitform2()" name="cin" id="cin" v-model="cin" placeholder="N°CIN" maxlength="8" required ></i><br>
                                         
                                </div>
                        
                                
                                <div class="fieldgroup">
                                        <input type="text" style="color:0B0C51" v-model="prenom"  name="prenom" id="prenom" placeholder="Prenom" required><br> 
                                </div>
                                
                                
                                <div class="fieldgroup">
                                        <input type="text" style="color:0B0C51" v-model="nom" onclick="submitform2()" name="nom" id="nom" placeholder="Nom" required><br>
                                </div>

                                        <div class="fieldgroup">
                                                        <input type="mail" style="color:0B0C51" name="mail" id="mail" placeholder="Email" required/>
                                                        
                                        </div>
                                        <div class="fieldgroup">
                                                <input type="tel" style="color:0B0C51" name="tel" id="tel"  placeholder="Telephone" required/>
                                                
                                        </div>
        

                        
                                         
                        
                
                                <div class="fieldgroup">
                                                
                                        {{-- <b style="color:0B0C51">Specialité:</b><br> --}}
<input type="text" style="color:0B0C51;" placeholder="choisir votre Specialité" list="specialite" name="specialite">



                                        <datalist id="specialite">
                                                @if(count($Specialité)>0)
                                                @foreach ($Specialité as $Specialite)
                                                <option  value={{$Specialite}}></option>
                                                @endforeach
                                                @endif 
                                        </datalist>
                        </div>
                                        <div class="buttons">
                                                        <button type="button" class="btn btn-alt js-reset"><i class="fa fa-refresh" style="font-size:24px"></i></button>
                                                        <button type="button" name="prev" id="prev" class="btn" ><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></button>

                                                        <button type="submit" name="suiv" id="suiv2" placeholder="submit" class="btn"><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></button>
                                        </div>
            

        </div>
        
        
                
                                <!-- Step three -->
         <div class="form-step js-form-step waiting hidden"  style="height:469px;left: 5px;"  data-step="3">

             <p class="form-instructions"  id="thediv">   {{-- <strong></strong> --}}
                      
                       <p id="demo"></p>
                       <input type="number">
                   <div class="buttons">
                                <button type="button" class="btn btn-alt js-reset"><i class="fa fa-refresh" style="font-size:24px"></i></button>
                                <button type="button" name="prev" id="prev" class="btn" ><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></button>
                                <button type="submit" name="suiv" id="suiv3" placeholder="submit" class="btn"><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></button>
                   </div>                                                
         </div>
                                        
        
        
        <!-- Step four -->
<div class="form-step js-form-step waiting hidden" data-step="4">
         <div class="fieldgroup">
                <p class="form-instructions"><strong><h2  style="color:0B0C51" >Production Scientifique : 1/2</h2></strong></p>
                            
                 <h4 style="color:0B0C51">Communication :</h4>
                <small style="font-family: Arial, Helvetica, sans-serif;">Maximum 5</small><br>
                         
                 <a id="Ajoutcom"   href="#">Ajouter un communication</a>
                                       <br>

                                <br>
                    
                          <input type="text" name="communication[]" id="campo_1" placeholder="ajouter ici 1"/><a href="#" class="eliminar">&times;</a>                                
                           <input type="radio" id="nationalC" value="1" onclick="CalculScore()" name="com"> national
                          <input type="radio" id="internationalC" value="2" onclick="CalculScore()" name="com"> international
                          <div id="containerCom"></div>
                       
                                                           
          </div>
                                                
                                        <div class="buttons">
                <button type="button" class="btn btn-alt js-reset"><i class="fa fa-refresh" style="font-size:24px"></i></button>
                 <button type="button" name="prev" id="prev" class="btn" ><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></button>

                 <button type="submit" name="suiv" id="suiv4" placeholder="submit" class="btn"><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></button>
                                        </div>
</div>           
                                        
      
         <!-- Step five -->
           
          <div class="form-step js-form-step waiting hidden" data-step="5">
         <div class="fieldgroup">
        <p class="form-instructions"><strong><h2  style="color:0B0C51" >Production Scientifique : 2/2</h2></strong></p>
        <h4 style="color:0B0C51">Publication :</h4>
        <small style="font-family: Arial, Helvetica, sans-serif;">maximum 4 </small> <br>
        <button id="Ajoutpub" class="btn btn-info" href="#">Ajouter un publication</button>
                <br>
                 <input type="radio" id="nationalP" onclick="CalculScore()" name="pub" value="1">National
                 <input type="radio" id="internationalP" onclick="CalculScore()" name="pub" value="2"> International
                 <input type="text" name="publication[]" id="pub_1" placeholder="ajouter ici"/><a href="#" class="eliminar2">&times;</a>
                 <div id="containerPub"></div>
            
                                           
                     </div>
                     <div class="buttons">
                                <button type="button" class="btn btn-alt js-reset"><i class="fa fa-refresh" style="font-size:24px"></i></button>
                                 <button type="button" name="prev" id="prev" class="btn" ><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></button>
                
                                 <button type="submit" name="suiv" id="suiv5" placeholder="submit" class="btn"><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></button>
                     </div>                
    

         </div>
                 <!-- Step six -->
                 <div class="form-step js-form-step waiting hidden" data-step="6">
                        
                               <div class="fieldgroup">
                                <H3>Experience Pedagogique : </H3>
                                <h4 style="color:0B0C51">Secondaire :</h4>
                                      <small style="font-family: Arial, Helvetica, sans-serif;">2 ans max</small><br>
                      
                                              <input type="number" placeholder="Experience Pedagogique Secondaire" name="agreen" id="experiencePedagogiqueSecondaire" />
                                              <br>   <hr>
                                        <h4 style="color:0B0C51">Supérieur :</h4>
                                      <small style="font-family: Arial, Helvetica, sans-serif;">2 ans max</small> <br>
                                      <input type="number" placeholder="Experience Pedagogique Supérieur" name="agreen" id="experiencePedagogiqueSupérieur" />
                                                                     
                                                           </div>
                                                              
                                                      <div class="buttons">
                                      <button type="button" class="btn btn-alt js-reset"><i class="fa fa-refresh" style="font-size:24px"></i></button>
                                       <button type="button" name="prev" id="prev" class="btn" ><i class="fa fa-arrow-circle-left" style="font-size:24px"></i></button>
                      
                                       <button type="submit" name="suiv" id="suiv6" placeholder="submit" class="btn"><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></button>
                                                              </div>
                </div>
                <div class="form-step js-form-step waiting hidden" data-step="7">
                                <button type="button" class="btn btn-alt js-reset"><i class="fa fa-refresh" style="font-size:24px"></i></button>
                                   
                                <button id="send" type="submit" class="btn">Send</button>
                                    
                        <h1>submit </h1>
                        
                </div>
        </div>
        </form>
        </section>