/**
 * Created by leandro on 31/10/16.
 */
var app = app || {};
if (jQuery)
{
    jQuery(function($)
    {
        function pupulate(value) {
            $('#tb-contatos tbody').append(
                $('<tr id="line_contato_'+value.id+'" ></tr>').append(
                    $('<td></td>').html(value.nome),
                    $('<td></td>').html(value.endereco),
                    $('<td></td>').html(value.telefone),
                    $('<td></td>').html(value.celular),
                    $('<td></td>').html(value.email),
                    $('<td></td>').append(
                        $('<p data-placement="top" data-toggle="tooltip" title="Edit"></p>').append(
                            $('<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"   onclick="app.contatos.fill_edit('+value.id+')"></button>').append(
                                $('<span class="glyphicon glyphicon-pencil"></span>')
                            )
                        )
                    ),
                    $('<td></td>').append(
                        $('<p data-placement="top" data-toggle="tooltip" title="Delete"></p>').append(
                            $('<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"  data-target="#delete" onclick="app.contatos.fill_delete('+value.id+')"></button>').append(
                                $('<span class="glyphicon glyphicon-trash"></span>')
                            )
                        )
                    )
                )
            );
        }

        $.fn.serializeObject = function()
        {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name] !== undefined) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };


        $(document).ready(function() {
            console.log('App Loaded');
            app.contatos = {
                list:function(){
                    $.ajax({
                        url: api_contatos.url,
                        type: 'get',
                        dataType: 'JSON',
                        success: function( result ) {
                            if(result != undefined && result != 0){
                                $('#tb-contatos tbody').html('');
                                $.each(result, function(key, value){
                                    pupulate(value);
                                });
                            }
                        },
                        error: function(jqXHR, textStatus){
                            console.log('Erro ao processar ajax: ' + textStatus);
                        }
                    });
                },
                insert:function(){
                    var _form = $('#frm-add-contato').serializeObject();
                    $.ajax({
                        url: api_contatos.url,
                        type: 'post',
                        data: _form,
                        dataType: 'JSON',
                        success: function( result ) {
                            if(result != undefined && result != 0) {
                                    pupulate(result);
                            }
                            $('#insert').modal('toggle');
                        },
                        statusCode:{
                            400: function() {
                                 alert('Não foi possível inserir um cotato, verifique os campos e tente novamente');
                                $('#insert').modal('toggle');
                            }
                        },
                        error: function(jqXHR, textStatus){
                            console.log('Erro ao processar ajax: ' + textStatus);
                        }
                    });
                },
                update:function(){
                    var _form = $('#frm-edit-contato').serializeObject();
                    console.log( $('#id_contato').val());
                    var _id = $('#id_contato').val();
                    if(!_id) return;
                    $.ajax({
                        url: api_contatos.url + '/' + _id,
                        type: 'put',
                        data: _form,
                        dataType: 'JSON',
                        success: function() {
                            alert('contato atualizado com sucesso!');
                            $('#edit').modal('toggle');
                            app.contatos.list();
                        },
                        statusCode:{
                            400: function() {
                                alert('Não foi possível atualizar o cotato, verifique os campos e tente novamente');
                                $('#insert').modal('toggle');
                            }
                        },
                        error: function(jqXHR, textStatus){
                            console.log('Erro ao processar ajax: ' + textStatus);
                        }
                    })
                },
                delete:function () {
                    var _id =  $('#del_contato').val();
                    if(!_id) return;
                    $.ajax({
                        async   : false,
                        url: api_contatos.url+'/'+_id,
                        type: 'delete',
                        success: function( ) {
                            alert('Contato deletado com sucesso');
                            $('#line_contato_'+_id).remove();
                            $('#delete').modal('toggle');
                        },
                        statusCode:{
                            400: function() {
                                alert('Não foi possível deletar o cotato, contacte o administrador');
                                $('#insert').modal('toggle');
                            }
                        },
                        error: function(jqXHR, textStatus){
                            console.log('Erro ao processar ajax: ' + textStatus);
                        }
                    });
                },
                find:(function (_id) {
                    if(_id == undefined) return;
                    var output = {};
                     $.ajax({
                        async   : false,
                        url: api_contatos.url + '/' + _id,
                        type: 'get',
                        dataType: 'JSON',
                        success: function( result ) {
                            output = result;
                        },
                        statusCode:{
                            400: function() {
                                console.log('nenhum contato encontrado');
                            }
                        },
                        error: function(jqXHR, textStatus){
                            console.log('Erro ao processar ajax: ' + textStatus);
                        }
                    });
                    return output;
                }),
                fill_edit:function (_id) {
                   var contato =  app.contatos.find(_id);
                   if(contato != undefined){
                       $('#id_contato').val(contato.id);
                       $('#nome').val(contato.nome);
                       $('#endereco').val(contato.endereco);
                       $('#telefone').val(contato.telefone);
                       $('#celular').val(contato.celular);
                       $('#email').val(contato.email);
                       $('#edit').modal('toggle');
                   }
                },
                fill_delete: function(_id){
                    $('#del_contato').val(_id);
                }
            }
        });
    });
}