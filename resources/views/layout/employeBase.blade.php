@extends('layout.baselayout')

@section('content')
    <div class="container-fluid mt2 marginTopBase">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <h4>Gestion</h4>
                <ul class="nav nav-pills nav-stacked ">
                    <li><a href="#section1" class="vediaFontCouleurRed">Gallerie concours</a></li>
                    <li><a href="#section2" class="vediaFontCouleurRed">Gestion concours</a></li>
                    <li><a href="#section2" class="vediaFontCouleurRed">Gestion participant</a></li>
                    <li ><a href="#section3" class="vediaCouleurRouge vediaFontCouleurWhite">Création concours</a></li>
                </ul><br>
            </div>
            @yield('contentEmploye')
        </div>
    </div>
@endsection