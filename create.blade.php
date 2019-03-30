@extends('layouts.app')

@section('content')
       
     
    @include("layouts.navbar")
    <style>
    
 
 body {
   background-image: url("/img/grey.jpg"); */
  background-color: #5e71ed;
 }
 
table, th, td {
  
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}


      h1 {
  letter-spacing: 3px;
  text-decoration: underline;
}
    </style>

<div class="conatiner">
  <div class="w3-container w3-center w3-animate-right">
    <h1>Inscription</h1></div>
    </div>
    <form

     id="app"
     @submit="checkForm" 
     action="/verif" 
     method="post">
      <p v-if="errors.length">
    <b>Please correct the following error(s):</b>
    <ul>
      <li v-for="error in errors">@{{ error }}</li>
    </ul>
  </p>



 
  
<br>
 
<p>N° CIN:</p><input type ="text" name="cin" id="cin" v-model="cin" placeholder="Cin" maxlength="8"  ></i><br>
<p>nom:</p>

<input type="text" v-model="nom" name="nom" id="nom" placeholder="nom" ><br>
<p>Prénom:</p>
<input type="text" v-model="prenom" name="prenom" id="prenom" placeholder="prenom"><br> 
<p>Spécialité:</p>
<input type="text" name="specialite" placeholder="Spécialité"><br><hr>
<p>Type de contrat </p>
  <input type="radio" name="contrat" placeholder="these" checked> étudiant <br>
  <input type="radio" name="contrat" placeholder="doctorat"> doctorat<br><hr>

  </div>
<input class="btn btn-primary"  type="submit" value="Envoyer"> 
</div>
 
</form>

<center> <h4>Cursus Universitaire</h4> </center>


<center><table>
    <tr>
      <th>Type de diplome</th>
      <th>Durée (ans)</th>
      <th>mention</th>
      <th>points</th>
      
    </tr>
    <tr>
      <td>
      <select v-model="Dip">
  <option disabled value="">Type de diplome</option>
  <option>Licence+Mastere</option>
  <option>Maitrise+Mastere</option>
  <option>Ingéniorat</option>
</select>
<span>@{{ selected }}</span>
      </td>
      <td>
      <input type="number" pattern="[3-9]" v-model="Dur">
      </td>
      <td>
      <select v-model="men">
  <option disabled value="">mention</option>
  <option>Assez Bien</option>
  <option>Bien</option>
  <option>Tres bien</option>
</select>
<span>@{{ mention }}</span>
      </td>
      <td>
      <p v-model="point">points</p>
      </td>
      
    </tr>
  </table> </center> 
  <table>
<th>
<td>
<ul id="dipl">
  <li v-for="data in datas">
  @{{ data }}<br>
  </li><br>
</ul><br>
</td>

</th>
</table>

 <button class="w3-btn w3-white w3-border w3-round-large" v-on:click=addNewDip>Ajouter</button>
<br><hr>

 
<div class="app3">
<center><h4>Avancement des travaux de thèse </h4></center>
<form>
<h5>thése en cours :</h5>
<input type="radio" id="these" value="2éme année thése" v-model="picked">
<label for="one">2éme année thése</label>
<br>
<input type="radio" id="these" value="3éme année thése" v-model="picked">
<label for="two">3éme année thése</label><br>
<input type="radio" id="these" value="4éme année thése" v-model="picked">
<label for="three">4éme année thése</label>
<h5>Thése deposée:</h5>
  <input type="text" id="these" v-model="these" >
  <h5>Thése soutenue ave la mention trés honorable :</h5>
  <input type="text" id="these" v-model="theseS" ><br>
  <hr>
  <center><h4>Production Scientifique</h4></center>
  <div class="container">
  <table class="table table-bordered">
 <th>
 Communication
 </th> 
 <th>Publication</th>
 <tr>
 <tr>
    <th><input Type="text" placeholder="max 5"></th>
    <th><input Type="text" placeholder="max 10"></th> 
   
  </tr>
  <tr>
    <td><input Type="text" ></td>
    <td><input Type="text"></td>
 
  </tr>
  <tr>
    <td><input Type="text" ></td>
    <td><input Type="text" ></td>
 
  </tr>
 
</table>
</div>
</form>
<hr>
  <br>
</div>
</div>
</div>
     <script src="/js/vue.js"></script>  
      <script src="/js/script.js"></script>  
    <!-- <script src="/resources/js/vue.js"></script> -->
    <!-- <script src="/resources/js/script.js"></script> -->

 
@include("layouts.footer")
 
</div>
@endsection