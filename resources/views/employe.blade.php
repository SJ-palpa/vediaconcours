@extends('layout.baselayout')

@section('content')
    <div class="container-fluid mt2">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <h4>Gestion</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#section1">Gallerie publicité</a></li>
                    <li><a href="#section2">Gestion publicité</a></li>
                    <li class="active"><a href="#section3">Création publicité</a></li>
                </ul><br>
            </div>

            <div class="col-sm-8">
                <div class="col-sm-12">
                    <div>
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <p>Concours 1</p>
                    </div>
                    <div class="well">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos explicabo molestias optio possimus rem. Commodi eos in ipsam laborum laudantium, magni necessitatibus nostrum odio perspiciatis quas quia quod repellendus tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur corporis dicta, dolore, dolores earum et eveniet itaque laudantium, natus nobis officia quas similique ut veniam voluptates. Ab aut fuga nulla?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda commodi cum, distinctio dolorem doloremque dolorum error est expedita facere impedit itaque natus nobis nulla quasi quo sapiente soluta voluptas.</p>
                    </div>
                    <div class="well mr2 ml2 col-sm-4">
                        <p>composant 1</p>
                    </div>
                    <div class="well mr2 ml2 col-sm-4">
                        <p>composant 1</p>
                    </div>
                    <div class="well mr2 ml2 col-sm-4">
                        <p>composant 1</p>
                    </div>
                    <div class="well mr2 ml2 col-sm-4">
                        <p>composant 1</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 ">
                <div class="well">
                    <p>composant 1</p>
                </div>
                <div class="well">
                    <p>composant 2</p>
                </div>
                <div class="well">
                    <p>composant 3</p>
                </div>
            </div>
        </div>
    </div>
@endsection