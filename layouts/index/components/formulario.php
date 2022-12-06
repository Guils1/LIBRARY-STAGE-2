<main>

  <section class="container-md">
    <a href="../../index?page=books">
      <button class="btn btn-success mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        </svg>
      </button>
    </a>
  </section>

  <h2 class="mt-3" id="title"><?=TITLE?></h2>

  <form class="container-md" method="post">

    <div class="form-group">
      <label>Nome:</label>
      <input type="text" class="form-control mb-3" name="nome" value="<?=$obBook->nome?>">
    </div>

    <div class="form-group">
      <label>Descrição:</label>
      <textarea class="form-control mb-3" name="descricao" rows="5"><?=$obBook->descricao?></textarea>
    </div>

    <div class="form-group">
      <label>Ano de lançamento:</label>
      <input type="text" class="form-control mb-3" name="data_lancamento" value="<?=$obBook->data_lancamento?>">
    </div>

    <div class="form-group">
      <label>Gênero:</label>
      <select type="text" class="form-control mb-3" name="genres" value="<?=$obBook->genres?>">
        <option value="" selected>---Gênero---</option>
        <option value="Aventura">Aventura</option>
        <option value="Carta">Carta</option>
        <option value="Conto">Conto</option>
        <option value="Crônica">Crônica</option>
        <option value="Drama">Drama</option>
        <option value="Poesia">Poesia</option>
        <option value="Romance">Romance</option>
        <option value="Terror">Terror</option>
      </select>
    </div>

    <div class="form-group">
      <label>URL imagem:</label>
      <input type="url" class="form-control mb-3" name="img" value="<?=$obBook->img?>">
    </div>

    <div class="form-group">
      <label>Status:</label>

      <div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="s" checked> Disponível
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="n" <?=$obBook->ativo == 'n' ? 'checked' : ''?>> Indisponível
            </label>
          </div>
      </div>

    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success mt-3">Enviar</button>
    </div>

  </form>

</main>

<style>
  #title {
    margin-left: 3em;
  }
</style>