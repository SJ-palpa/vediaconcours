@extends('layout.baselayout')

@section('content')
    <div class="container-fluid mt2 marginTopBase">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <h4>Gestion</h4>
                <ul class="nav nav-pills nav-stacked ">
                    <li><a href="employeGestConcours" class="{{Request::is('employeGestConcours') ? 'vediaCouleurRouge vediaFontCouleurWhite' : 'vediaFontCouleurRed'}}">Gestion concours</a></li>
                    <li><a href="employeGestParti" class="{{Request::is('employeGestParti') ? 'vediaCouleurRouge vediaFontCouleurWhite' : 'vediaFontCouleurRed'}}">Gestion participants</a></li>
                    <li ><a href="employeCreaConcours" class="{{Request::is('employeCreaConcours') ? 'vediaCouleurRouge vediaFontCouleurWhite' : 'vediaFontCouleurRed'}}">Création concours</a></li>
                </ul><br>
            </div>
            @if(Request::is('employeCreaConcours'))
                @yield('contentEmployeCreaConcours')
            @elseif(Request::is('employeGestParti'))
                @yield('contentEmployeGestParti')
            @elseif(Request::is('employeGestConcours'))
                @yield('contentEmployeGestConcours')
            @endif
        </div>
    </div>
@endsection