<?php

  namespace App\Controllers;

  use App\Models\Info;
  use MF\Controller\Action;
  use App\Models\Produto;
  use MF\Model\Container;

  class IndexController extends Action {

    public function index(){

      //$this->view->dados = array("Sofá", "Cadeira", "Cama");

      $produto = Container::getModel('Produto');

      $produtos = $produto->getProdutos();

      $this->view->dados = $produtos;

      $this->render('index', 'layout1');
    }

    public function sobreNos(){

      //instância de conexão

      $info = Container::getModel('Info');

      $informacoes = $info->getInfo();

      $this->view->dados = $informacoes;
      $this->render('sobreNos', 'layout2');
    }

  }

?>