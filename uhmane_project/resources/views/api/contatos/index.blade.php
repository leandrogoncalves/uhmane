@extends('template')

@section('title')
    Contatos
@stop


@section('content')
    <h1>Contatos</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h4>Lista de contatos cadastrados</h4>
                <br>
                <button class="btn icon-btn btn-success"  data-title="Insert" data-toggle="modal" data-target="#insert">
                    <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span> Novo Contato
                </button>
                <br>
                <br>
                <div class="table-responsive">
                    <table id="tb-contatos" class="table table-bordred table-striped">
                        <thead>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>

                        <tbody>
                        </tbody>

                    </table>

                    <div class="clearfix"></div>
                    {{----}}
                    {{--<ul class="pagination pull-right">--}}
                    {{--<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>--}}
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">5</a></li>--}}
                    {{--<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>--}}
                    {{--</ul>--}}

                </div>

            </div>
        </div>
    </div>


{{--MODAL DE INCLUSÃO--}}
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="insert" aria-hidden="true">
        <div class="modal-dialog" style="z-index: 99999;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Inserir contato</h4>
                </div>
                <form id="frm-add-contato">
                    <input type="hidden" id="id_contato" name="id_contato">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Nome" name="nome"  required>
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Endereço" name="endereco" >
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Telefone" name="telefone" >
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Celular" name="celular" >
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="email" placeholder="Email" name="email" >
                        </div>
                    </div>
                </form>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;" onclick="app.contatos.insert()">
                        <span class="glyphicon glyphicon-ok-sign"></span><span id="btn-update">Atualizar</span>
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    {{--MODAL DE ATUALIZAÇÃO --}}
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog" style="z-index: 99999;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Editar contato</h4>
                </div>
                <form id="frm-edit-contato">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Nome" name="nome" id="nome" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Endereço" name="endereco" id="endereco">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Telefone" name="telefone" id="telefone">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Celular" name="celular" id="celular">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="email" placeholder="Email" name="email" id="email">
                        </div>
                    </div>
                </form>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;" onclick="app.contatos.update()">
                        <span class="glyphicon glyphicon-ok-sign"></span><span id="btn-update">Atualizar</span>
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


{{--MODAL DE DELEÇÃO--}}
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog" style="z-index: 99999;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Apagar contato</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="del_conato" id="del_contato">
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>
                        Tem certeza que deseja deletar este contato ?
                    </div>

                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" onclick="app.contatos.delete()">
                        <span class="glyphicon glyphicon-ok-sign"></span> sim
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Não
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@stop
