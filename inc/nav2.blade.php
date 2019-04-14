<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="#page-top"><img id="img"src="{{ asset('/img/logoUC.gif') }}" alt=""></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil <span class="sr-only"></span></a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacter</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Connecter 
                    </a>
                    <div id="connect" class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="/register">Register</a>
                      <hr>
                      <a class="dropdown-item"  id="connect" href="/login">Login</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Inscription">Deposer Votre Candidature</a>
                  </li>
          </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    