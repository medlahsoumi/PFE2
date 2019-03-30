@yield('per')
<div class="col-md-offset-8">
<form>
<p>Ncin:</p>
<input type ="text" name="cin" id="cin" v-model="cin" placeholder="Cin..." maxlength="8" required ></i><br>
<p>nom:</p>
<input type="text" v-model="nom" name="nom" id="nom" placeholder="nom..." required><br>
<p>Prénom:</p>
<input type="text" v-model="prenom" name="prenom" id="prenom..." placeholder="prenom" required><br> 

<p>Telephone:</p>
<input type ="text" name="cin" id="cin" v-model="cin" placeholder="Telephone..." maxlength="8" required ></i><br>
<p>Email:</p>
<input type ="email" name="cin" id="cin" v-model="cin" placeholder="Email..." maxlength="8" required ></i><br>
<p>Spécialité:</p>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Spécialité
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="/">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
    <li class="divider"></li>
    <li><a href="#">About Us</a></li>
  </ul>
</div>
</form>
</div>