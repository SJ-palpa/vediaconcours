<nav class="navbar navbar-inverse vediaNavbar navbar-fixed-top  ">
    <div class="container-fluid ">
        <div class="navbar-header ">
            <a class="navbar-brand" href="/">Vedia</a>
        </div>
        <ul class="nav navbar-nav vediaFontCouleur">
            <li class="{{Request::is('/') ? 'vediaCouleurGris' : ''}}"><a href="/" class="vediaFontCouleur">Home</a></li>
            <li class="{{Request::is('participant') ? 'vediaCouleurGris' : ''}}"><a href="/participant" class="vediaFontCouleur">Participant</a></li>
            <li class="{{Request::is('employe') ? 'vediaCouleurGris' : ''}}"><a href="/employe" class="vediaFontCouleur">Employé</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>