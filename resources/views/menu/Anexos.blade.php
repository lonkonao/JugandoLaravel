@extends('layouts.front')

@section('content')
    @if(session()->has('msj'))
        <div class="alert alert-success" role="alert">{{session('msj')}}</div>
    @endif
    @if(session()->has('errormsj'))

        <div class="alert alert-danger" role="alert">Error Al Guardar Dato</div>

    @endif
 <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        
        <div class="col-lg-12">
            @if (count($anexos) >0)

            <div class="table-hover">
                <table id="dataAnexos" class="table table-striped table-bordered table-hover dataAnexos" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            
                            <th>Funcionario</th>
                            <th>Estamento</th>
                            <th>Box.</th>
                            <th>Sector</th>
                            <th>Anexo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anexos as $anexo)
                        <tr>
                            
                            <td>{{$anexo->funcionario}}</td>
                            <td>{{$anexo->estamento}}</td>
                            <td>{{$anexo->box}}</td>
                            <td>{{$anexo->sector}}</td>
                            <td>{{$anexo->anexo}}</td>
                            <td>
                                <a href="Anexos/{{$anexo ->id}}/edit  " class="btn btn-warning">Modificar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            
                            <th>Funcionario</th>
                            <th>Estamento</th>
                            <th>Box</th>
                            <th>Sector</th>
                            <th>Anexo</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>

                @endif
            </div>
        </div>
    </div>
</div>
<script src="{{URL::asset('js/jquery-2.1.1.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{URL::asset('js/inspinia.js')}}"></script>
        <script src="{{URL::asset('js/plugins/pace/pace.min.js')}}"></script>

        <!-- Data Tables -->
        <script src="{{URL::asset('js/plugins/dataTables/jquery.dataTables.js')}}"></script>
        <script src="{{URL::asset('js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
        <script src="{{URL::asset('js/plugins/dataTables/dataTables.responsive.js')}}"></script>
        <script src="{{URL::asset('js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#dataAnexos').DataTable({
            
        });



    });
</script>
@stop
