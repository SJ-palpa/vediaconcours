@extends('layout.employeBase')
@section('contentEmployeGestParti')
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal"
                    onclick="document.getElementById('modalApercu').style.display='block'" href="#">Appercu
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 1</p>
    </div>
    <div id="modalApercu" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container vediaCouleurRouge vediaFontCouleurWhite">
        <span onclick="document.getElementById('modalApercu').style.display='none'"
              class="w3-button vediaCouleurRouge w3-xlarge w3-display-topright">&times;</span>
                <h2>Personne 1</h2>
            </header>

            <div class="w3-bar w3-border-bottom">
                <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Resume')">Résumé</button>
                <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Statistique')">Statistique</button>
            </div>

            <div id="Resume" class="w3-container city text-center">
                <img src="images/modal_img_femme.png" style="width:30%" class="w3-circle w3-margin-top" alt="Image">
                <h1>Personne 1</h1>
                <p><u>nom :</u> Personne 1</p>
                <p><u>pseudo :</u> pers1</p>
                <p><u>adresse :</u> Plateau-de-Champel 1206 Genève</p>
            </div>


            <div id="Statistique" class="w3-container city">
                <div class="wrapper">
                    <div class="pie-charts">
                        <div class="pieID--micro-skills pie-chart--wrapper">
                            <h2>Participation concours</h2>
                            <div class="pie-chart">
                                <div class="pie-chart__pie"></div>
                                <ul class="pie-chart__legend">
                                    <li><em>total</em><span>40</span></li>
                                    <li><em>participation</em><span>25</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pieID--categories pie-chart--wrapper">
                            <h2>taux de réussite</h2>
                            <div class="pie-chart">
                                <div class="pie-chart__pie"></div>
                                <ul class="pie-chart__legend">
                                    <li><em>réponse juste</em><span>10</span></li>
                                    <li><em>réponse fausse</em><span>30</span></li>
                                    <li><em>concours gagné</em><span>1</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-right w3-white w3-border"
                        onclick="document.getElementById('modalApercu').style.display='none'">Fermer
                </button>
            </div>
        </div>
    </div>


    <script>
        // Pour le modal
        document.getElementsByClassName("tablink")[0].click();

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].classList.remove("w3-light-grey");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.classList.add("w3-light-grey");
        }

        // pour le pie chart

        function sliceSize(dataNum, dataTotal) {
            return (dataNum / dataTotal) * 360;
        }

        function addSlice(id, sliceSize, pieElement, offset, sliceID, color) {
            $(pieElement).append("<div class='slice "+ sliceID + "'><span></span></div>");
            var offset = offset - 1;
            var sizeRotation = -179 + sliceSize;

            $(id + " ." + sliceID).css({
                "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
            });

            $(id + " ." + sliceID + " span").css({
                "transform"       : "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
                "background-color": color
            });
        }

        function iterateSlices(id, sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var
                maxSize = 179,
                sliceID = "s" + dataCount + "-" + sliceCount;

            if( sliceSize <= maxSize ) {
                addSlice(id, sliceSize, pieElement, offset, sliceID, color);
            } else {
                addSlice(id, maxSize, pieElement, offset, sliceID, color);
                iterateSlices(id, sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
            }
        }

        function createPie(id) {
            var
                listData      = [],
                listTotal     = 0,
                offset        = 0,
                i             = 0,
                pieElement    = id + " .pie-chart__pie"
            dataElement   = id + " .pie-chart__legend"

            color         = [
                "cornflowerblue",
                "olivedrab",
                "orange",
                "tomato",
                "crimson",
                "purple",
                "turquoise",
                "forestgreen",
                "navy"
            ];

            color = shuffle( color );

            $(dataElement+" span").each(function() {
                listData.push(Number($(this).html()));
            });

            for(i = 0; i < listData.length; i++) {
                listTotal += listData[i];
            }

            for(i=0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(id, size, pieElement, offset, i, 0, color[i]);
                $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
                offset += size;
            }
        }

        function shuffle(a) {
            var j, x, i;
            for (i = a.length; i; i--) {
                j = Math.floor(Math.random() * i);
                x = a[i - 1];
                a[i - 1] = a[j];
                a[j] = x;
            }

            return a;
        }

        function createPieCharts() {
            createPie('.pieID--micro-skills' );
            createPie('.pieID--categories' );
        }

        createPieCharts();
    </script>























    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 2</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 3</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 4</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2  mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 5</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 6</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 7</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 8</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 9</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 10</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 8</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 11</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2">
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal">Appercu</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">
                modifier
            </button>
            <button type="button" class="btn btnVedia " data-toggle="modal">supprimer</button>
        </div>
        <p class="listetitreactu">Personne 12</p>
    </div>
@endsection