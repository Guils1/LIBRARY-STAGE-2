<?php

namespace App\Models;

use \App\Db\Database;
use \PDO;

class Book{

  /**
   * ID livro
   * @var integer
   */
  public $id;

  /**
   * Nome do livro
   * @var string
   */
  public $nome;

  /**
   * Descrição do livro (pode conter html)
   * @var string
   */
  public $descricao;

  /**
   * Título do livro
   * @var string
   */
  public $data_lancamento;

  /**
   * Define se o livro está disponivel
   * @var string(s/n)
   */
  public $ativo;

  /**
   * Data de publicação do livro
   * @var string
   */
  public $data;

  /**
   * link capa do livro
   * @var string
   */
  public $img;

  /**
   * Genero do livro
   * @var string
   */
  public $genres;

  /**
   * Método responsável por cadastrar um novo livro no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR O LIVRO NO BANCO
    $obDatabase = new Database('books');
    $this->id = $obDatabase->insert([
                                      'nome'=> $this->nome,
                                      'descricao' => $this->descricao,
                                      'data_lancamento' => $this->data_lancamento,
                                      'ativo'     => $this->ativo,
                                      'data'      => $this->data,
                                      'img'      => $this->img,
                                      'genres'      => $this->genres
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o livro no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('books'))->update('id = '.$this->id,[
                                                                'nome'    => $this->nome,
                                                                'descricao' => $this->descricao,
                                                                'data_lancamento' => $this->data_lancamento,
                                                                'ativo'     => $this->ativo,
                                                                'data'      => $this->data,
                                                                'img'      => $this->img,
                                                                'genres'      => $this->genres
                                                              ]);
  }

  /**
   * Método responsável por excluir o livro do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('books'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter os livros do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getBooks($where = null, $order = null, $limit = null){
    return (new Database('books'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um livro com base em seu ID
   * @param  integer $id
   */
  public static function getBook($id){
    return (new Database('books'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}
