<?php

include_once("model/Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke($acao = 'home') {
        $reslt = $this->model->getLogin();
        // Chama a funcao getLogin() da classe Model
        // e armazena o valor de retorno dessa funcao
        // na variavel reslt.
        switch ($acao) {
            case 'home':
                $this->showConteudoInicialView();
                break;
            case 'login':
                $this->showTelaLoginView();
                break;
            case 'logout':
                $this->showTelaDeLogoutView();
                break;
            case 'luiza':
                $this->showTelaLuiza();
            break;
	    case 'pedro':
		$this->showTelaPedro();
	    break;
        }
    }
    
    private function showConteudoInicialView(){
        include 'view/conteudoInicialView.php';
    }
    
    private function showTelaLoginView(){
        include 'view/telaLoginView.php';
    }
    private function showTelaPedro(){
	include 'view/Pedro.php';
    }
    
    private function showTelaDeLogoutView(){
        $custom = "ahahaha"; //mysql_
        include 'view/telaLogoutView.php';
    }
    
    private function showTelaLuiza(){
        include 'view/telaLoginView.php';
    }
}

?>
