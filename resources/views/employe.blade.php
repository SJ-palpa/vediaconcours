@extends('layout.employeBase')

@section('contentEmploye')
            <div class="col-sm-8">
                <div class="col-sm-12">
                    <div class="well">
                        <h3> Module contenu du concours</h3>
                        <p>Text</p>
                        <p>réseau sociaux</p>
                        <p>video</p>
                        <p>image</p>
                    </div>

                    <div class="well  col-sm-5  ">
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
@endsection