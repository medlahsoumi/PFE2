@yield('form')
<section class="section">
	<h1>Deposer Votre Candidature</h1>

	<div class="form-progress">
		<progress class="form-progress-bar" min="0" max="100" value="0" step="20" aria-labelledby="form-progress-completion"></progress>
		
		<div class="form-progress-indicator one active"></div>
		<div class="form-progress-indicator two"></div>
		<div class="form-progress-indicator three"></div>
    <div class="form-progress-indicator four"></div>
    <div class="form-progress-indicator five"></div>
    <div class="form-progress-indicator six"></div>
		
		<p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complet</p>
	</div>
	<form id="regForm" action="/action_page.php">
	
	<div class="animation-container">
		<!-- Step one -->
	
		<div class="form-step js-form-step" data-step="1">
      
			<p class="form-instructions"><strong><h2>Type de contrat : </h2></strong><br>
				
                 
			<div  id="app4"
			@submit="checkradio"  name="form-step-1">
					 
		  <h4  style="display: inline;margin: 25px"> Etudiant </h4><input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type"  id="Etudiant"/> 
	 
			<hr>
	
				
          <h4 style="display: inline;margin: 31px"> Doctor </h4><input type="radio" onclick="disablebtn();myFunction2()" name="type" v-model="type" id="Doctor"/> 
			 
				<div class="buttons" >
							<button type="button" class="btn btn-alt js-reset">reprendre</button>
					
						<button type="button" id="suiv" disabled class="btn btn-info" onclick="submitform()" placeholder="suivant">Suivant</button>
				</div>
		</div>				
	</div>

          
		</div>
		
			<!-- Step two -->
			<div class="form-step js-form-step waiting hidden" data-step="2">

				<p class="form-instructions"><strong>donné personnel</strong></p>

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

								<button type="button" class="btn btn-info" id="suiv">Suivant</button>
     
            
				</div>

		</div>
		
		
		
					<!-- Step three -->
			<div class="form-step js-form-step waiting hidden"  data-step="3">

				<p class="form-instructions"><strong>Doctor</strong>
						<br> Veuillez remplir tous les champs obligatoires.</p>
						<p id="demo"></p>
				<div name="form-step-3">
						<div class="fieldgroup">
              <h5>Combien d'années avez-vous passé dans la thése :</h5>
								<input type="Number" min="1" max="7" name="Thése1" id="these1" />
							 
						</div>
					
						<div class="fieldgroup">
                <h5>Date soutenance de thèse :</h5>  
              <input type="Date" name="datesout" id="datesout" />
							 
            </div>
            <div class="fieldgroup">
                <h5>Nombre d'inscrits en thèse :</h5>  
              <input type="Number" min="1" max="7" name="nbrinscri" id="nbrinscri" />
							 
						</div>

						<div class="buttons">
								<button type="button" class="btn btn-alt js-reset">reprendre</button>

								<button type="button" placeholder="submit" class="btn">Suivant</button>
						</div>
				</div>

		</div>
		
		
		
		<!-- Step four -->
			<div class="form-step js-form-step waiting hidden" data-step="4">

				<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
						<br> Finally, please just write the words "I Agree" in the field below to consent to us using the previous data you entered to buy a new iPhone.</p>

				<div name="form-step-4" >
                <div class="modified" id="thediv">
                </div>
						<div class="fieldgroup">
								<input type="text" name="agreen" id="agreen" />
								<label for="agreen">I agree</label>
						</div>

						<div class="buttons">
                <button type="button" class="btn btn-alt js-reset">reprendre</button>
                <button type="submit" placeholder="submit" class="btn">Suivant</button>
						</div>
						
				</div>
					
    </div>
    
    <!-- Step five -->
    <div class="form-step js-form-step waiting hidden" data-step="5">

				<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
						<br> Finally, please just write the words "I Agree" in the field below to consent to us using the previous data you entered to buy a new iPhone.</p>

				<div name="form-step-4" >
                <div class="modified" id="thediv">
                </div>
						<div class="fieldgroup">
								<input type="text" name="agreen" id="agreen" />
								<label for="agreen">I agree</label>
						</div>

						<div class="buttons">
                <button type="button" class="btn btn-alt js-reset">reprendre</button>
                <button type="button" placeholder="submit" class="btn">Suivant</button>
						</div>
						
				</div>
					
    </div>
    <!-- Step six -->
    
    <div class="form-step js-form-step waiting hidden" data-step="6">

				<p class="form-instructions"><strong>Félicitation.</strong>
						<br> Vous avez terminé, veuillez vérifier votre boîte de réception un mail de confirmation vous a été envoyé.</p>

				<div name="form-step-4" >
              <p>si vous voulez remettre appuyer sur Reprendre</p>

						<div class="buttons">
                <button type="button" class="btn btn-alt js-reset">reprendre</button>
              
						</div>
						
				</div>
					
    </div>

      <!-- the  End -->
	</div>
	</form>
</section>

</body>
</html>
