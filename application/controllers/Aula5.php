<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula5 extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Titulo Aula 5';
		$data['conteudo'] = 'Hoje estamos aprendendo como trabalhar com views.';
		$data['titulo_pagina'] = 'Aula #5';
		$this->load->view('aula5_view',$data);
	}
	public function pagina($pagina=NULL){

		$data['title'] = 'Aulas e Aulas';
		$data['conteudo'] = 'Todo conteudo escrito aqui é por pura habilidade.';
		$data['rodape'] = 'TODOS OS CONTEUDOS SÃO EXTREMAMENTES ATRAENTES';


		$this->load->view('layout/topo', $data);
		
		if($pagina == 'contato'){
			$this->load->view('site/contato');
		}

		if($pagina == NULL){
			$this->load->view('site/conteudo');
		}
		$this->load->view('layout/rodape');
	}
}

