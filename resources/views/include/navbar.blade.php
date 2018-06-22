<nav class="navbar navbar-inverse navbar-dark ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Vedia</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('participant') ? 'active' : ''}}"><a href="/participant">Participant</a></li>
            <li class="{{Request::is('employe') ? 'active' : ''}}"><a href="/employe">Employé</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>