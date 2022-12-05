<?php 

  $alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';
  $alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">'.$alertaCadastro.'</div>' : '';

?>
<!-- --------------- BREVE EXPLICAÇÃO DO PROJETO --------------- -->
<div class="container mt-5">
      <div class="row">
        <div class="col-6" id="col">
          <div class="divleft">
            <h1><span class="library-g"><b>LIBRARY</b></span></h1>
            <p>O projeto <i><b>library</b></i> é nada mais que um CRUD orientado
              a objetos com PHP, PDO e MySQL desenvolvido
              pelo futuro desenvolvedor Full Stack Junior da empresa <a class="pedbot" href="https://www.pedbot.net/"><i><b>PedBot.</b></i></a>
            </p>
          </div>
          <section class="alertalogin"><?=$alertaLogin?></section>
          <section class="alertalogin"><?=$alertaCadastro?></section>

          
        </div>
        


        <!-- --------------- AREA DE LOGIN --------------- -->
        <div class="col-5" id="col1">
          <div class="divright">
            <form method="POST">
                <div class="form-group mt-4">
                  <input type="text" class="form-control mb-3" placeholder="Celular, email ou nome de usuário" maxlength="30" name="login" required>
                </div>
                <div class="form-group ">
                  <input type="password" class="form-control mb-3" id="password" placeholder="Senha" minlength="8" maxlength="15" name="password" required>
                  <div id="icon" onclick="showHide()"></div>
                </div>
                <div class="form-group">
                  <input type="submit" id="button" name="acao" class="form-control value="Entrar">
                </div>
                <div class="form-group mt-2">
                  <small class="justify-center"><a href="">Esqueceu a senha?</a></small>
                </div>
            </form>
            <hr>
            <div class="form-group">
              <input type="button" id="button_new" class="btn btn-success"
                data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@getbootstrap"
                value="Criar nova conta">
            </div>
          </div>
        </div>



        <!-- --------------- AREA DE CADASTRO --------------- -->
        <div class="modal fade" id="exampleModal" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastra-se</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="row mb-3">
                    <div class="col-6">
                      <input type="text" class="form-control"
                        id="recipient-name" placeholder="Nome" maxlength="20" name="nome" required>
                    </div>
                    <div class="col-6">
                      <input type="text" class="form-control"
                        id="recipient-name" placeholder="Sobrenome" maxlength="20" name="sobrenome" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="recipient-name"
                      placeholder="Celular, email ou nome do usuário" maxlength="50" name="login" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" id="password2"
                      placeholder="Nova senha" minlenght="8" maxlength="15" name="password" required> 
                  </div>
                    <small>Data de nascimento <span><svg
                        xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" fill="currentColor" class="bi
                        bi-question-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1
                          0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M5.255 5.786a.237.237 0 0 0
                            .241.247h.825c.138 0
                            .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0
                            1.314.343 1.314 1.168 0 .635-.374.927-.965
                            1.371-.673.489-1.206 1.06-1.168
                            1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0
                            0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463
                            1.244-.977 1.244-2.056
                            0-1.511-1.276-2.241-2.673-2.241-1.267
                            0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927
                            1.01.927.609 0 1.028-.394 1.028-.927
                            0-.552-.42-.94-1.029-.94-.584
                            0-1.009.388-1.009.94z"/>
                          </svg></span></small>
                      <div class="mb-3">
                        <input type="date" class="form-control"
                          id="recipient-name" name="data_nascimento">
                      </div>
                    </div>
                    <section class="container-sm" id="p-txt">
                  <p>As pessoas que usam nosso serviço podem ter carregado suas informações de contato na Library. <a href="">Saiba mais</a>.</p>
                  <p> Ao clicar em Cadastre-se, você concorda com nossos <a href="">Termos, Política de Privacidade</a> e <a href="">Política de Cookies</a>. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
                </section>
                <div class="form-group mb-3">
                  <input type="submit" id="button_new" class="btn btn-success"
                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@getbootstrap" name="acao"
                    value="Cadastra-se">
                </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     