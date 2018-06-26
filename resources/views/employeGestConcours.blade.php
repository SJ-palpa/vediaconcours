@extends('layout.employeBase')
@section('contentEmployeGestConcours')
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#cloturModal">cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" data-target="#supprModal">supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 1</p>
    </div>






    <!--- cloturer concours -->
    <div class="modal fade" id="cloturModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Annuler</button>
                    <button  type="button" class="btn btnVedia suppr" name="suppr"  >Cloturer</button>
                </div>
            </div>
        </div>
    </div>

    <!--- suppression -->
    <div class="modal fade" id="supprModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Annuler</button>
                    <button  type="button" class="btn btnVedia suppr" name="suppr"  >Supprimer</button>
                </div>
            </div>
        </div>
    </div>
































    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 2</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 3</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 4</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2  mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 5</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 6</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 7</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 8</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 9</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 10</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 8</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 11</p>
    </div>
    <div class="list-group-item listeactufond participantBorderLeft col-sm-8 col-sm-offset-2 mb2" >
        <div class="btn-group pull-right" role="group">
            <button type="button" class="btn btnVedia" data-toggle="modal" >Aperçu</button>
            <button  type="button" class="btn btnVedia " data-toggle="modal" data-target="#modifAcutaliteModal">modifier</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >cloturer</button>
            <button type="button" class="btn btnVedia " data-toggle="modal" >supprimer</button>
        </div>
        <p class="listetitreactu" >Concours 12</p>
    </div>
@endsection