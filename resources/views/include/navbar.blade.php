<nav class="navbar navbar-inverse vediaNavbar navbar-fixed-top  ">
    <div class="container-fluid ">
        <div class="navbar-header ">
            <a class="navbar-brand" href="/participant">Vedia</a>
        </div>
        <ul class="nav navbar-nav vediaFontCouleur">
            <li class="{{Request::is('participant') ? 'vediaCouleurGris' : ''}}"><a href="/participant" class="vediaFontCouleur">Participant</a></li>
            <li class="{{Request::is('employe*') ? 'vediaCouleurGris' : ''}}"><a href="/employeCreaConcours" class="vediaFontCouleur">Employé</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a onclick="document.getElementById('id01').style.display='block'"href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <form class="w3-container" action="/action_page.php">
                    <div class="w3-section">
                        <label><b>Utilisateur</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Entrer utilisateur" name="usrname" required>
                        <label><b>Mot de passe</b></label>
                        <input class="w3-input w3-border" type="password" placeholder="Entrer mot de passe" name="psw" required>
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
                        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Se rappeler
                    </div>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Annuler</button>
                    <span class="w3-right w3-padding w3-hide-small"><a href="#">mot de passe</a> oublié ?</span>
                </div>
            </div>
        </div>
    </div>
</nav>