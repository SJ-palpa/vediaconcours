@extends('layout.employeBase')

@section('contentEmployeCreaConcours')
            <div class="col-sm-8">
                <div class="col-sm-12">
                    <div class="well">
                        <h3> Module contenu</h3>
                        <p>Text</p>
                        <p>réseau sociaux</p>
                        <p>video</p>
                        <p>image</p>
                    </div>

                    <div class="well  col-sm-5  ">
                        <h3> Module option multiple</h3>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Option 1</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Option 2</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Option 3</label>
                        </div>
                    </div>
                    <div class="well  col-sm-5 col-sm-offset-2">
                        <h3> Module option simple</h3>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Option 1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Option 2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Option 3</label>
                        </div>
                    </div>
                    <div class="well  col-sm-5 ">
                        <h3> Module photo</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default text-left">
                                    <div class="panel-body">
                                        <img src="https://images.unsplash.com/photo-1529570286810-e149c4bae142?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=877eb3e5f185c7c1fdc7cb23ec305dcd&auto=format&fit=crop&w=1654&q=80" class="img-responsive" style="width:100%; margin-bottom:15px" alt="Image">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="well  col-sm-5 col-sm-offset-2">
                        <h3> Module option video</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default text-left">
                                    <div class="panel-body">
                                        <img src="https://englishtap.com/biscuits-12q/images/buttons/video.jpg" class="img-responsive" style="width:100%; margin-bottom:15px" alt="Image">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 ">
                <h3><u> Module :</u></h3>
                <div class="well">
                    <p><b>Module contenu</b></p>
                </div>
                <div class="well">
                    <p><b> Module option simple</b></p>
                </div>
                <div class="well">
                    <p><b> Module photo</b></p>
                </div>
                <div class="well">
                    <p><b> Module video</b></p>
                </div>
            </div>
            <div class="form-group col-sm-8 col-sm-offset-2">
                <span><label class="mr2">Personne 1</label><i class="glyphicon glyphicon-user green"></i></span>
                <textarea class="form-control" rows="2" id="comment"></textarea>
                <button type="button" class="btn btn-primary btn-sm col-sm-offset-11 mt2 ">Poster</button>
            </div>


            <div class="form-group col-sm-8 col-sm-offset-2">
                <div class="input-group">
                    <span class="input-group-addon"><label class="mr2">Personne 1</label><i class="glyphicon glyphicon-user green"></i></span>
                    <li class="list-group-item  ">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Asperiores assumenda atque culpa cumque delectus
                        deleniti expedita, natus necessitatibus non nostrum porro provident quaerat,
                        quasi quo repellat repellendus temporibus totam veniam?</li>
                </div>
            </div>
            <button type="button" class="btn btn-default btn-sm col-sm-offset-9 mb2">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                <span class="badgeComm">9</span>
            </button>


            <div class="form-group col-sm-5 col-sm-offset-5">
                <div class="input-group">
                    <span class="input-group-addon"><label class="mr2">Personne 2</label><i class="glyphicon glyphicon-user blue"></i></span>
                    <li class="list-group-item">assumenda atque culpa cumque delectus
                        deleniti expedita, natus necessitatibus</li>
                </div>
            </div>
            <button type="button" class="btn btn-default btn-sm col-sm-offset-9 mb2">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                <span class="badgeComm">2</span>
            </button>


            <div class="form-group col-sm-8 col-sm-offset-2">
                <div class="input-group">
                    <span class="input-group-addon"><label class="mr2">Personne 3</label><i class="glyphicon glyphicon-user yellow"></i></span>
                    <li class="list-group-item"> assumenda atque culpa cumque delectus
                        deleniti expedita, natus necessitatibus non nostrum porro provident quaerat,
                        quasi quo repellat repellendus temporibus totam veniam? </li>
                </div>
            </div>
            <button type="button" class="btn btn-default btn-sm col-sm-offset-9 mb2">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                <span class="badgeComm ">4</span>
            </button>
@endsection