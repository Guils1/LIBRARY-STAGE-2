<main>

  <h2 class="mt-3">Excluir livro</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir o livro <strong><?=$obBook->nome?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="../../index.php?page=books"><button type="button" class="btn btn-success">Cancelar</button></a>

      <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</main>