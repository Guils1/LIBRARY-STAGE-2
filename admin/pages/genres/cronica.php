<?php

  
  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success mt-5">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($books as $book){
    if($book->genres === "Cronica") {
    $resultados .= ' 
                    <section class="mb-5 mt-4">
                      <div class="card" style="width: 18rem;">
                        <img src="'.$book->img.'" class="card-img-top" alt="...">

                        <div class="card-body">
                          <h5 class="card-title">'.$book->nome.'</h5>
                          <p class="card-text">'.$book->descricao.'</p>
                        </div>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">'.($book->ativo == "s" ? "Disponível" : "Indisponível").'</li>
                          <li class="list-group-item">'.$book->ano_lancamento.'</li>
                          <li class="list-group-item">Última atualização '.date('d/m/Y à\s H:i:s',strtotime($book->data)).'</li>
                        </ul>

                        <div class="card-body">
                          <a href="admin/exec/editar.php?id='.$book->id.'" class="card-link" id="edit"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>
                          <a href="admin/exec/excluir.php?id='.$book->id.'" class="card-link">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                          </svg>
                          </a>
                        </div>
                      </div>  
                  </section>
                    
                    ';
    }
  }

  $resultados = strlen($resultados) ? $resultados : '<div class="aviso-empty">
                                                        <img id="empty" src="/admin/pages/log/images/bankrupt.png" alt="">
                                                        <h1 class="display-8">Nenhum livro encontrado.</h1>
                                                      </div>';

?>
<main class="container-md mt-4">
  <?=$mensagem?>
  <section>
    <a href="admin/exec/cadastrar.php">
      <button class="btn btn-success mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
        </svg>
      </button>
    </a>
  </section>
  <div class="row">
    <div class="col">
      <?=$resultados?>
    </div>
  </div>

</main>

<style>
  .display-8 {
    text-align: center; 
  }
  #empty {
    margin-left: 45%;
    height: 5em;
    width: 5em;
  }
  #edit {
    margin-left: 5%;
  }
</style>