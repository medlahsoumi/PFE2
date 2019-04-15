
<section class="dark-bg short-section ">
        <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2><img src="img/test.png" width="60">Les places existantes </h2>
                        <p>Verifier pour plus d'informations </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="owl-partners owl-carousel">
                        
                                 @if(count($concour)>0)
                                    @foreach ($concour as $concours)
                                    <div class="item">
                                            
                                        <h2 ><a  href="/concour/{{ $concours->id }}" >{{ $concours->titre}}</a></h2>
                                        <small style="color:black;">Cree le {{ $concours->created_at }}</small> 
                                        </div>
                                @endforeach
                                @else
                                <p>Pas d'informations pour le moment</p>
                               @endif 
                       

                    </div>
                </div>
            </div>
</div>
</section>
<section class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2><img src="img/notif.png" width="50">Abonnez-vous pour recevoir des notifications dépositaires:</h2>
                    <p>Veuillez completez ce formulaire </p>
                    <div class="subscribe">
                             
                            <form action="/action_page.php">
                                <label for="email">E-mail:</label>
                               <input id="email" type="email" name="emailaddress" required>
                               <label for="specialité" >Specialité:</label><hr>

                               <label for="Prenom">Prenom:</label>
                               <input id="Prenom" type="text" name="Prenom" required> 
                               <label for="Nom">Nom:</label>
                               <input id="Nom" type="text" name="Nom" required> <br>
                               <label for="adresse">Adresse:</label>
                               <input id="Adresse" type="text" name="Adresse" required> 
                               <label for="CIN">CIN:</label>
                               <input id="CIN" type="text" name="CIN" required><hr>
                               
                            
                         <br>
                              <input id="abonner" style="color: white;" class="btn"type="submit" value="S'abonner">
                            </form>
                    
                    </div>
                    
                </div>
            </div>
        </div>
       
    </div>
</section>
<!------
<section class="dark-bg short-section stats-bar">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3 mb-sm-30">
                    <div class="counter-item">
                        <h2 class="stat-number" data-n="2325">0</h2>
                        <h6> enseignants chercheurs permanents</h6>
                    </div>
                </div>
                <div class="col-md-3 mb-sm-30">
                    <div class="counter-item">
                        <h2 class="stat-number" data-n="90">0</h2>
                        <h6>Les experts, professionnels</h6>
                    </div>
                </div>
                <div class="col-md-3 mb-sm-30">
                    <div class="counter-item">
                        <h2 class="stat-number" data-n="1748">0</h2>
                        <h6>Les professeurs permanents</h6>
                    </div>
                </div>
                <div class="col-md-3 mb-sm-30">
                    <div class="counter-item">
                        <h2 class="stat-number" data-n="592">0</h2>
                        <h6>Les professeurs contractuels</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>---->
    
    
    
    <section id="contact" class="dark-bg">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 text-center">
                    
                    <div class="section-title">
                        <h2>Contactez-nous <img src="img/msg2.svg" width="50"></h2>
                        <p>Si vous avez un probleme vous pouvez nous contacter </p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                    <iframe src="https://www.google.fr/maps/ms?msa=0&amp;msid=211930570342209929186.000502e127f49f61a35ef&amp;hl=fr&amp;ie=UTF8&amp;t=m&amp;ll=36.871519,10.33453&amp;spn=0.048064,0.072956&amp;z=13&amp;output=embed" width="350" height="260" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" __idm_frm__="1137"></iframe>
                     </div>
                <div class="col-md-2">
                    <div class="section-text">
                        <h4>Université de Carthage</h4>
                        <p>Adresse : Avenue de la République BP 77 -1054 Amilcar </p>
                        <p><i class="fa fa-phone"></i> (216) 71 749 100 - (216) 71 749 167 </p>
                        <p><i class="fa fa-fax"></i>  (216) 71 748 910</p>
                    </div>
                </div>
                <div class="col-md-2">
                        
                    <div class="section-text">
                        <h4>Heures de travail</h4>
                        <p><i class="fa fa-clock-o"></i> <span class="day">Jours de la semaine:</span><span>09:00 jusqu'a 18:00</span></p>
                        <p><i class="fa fa-clock-o"></i> <span class="day">Samedi</span><span>09:00 jusqu'a 12:00</span></p>
                        <p><i class="fa fa-clock-o"></i> <span class="day">Dimanche</span><span>Fermé</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre Nom *" id="name" required="" data-validation-required-message="Veuillez entrer votre Nom.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" id="email" required="" data-validation-required-message="Veuillez entrez votre adresse email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre Message *" id="message" required="" data-validation-required-message="Veuillez ecrire votre message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn">Envoyer Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                        
                        
            </div>
            
        </div>
    </section>
    