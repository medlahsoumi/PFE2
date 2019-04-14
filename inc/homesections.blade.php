
<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our Partners</h2>
                        <p>Mida sit una namet, cons uectetur adipiscing adon elit.</p>
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
                                <p>no concour for u :(</p>
                               @endif 
                       

                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="dark-bg short-section ">
        <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2><img src="img/test.png" width="60">Vous pouvez voir les concours existants</h2>
                        <p>Verifier pour plus d'informations </p>
                    </div>
                </div>
            </div>
        <div class="well">
                
                @if(count($concour)>0)
                @foreach ($concour as $concours)
                <div class="carousel-item" active>
                    <h2  ><a  href="/concour/{{ $concours->id }}" >{{ $concours->titre}}</a></h2>
                    <small style="color:black;">Cree le {{ $concours->created_at }}</small> 
                </div> 
            </div>
           
                @endforeach
                 @else
                 <p>no concour for u :(</p>
                @endif 
                
                
</div>
</section>
<section class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2><img src="img/notif.png" width="50">Abonnez-vous pour recevoir des notifications dépositaires:</h2>
                    <p>Choisissez votre specialite  </p>
                    <div class="subscribe">
                             
                            <form action="/action_page.php">
                                <label for="email">E-mail:</label>
                               <input id="email" type="email" name="emailaddress">
                               <label for="specialité">Specialité:</label>
                            
                         <br>
                              <input id="abonner" style="color: white;" class="btn"type="submit" placeholder="S'abonner">
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
                <div class="col-md-3">
                    <div class="section-text">
                        <h4>Our Business Office</h4>
                        <p>3422 Street, Barcelona 432, Spain, New Building North, 15th Floor</p>
                        <p><i class="fa fa-phone"></i> +101 377 655 22125</p>
                        <p><i class="fa fa-envelope"></i> mail@yourcompany.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section-text">
                        <h4>Business Hours</h4>
                        <p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>9am to 8pm</span></p>
                        <p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span>9am to 2pm</span></p>
                        <p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span>Closed</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>