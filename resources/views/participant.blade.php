@extends('layout.baselayout')

@section('content')
    <div class="marginTopBase">
        <h1 class="text-center">Concours de pronostics pour la CM :</h1>
        <h1 class="text-center">Suisse vs. Serbie</h1>
        </br>
        <div class="container-fluid mb2">
            <div class="col-sm-8 col-sm-offset-2">

                <img src="{{asset('images/vediaPhoto1.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
                </br>
                <p>Lors de son entrée dans le championnat dimanche soir, la déterminée Nati a fait 1:1 contre le Brésil!
                    Déjà la Suisse tout entière attend avec impatience le prochain match de vendredi !
                    Vous pouvez à nouveau tenter votre chance de gagner de super Fan-Packages spécial CM pour le match
                    face à la Serbie !
                    Postez vos pronostics du score final du match en commentaire sur le blog et avec un peu de chance,
                    remportez la mise.*
                </p>
                <p>
                    N’oubliez pas, le principe du jeu reste le même : Plus vous participez, plus le nombre de prix à
                    gagner augmente !
                    Jusqu’à 100 commentaires, 1 Fan-Package S, 1 Fan-Package M et 1 Fan-Package L seront tirés au sort
                    parmi les bons pronostics.
                    À partir de 101 contributions, 2 Fan-Packages par taille seront tirés au sort, et à partir de 501
                    posts, il y aura 3 Fan-Packages par taille à gagner.
                    Nous nous réjouissons de voir vos prévisions !
                </p>
                </br>
            </div>

            <div class="col-sm-2 col-sm-offset-3 ">
                <img src="{{asset('images/vediaPhoto2.jpg')}}" class="img-responsive" style="width:100%"
                     alt="Image">
                <p class=" text-center">Fan-Package «S»</p>
            </div>
            <div class="col-sm-2 ">
                <img src="{{asset('images/vediaPhoto3.jpg')}}" class="img-responsive" style="width:100%"
                     alt="Image">
                <p class=" text-center">Fan-Package «M»</p>
            </div>
            <div class="col-sm-2 ">
                <img src="{{asset('images/vediaPhoto4.jpg')}}" class="img-responsive" style="width:100%"
                     alt="Image">
                <p class=" text-center">Fan-Package «L»</p>
            </div>
            </br>
            <div class="col-sm-8 col-sm-offset-2">
                <p>Pour le dernier jeu de la Suisse, la prédiction de Baïko s’était tout de même révélée à moitié juste
                    !
                    Nous avons une fois encore interrogé notre oracle VEDIA pour le match à venir ce vendredi, afin
                    qu’il nous révèle qui sera le grand gagnant :
                </p>
                </br>
                <div class="media">
                    <div class="media-body text-center">
                        <?php $embed = Embed::make('https://www.youtube.com/watch?v=XSu3IRu1Qrc')->parseUrl() ?>
                        @if ($embed)
                            <?php $embed->setAttribute(['width' => 800]);
                            // Print html: '<iframe width="600" height="338" src="//www.youtube.com/embed/uifYHNyH-jA" frameborder="0" allowfullscreen></iframe>'.
                            // Height will be set automatically based on provider width/height ratio.
                            // Height could be set explicitly via setAttr() method.
                            echo $embed->getHtml();?>
                        @endif
                    </div>
                </div>
                </br>
                <p>Nous avons aussi à nouveau rejoué en interne le match Suisse-Serbie au baby-foot !
                    Regardez notre petite vidéo et découvrez comment le jeu se déroulera selon notre pronostic.</p>
                </br>
                <div class="media">
                    <div class="media-body text-center">
                        <?php $embed = Embed::make('https://www.youtube.com/watch?v=qOsdwW7K8vA')->parseUrl() ?>
                        @if ($embed)
                            <?php $embed->setAttribute(['width' => 800]);
                            // Print html: '<iframe width="600" height="338" src="//www.youtube.com/embed/uifYHNyH-jA" frameborder="0" allowfullscreen></iframe>'.
                            // Height will be set automatically based on provider width/height ratio.
                            // Height could be set explicitly via setAttr() method.
                            echo $embed->getHtml();?>
                        @endif
                    </div>
                </div>
                </br>
                <p>*Postez votre pronostic en commentaire du blog au plus tard 15 minutes avant le coup d’envoi du match
                    le 22.06.2018.
                    Seul 1 commentaire par personne est autorisé.
                    Toute personne âgée de plus de 18 ans et résidant en Suisse ou au Liechtenstein peut participer.
                    Le prix ne peut être versé en espèces. Le gagnant sera informé personnellement par e-mail.
                    Sans retour de votre part dans les sept jours, par exemple suite à une non-livraison de l’e-mail,
                    les prix seront considérés comme perdus. Les collaborateurs de VEDIA SA ne peuvent pas participer au
                    concours.
                    Tout recours légal est exclu. En participant au concours, vous acceptez qu’en cas de gain votre nom
                    soit publié sur notre blog,
                    dans les newsletters, sur Facebook et sur Instagram.
                </p>
                </br>

                <div class="well container col-sm-12">
                    <h2 class="text-center"> Pronostic </h2>
                    </br>
                    <div class="dropdown col-sm-4 text-center">
                        <button class="btn btn-default dropdown-toggle vediaFontCouleurRed" type="button" data-toggle="dropdown">Suisse
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">0</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">11</a></li>
                            <li><a href="#">12</a></li>
                        </ul>
                    </div>
                    <p class="col-sm-4 text-center"><b>-</b></p>
                    <div class="dropdown col-sm-4 text-center">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Serbie
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">0</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">11</a></li>
                            <li><a href="#">12</a></li>
                        </ul>
                    </div>
                    </br>
                    <button type="button" class="btn vediaCouleurRouge vediaFontCouleurWhite btn-sm mt2 col-sm-offset-5 col-sm-2 text-center ">Valider</button>
                    </br>
                    </br>
                    </br>
                    <div class="col-sm-12">
                        <h4>Il reste encore tant de jour(s) pour voter : </h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped vediaCouleurRouge active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">

                            </div>
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width:20%">
                                10 jours
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>


                <div class="well container col-sm-12">
                    <h2 class="text-center"> Résultat </h2>
                    </br>
                    </br>
                    <div class="col-sm-4 text-center">
                        <button type="button" class="btn vediaCouleurRouge vediaFontCouleurWhite btn-danger">Suisse <span class="badge">2</span></button>
                    </div>
                    <p class="col-sm-4 text-center"><b>-</b></p>
                    <div class="col-sm-4 text-center">
                        <button type="button" class="btn vediaFontCouleurRed vediaFontCouleurWhite">Serbie <span class="badge">1</span></button>
                    </div>
                    </br>
                    </br>
                    <div class="well col-sm-6 col-sm-offset-3 text-center yellowGreenBackground vediaFontCouleurWhite">
                        Merci de votre participation et à bientôt pour un nouveau concours Vedia !
                    </div>
                </div>
                </br>
                <h2 class="text-center col-sm-12"> Commentaire </h2>
                </br>
            </div>



            <div class="form-group col-sm-8 col-sm-offset-2">
                <span><label class="mr2">Personne 1</label><i class="glyphicon glyphicon-user green"></i></span>
                <textarea class="form-control" rows="2" id="comment"></textarea>
                <button type="button" class="btn vediaCouleurRouge vediaFontCouleurWhite btn-sm col-sm-offset-11 mt2 ">Poster</button>
            </div>


            <div class="form-group col-sm-8 col-sm-offset-2">
                <div class="input-group">
                    <span class="input-group-addon"><label class="mr2">Personne 1</label><i
                                class="glyphicon glyphicon-user green"></i></span>
                    <li class="list-group-item  ">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Asperiores assumenda atque culpa cumque delectus
                        deleniti expedita, natus necessitatibus non nostrum porro provident quaerat,
                        quasi quo repellat repellendus temporibus totam veniam?
                    </li>
                </div>
            </div>

            <button type="button" class="btn btn-default btn-sm col-sm-offset-9 mb2">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                <span class="badgeComm">9</span>
            </button>


            <div class="form-group col-sm-5 col-sm-offset-5">
                <div class="input-group">
                    <span class="input-group-addon"><label class="mr2">Personne 2</label><i
                                class="glyphicon glyphicon-user blue"></i></span>
                    <li class="list-group-item">assumenda atque culpa cumque delectus
                        deleniti expedita, natus necessitatibus
                    </li>
                </div>
            </div>
            <button type="button" class="btn btn-default btn-sm col-sm-offset-9 mb2">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                <span class="badgeComm">2</span>
            </button>


            <div class="form-group col-sm-8 col-sm-offset-2">
                <div class="input-group">
                    <span class="input-group-addon"><label class="mr2">Personne 3</label><i
                                class="glyphicon glyphicon-user yellow"></i></span>
                    <li class="list-group-item"> assumenda atque culpa cumque delectus
                        deleniti expedita, natus necessitatibus non nostrum porro provident quaerat,
                        quasi quo repellat repellendus temporibus totam veniam?
                    </li>
                </div>
            </div>
            <button type="button" class="btn btn-default btn-sm col-sm-offset-9 mb2">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                <span class="badgeComm ">4</span>
            </button>
        </div>
    </div>
@endsection