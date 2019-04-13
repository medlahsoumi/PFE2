@extends('layouts.app')

@section('content')
<title>Contacter</title>
<link rel="stylesheet" href="css/contacter.css">
{{-- background-image: url("/img/grey.jpg"); --}}
 
<div class="w3-container w3-center w3-animate-right">
    <h1 style="color:#181DB6; font: sans-serif;">{{$title}}</h1></div>
    <div class="conatiner-fluid">

    <form id="form_contact" class="jqform" action="/succes" method="get">
    
      <div id="abc" class="container">
      <p class="txt" style="color:#070B91;text-shadow:1px 1px 0 #0E15D8color:#070B91;font-family: Helvetica, Arial, sans-serif;line-height: 1.5; " >Pour plus d'information, veuillez remplir le formulaire suivant : </p>
              <input type="hidden" name="code_menu" id="code_menu" value="18" required/>
              <div class="clear"> 
              </div>
              <label class="label">Liste des contacts :</label>
              <select   name="agents">
                <option value="0">Liste des contacts</option>
                                <option value="mohamed.bin.hamza@gmail.com">Mohamed</option>
                              </select>
              <div class="clear"> </div>
              <label class="label">Nom & Prénom: *</label>
              <input name="nom" id="nom" placeholder="Nom & Prénom"  value="" class="inputxt validate[required]"  required/>
              <div class="clear"> </div>
              <label class="label">
                Sociéte                :</label>
              <input name="societe" placeholder="Sociéte" id="societe" value="" class="inputxt "  />
              <div class="clear"></div>
              <label class="label">
                E-mail                : *</label>
              <input name="email" id="email" placeholder="E-mail" value="" class="inputxt validate[required,custom[email]]"  required />
              <div class="clear"> </div>
              <label class="label">adresse :</label>
              <input name="adresse" value="" placeholder="adresse" class="inputxt" />
              <div class="clear"> </div>
              <label class="label">Téléphone :</label>
              <input name="telephone" placeholder="Téléphone" id="telephone" value="" class="inputxt" />
              <div class="clear"> </div>
              <label class="label">Sujet : *</label>
              <input name="sujet" value="" placeholder="Sujet" class="inputxt validate[required]" required />
              <div class="clear"></div>
              <label class="label">Message : *</label>
              <textarea name="message" cols="" placeholder="Message" rows="" class="inputxtarea validate[required]"></textarea>
               
              
               
             
              <div class="blocbt">
                <input name="" type="reset" class="bt" value="Effacer" placeholder="Effacer" />
                <input class="bt" name="" type="submit" value="Envoyer" placeholder="Envoyer" />
              </div>
              <p class="txt_obligatoire"><em>* Champ obligatoire</em></p>
            </form> </div>
             
    </form><center>
    <div class="container">
    <iframe src="https://www.google.fr/maps/ms?msa=0&amp;msid=211930570342209929186.000502e127f49f61a35ef&amp;hl=fr&amp;ie=UTF8&amp;t=m&amp;ll=36.871519,10.33453&amp;spn=0.048064,0.072956&amp;z=13&amp;output=embed" width="500" height="375" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" __idm_frm__="1137"></iframe>
      </div>
    </center>
    <script src="js/vue.js"></script>
    <script src="js/script.js"></script>

<footer>
@include("layouts.footer")
</footer>
@endsection