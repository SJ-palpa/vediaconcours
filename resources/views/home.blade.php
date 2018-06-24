@extends('layout.baselayout')

@section('content')
<div id="myCarousel" class="carousel slide marginTopBase" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
            <div class="carousel-caption">
                <h3>Vedia</h3>
                <p>Concours Miss Kays</p>
            </div>
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
    <h3>Nos dernier concours</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Concours 1</p>
        </div>
        <div class="col-sm-4">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Concours 2</p>
        </div>
        <div class="col-sm-4">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Concours 3</p>
        </div>
        <div class="col-sm-12">
            <div class="well">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos explicabo molestias optio possimus rem. Commodi eos in ipsam laborum laudantium, magni necessitatibus nostrum odio perspiciatis quas quia quod repellendus tempora.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur corporis dicta, dolore, dolores earum et eveniet itaque laudantium, natus nobis officia quas similique ut veniam voluptates. Ab aut fuga nulla?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda commodi cum, distinctio dolorem doloremque dolorum error est expedita facere impedit itaque natus nobis nulla quasi quo sapiente soluta voluptas.</p>
            </div>
        </div>
    </div>
</div><br>
@endsection