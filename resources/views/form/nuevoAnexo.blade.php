@extends('layouts.front')

@section('content')

    @if(session()->has('msj'))
        <div class="alert alert-success" role="alert">{{session('msj')}}</div>
    @endif
    @if(session()->has('errormsj'))

        <div class="alert alert-danger" role="alert">Error Al Guardar Dato</div>

    @endif


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">

                        <div class="ibox-title">
                            <h5>Nuevo Anexo</h5>

                        </div>
                        <div class="ibox-content">
                        <form class="form-horizontal" action="{{url('Anexos')}}" method="POST" role="form" >
                        {{csrf_field()}} <!--codigo seguridad-->
                            <!--/*funcionario estamento box sector anexo */-->
                            <div class="form-group"><label class="col-lg-2 control-label">Funcionario</label>

                                <div class="col-lg-10"><input type="text" placeholder="Funcionario" class="form-control" for='funcionario' name="funcionario">
                                    @if($errors->has('funcionario'))
                                        <span style="color: red">{{$errors->first('funcionario')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Estamento</label>

                                <div class="col-lg-10"><input type="text" placeholder="Estamento" class="form-control" for='estamento' name="estamento">
                                    @if($errors->has('estamento'))
                                        <span style="color: red">{{$errors->first('estamento')}}</span>
                                    @endif</div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Box</label>

                                <div class="col-lg-10"><input type="text" placeholder="Box" class="form-control" for='box' name="box">
                                    @if($errors->has('box'))
                                        <span style="color: red">{{$errors->first('box')}}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Sector</label>

                                <div class="col-lg-10"><input type="text" placeholder="Sector" class="form-control" for='sector' name="sector">
                                    @if($errors->has('sector'))
                                        <span style="color: red">{{$errors->first('sector')}}</span>
                                    @endif</div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">Anexo</label>

                                <div class="col-lg-10"><input type="text" placeholder="Anexo" class="form-control" for='anexo' name="anexo">
                                    @if($errors->has('anexo'))
                                        <span style="color: red">{{$errors->first('anexo')}}</span>
                                    @endif</div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                                </div>
                            </div>
                         </form>
                        </div>
                        </div>


    </div>
</div>
    </div>
</div>

@stop
