<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
        <title>Sistema de Login</title>
        <style>
            #alerta, #caixaRegistro, #caixaSenha{
                display: none;
            }
        </style>
    </head>
    <body class="bg-dark">
        <main class="container mt-4">
            <!-- alerta-->
            <section class="row">
                <div class="col-lg-4 offset-lg-4" 
                     id="alerta">
                    <div class="alert alert-success text-center">
                        <strong id="resultado">
                            Olá Maravilhoso Mundo Bootstrap
                        </strong>
                    </div>
                </div>
            </section>
            <!-- formulario de Login -->
            <section class="row">
                <div class="col-lg-4 offset-lg-4 bg-light rounded" 
                     id="caixaLogin">
                    <h2 class="text-center mt-2">
                        Entrada
                    </h2>
                    <form action="#" method="post" role="form"
                          class="p-2" id="formLogin">
                        <div class="form-group">
                            <input type="text" name="nomeUsuario"
                                   class="form-control"
                                   placeholder="Nome do Usuário"
                                   required minlength="5">
                        </div>
                        <div class="form-group">
                            <input type="password" 
                                   name="senhaUsuario"
                                   class="form-control"
                                   placeholder="Senha"
                                   required minlength="6">
                        </div>
                        <div class="form-group mt-5">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       name="lembrar"
                                       id="checkLembrar"
                                       class="custom-control-input">
                                <label for="checkLembrar"
                                       class="custom-control-label">
                                    Lembrar de mim
                                </label>
                                <a href="#" id="btnEsqueci" class="float-right">
                                    Esqueci a senha
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit"
                                   name="btnEntrar"
                                   id="btnEntrar"
                                   value="--ENTRAR--"
                                   class="btn btn-primary btn-block">
                        </div>
                        <div class="form-group">
                            <p> Novo usuário?
                                <a href="#" id="btnRegistrar">
                                    Registrar-se aqui
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
            <br>
            <!-- Formulário de registro de novo usuario -->
            <section class="row">
                <div class="col-lg-4 offset-lg-4 bg-light rounded"
                     id="caixaRegistro">
                    <h2 class="text-center mt-2">Registrar-se</h2>
                    <form action="#" method="post" role="form" class="p-2" id="formRegistro">
                        <!--- Campo nome completo -->
                        <div class="form-group">
                            <input type="text" name="nomeCompleto" 
                                   class="form-control"
                                   placeholder="Nome completo" required
                                   minlength="6">
                        </div>
                        <!--- Campo nome Usuário -->
                        <div class="form-group">
                            <input type="text" name="nomeUsuario"
                                   class="form-control"
                                   placeholder="Nome do Usuário" required
                                   minlength="6">
                        </div>
                        <!-- Campo Email-->
                        <div class="form-group">
                            <input type="email" name="emailUsuario"
                                   class="form-control"
                                   placeholder="E-mail" required>              
                        </div>
                        <!--- Campo senha -->
                        <div class="form-group">
                            <input type="password" id="senhaUsuario"
                                   class="form-control"
                                   placeholder="Senha" required
                                   minlength="6">           
                        </div>
                        <!--- Campo confirmação de Senha -->
                        <div class="form-group">
                            <input type="password" 
                                   id="senhaUsuarioConfirmar"
                                   name="senhaUsuarioConfirmar"
                                   class="form-control"
                                   placeholder="Confirmar Senha" required
                                   minlength="6"> 
                        </div>
                        <!--- Checkbox de Aceite os termos -->
                        <div class="form-group mt-5">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" 
                                       name="concordar"
                                       class="custom-control-input"
                                       id="checkConcordar">
                                <label for="checkConcordar" 
                                       class="custom-control-label">
                                    Eu concordo  com os
                                    <a href="#">termos e condições</a>          
                                </label>
                            </div>
                        </div>
                        <!--- Botão Enviar -->
                        <div class="form-group">
                            <input type="submit"
                                   name="btnRegistroUsuario"
                                   id="btnRegistroUsuario"
                                   value="-->REGISTRAR<-- "
                                   class="btn btn-primary btn-block"             
                        </div>
                        <!-- Já Registrado -->
                        <div class="form-group">
                            <p class="text-center">
                                Já Registrado?
                                <a href="#" id="btnEntrarRegistrado">
                                    Entrar aqui
                                </a>
                        </div>
                    </form>
                </div>
            </section>
            <br>
            <!-- Formulário de Recuperação de Senha -->
            <section class="row">
                <div class="col-lg-4 offset-lg-4 bg-light rounded"
                     id="caixaSenha">
                    <h2 class="text-center mt-2">
                        Gerar nova senha
                    </h2>
                    <form action="#" method="post" role="form"
                          class="p-2"
                          id="formSenha">
                        <div class="form-group">
                            <small class="text-muted">
                                Para gerar nova senha, digite seu e-mail para receber as instruções
                            </small>
                        </div>
                        <div class="form-group">
                            <input type="email" name="emailGerarSenha"
                                   class="form-control"
                                   placeholder="E-mail" required="">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnGerar" 
                                   id="btnGerar"
                                   value="--GERAR--"
                                   class="btn btn-primary btn-block">
                        </div>
                        <div class="form-group float-right">
                            <a href="#" id="btnVoltar">
                                Voltar
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script>
            //$(document).ready(function(){});
            //jQuery
            //Clicar para ir alterar senha
            $(function () {
                $("#btnEsqueci").click(function(){
                  $("#caixaLogin").hide();
                    $("#caixaSenha").show();
            });
            });
            //Botao para voltar pra tela login
            $(function () {
            $("#btnVoltar").click(function(){
                  $("#caixaLogin").show();
                  $("#caixaSenha").hide();   
            });
             });
             //botao para registrar-se
             $(function () {
            $("#btnRegistrar").click(function(){
                  $("#caixaRegistro").show();
                  $("#caixaLogin").hide();   
            });
             });
             
             //Votlar Tela login
             $(function () {
            $("#btnEntrarRegistrado").click(function(){
                  $("#caixaRegistro").hide();
                  $("#caixaLogin").show();
            });
  
             });
             // just for the demos, avoids form submit
                    jQuery.validator.setDefaults({
                      debug: false,
                      success: "valid"
                    });
            $("#formLogin").validate();
            $("#formSenha").validate();
            $("#formRegistro").validate({
                rules:{
                    senhaUsuarioConfirmar: {
                        equalTo: "#senhaUsuario"
                    }
                }
            });
            
            $("#btnRegistroUsuario").click(
            function(e){
                if(document.querySelector("#formRegistro").checkValidity()){
                e.preventDefault();
                $.ajax({
                    url: 'recebe.php',
                    method: 'post', 
                    data: $('#formRegistro').serialize()+'&action=registro',
                    success: function(resposta){
                        $('#alerta').show();
                        $('#resultado').html(resposta);
                    }
                });
            }
            return true;
        });
    
    
    $("#btnEntrar").click(
            function(e){
                if(document.querySelector("#formRegistro").checkValidity()){
                e.preventDefault();
                $.ajax({
                    url: 'recebe.php',
                    method: 'post', 
                    data: $('#formRegistro').serialize()+'&action=entrar',
                    success: function(resposta){
                        $('#alerta').show();
                        $('#resultado').html(resposta);
                    }
                });
            }
            return true;
            });
    
    $("#btnGerar").click(
            function(e){
                if(document.querySelector("#formSenha").checkValidity()){
                e.preventDefault();
                $.ajax({
                    url: 'recebe.php',
                    method: 'post', 
                    data: $('#formSenha').serialize()+'&action=gerar',
                    success: function(resposta){
                        $('#alerta').show();
                        $('#resultado').html(resposta);
                    }
                });
            }
            return true;
        });
            
              /*
* Translated default messages for the jQuery validation plugin.
* Locale: PT_BR
*/
jQuery.extend(jQuery.validator.messages, {
    required: "Este campo &eacute; obrigatório.",
    remote: "Por favor, corrija este campo.",
    email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
    url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
    date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
    dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
    number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
    digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
    creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
    equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
    accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
    maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
    minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
    range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
    max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
    min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
});
        </script>
    </body>
</html>