<?php
session_start();
if(isset($_SESSION['nomeUsuario']))
    header("location:perfil.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSS jQuery Validate -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    
    <title>Sistema de Login</title>
    <style>
        #alerta,
        #caixaRegistro,
        #caixaSenha,
        #espera{
            display: none;
        }  
    </style>
  </head>
  <body class="bg-dark">
      <main class="container mt-4">
          <!-- Alerta -->
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
          
          <!--SPINNER de Espera--> 
          <div class="col-lg-4 offset-lg-4 text-center mb-4">
            <div class="spinner-border text-primary" 
                 role="status" id="espera">
                <span class="sr-only">Esperando...</span>
            </div>
          </div>
          
          <!-- Formulário de Login -->
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
                                 placeholder="Nome do usuário"
                                 required minlength="5"
                                 value="<?= 
                                    isset($_COOKIE['nomeUsuario'])?
                                        $_COOKIE['nomeUsuario']
                                        :"" ?>">
                      </div>
                      
                      <div class="form-group">
                          <input type="password" 
                                 name="senhaUsuario"
                                 class="form-control"
                                 placeholder="Senha"
                                 required minlength="6"
                                 value="<?=
                                     isset($_COOKIE['senhaUsuario'])?
                                           $_COOKIE['senhaUsuario']
                                           :"" ?>">
                      </div>
                      
                      <div class="form-group mt-5">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="lembrar"
                                     id="checkLembrar" 
                                     class="custom-control-input" 
                                     <?= 
                                      isset($_COOKIE['senhaUsuario'])?  
                                     'checked'
                                     :'' ?>>
                              
                              <label for="checkLembrar" 
                                     class="custom-control-label">
                                  Lembrar de mim.
                              </label>
                              <a href="#" id="btnEsqueci" class="float-right">
                                  Esqueci a senha.
                              </a>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <input type="submit" name="btnEntrar"
                                 id="btnEntrar" 
                                 value=":: Entrar ::"
                                 class="btn btn-primary btn-block">
                      </div>
                      
                      <div class="form-group">
                          <p>
                              Novo usuário?
                              <a href="#" id="btnRegistrar">
                                Registrar-se aqui.
                              </a>
                          </p>
                      </div>
                          
                  </form>
              </div>
          </section>
          <br> <!-- maroto -->
          <!-- Formulário de Registro de Novo Usuário -->
          <section class="row">
              <div class="col-lg-4 offset-lg-4 bg-light rounded" 
                   id="caixaRegistro">
                  <h2 class="text-center mt-2">Registrar-se</h2>
                  <form action="#" method="post" role="form" 
                        class="p-2" id="formRegistro">
                      
                      <!-- Campo Nome Completo -->
                      <div class="form-group">
                          <input type="text" name="nomeCompleto" 
                                 class="form-control"
                                 placeholder="Nome completo" required
                                 minlength="6">
                      </div>
                      
                      <!-- Campo Nome do Usuário -->
                      <div class="form-group">
                          <input type="text" name="nomeUsuario"
                                 class="form-control"
                                 placeholder="Nome do Usuário" required
                                 minlength="6">
                      </div>
                      
                      <!-- Campo E-mail -->
                      <div class="form-group">
                          <input type="email" name="emailUsuario"
                                 class="form-control"
                                 placeholder="E-mail" required>
                      </div>
                      
                      <!-- Campo Senha -->
                      <div class="form-group">
                          <input type="password" id="senhaUsuario"
                                 name="senhaUsuario"
                                 class="form-control"
                                 placeholder="Senha" required
                                 minlength="6">
                      </div>
                      
                      <!-- Campo de confirmação de senha -->
                      <div class="form-group">
                          <input type="password" 
                                 id="senhaUsuarioConfirmar" 
                                 name="senhaUsuarioConfirmar"
                                 class="form-control"
                                 placeholder="Confirmar a senha" required
                                 minlength="6">
                      </div>
                      
                      <!-- Checkbox de aceite dos termos -->
                      <div class="form-group mt-5">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="concordar"
                                   class="custom-control-input" 
                                   id="checkConcordar">
                            <label for="checkConcordar" 
                                   class="custom-control-label">
                                Eu concordo com os
                                <a href="#">termos e condições.</a>
                            </label>
                          </div>
                      </div>
                      
                      <!-- botão enviar -->
                      <div class="form-group">
                          <input type="submit" 
                                 name="btnRegistroUsuario"
                                 id="btnRegistroUsuario"
                                 value=":: Registrar ::"
                                 class="btn btn-primary btn-block">
                      </div>
                      
                      <!-- Já registrado -->
                      <div class="form-group">
                          <p class="text-center">
                              Já registrado?
                              <a href="#" id="btnEntrarRegistrado">
                                  Entrar aqui.
                              </a>
                          </p>
                      </div>
                          
                  </form>                  
              </div>
          </section>
          <br> <!-- maroto -->
          <!-- Formulário de Recuperação de Senha -->
          <section class="row">
              <div class="col-lg-4 offset-lg-4 bg-light rounded"
                   id="caixaSenha">
                  <h2 class="text-center mt-2">
                      Gerar nova senha
                  </h2>
                  <form action="#" method="post" role="form"
                        class="p-2" id="formSenha">
                      <div class="form-group">
                          <small class="text-muted">
                              Para gerar nova senha, digite seu
                              e-mail para receber as instruções.
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
                                 value=":: Gerar ::"
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
          
          <!-- Formulário de Recuperação de Senha -->
          
          
          
      </main>
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Plugin jQuery Validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    
    <script>
       //$(document).ready(function(){});
       //jQuery
       $(function(){
           //Mostra caixa de senha no Login
           $("#btnEsqueci").click(function(){
               $("#caixaLogin").hide();//Esconder
               $("#caixaSenha").show();//Mostrar
           });
           
           //Volta para o Login
           $("#btnVoltar").click(function(){
               $("#caixaLogin").show();//Mostrar
               $("#caixaSenha").hide();//Esconder
           });
           
            //Mostra caixa Registrar no Login
           $("#btnRegistrar").click(function(){
               $("#caixaLogin").hide();//Esconder
               $("#caixaRegistro").show();//Mostrar
           });
           //Mostra caixa Login no Registro
           $("#btnEntrarRegistrado").click(function(){
               $("#caixaLogin").show();//Mostrar
               $("#caixaRegistro").hide();//Esconder
           });
           
           //Validação com jQuery
           //Pra fica azulzinho
           jQuery.validator.setDefaults({
                debug: false,
                success: "valid"
              });
              
           $("#formLogin").validate();
           $("#formSenha").validate();
           $("#formRegistro").validate({
               rules: {
                   senhaUsuario: "required",
                   senhaUsuarioConfirmar: {
                       equalTo: "#senhaUsuario"
                   }
               }
           });
           
           //Envio de dados via Ajax
           //sem recarregar a página
           $("#btnRegistroUsuario").click(function(e){            
                if(document
                        .querySelector("#formRegistro")
                        .checkValidity()){
                    //Não deixa o formulário ser enviado    
                    e.preventDefault();
                    $("#espera").show();
                    $.ajax({
                        url: 'recebe.php',
                        method: 'post',
                        data:$('#formRegistro')
                                .serialize()+'&action=registro',
                        success:function(resposta){
                            $("#espera").hide();
                            $('#alerta').show();
                            $('#resultado').html(resposta);
                        }                    
                    });            
                }
                return true;
            });
            //Fim do Ajax Registro Usuário
            
            //Envio de dados via Ajax
           //Página de Login
           $("#btnEntrar").click(function(e){            
                if(document
                        .querySelector("#formLogin")
                        .checkValidity()){
                    //Não deixa o formulário ser enviado    
                    e.preventDefault();
                    $("#espera").show();
                    $.ajax({
                        url: 'recebe.php',
                        method: 'post',
                        data:$('#formLogin')
                                .serialize()+'&action=entrar',
                        success:function(resposta){
                            $("#espera").hide();
                            if(resposta === "ok"){
                                window.location = "perfil.php";
                            }else{
                                $('#alerta').show();
                                $('#resultado').html(resposta);
                            }
                        }                    
                    });            
                }
                return true;
            });
            //Fim do Ajax Entrar
            
            
           //Envio de dados via Ajax
           //Página de Gerar Senha
           $("#btnGerar").click(function(e){            
                if(document
                        .querySelector("#formSenha")
                        .checkValidity()){
                    //Não deixa o formulário ser enviado    
                    e.preventDefault();
                    $("#espera").show();
                    $.ajax({
                        url: 'recebe.php',
                        method: 'post',
                        data:$('#formSenha')
                                .serialize()+'&action=gerar',
                        success:function(resposta){
                            $("#espera").hide();
                            $('#alerta').show();
                            $('#resultado').html(resposta);
                        }                    
                    });            
                }
                return true;
            });
            //Fim do Ajax Gerar Senha
            
           
       });
       
       //Tradução do jQuery Validate
       /*
        * Translated default messages for the jQuery validation plugin.
        * Locale: PT_BR
        */
        jQuery.extend(jQuery.validator.messages, {
            required: "Este campo &eacute; requerido.",
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
