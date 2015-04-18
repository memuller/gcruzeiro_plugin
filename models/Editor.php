<?php
	namespace GRCRZ;
	use CustomUser, DateTime ;

	class Editor extends CustomUser  {

		static $name = 'editor' ;

		static $fields = array(
			'central_access' => array('type' => 'boolean', 'label' => 'Acesso à central', 'description' => 'necessário para visualizar anexos e páginas marcadas como privadas.'),
			'skip_dashboard' => array('type' => 'boolean', 'label' => 'Sem acesso ao admin', 'description' => 'nega acesso ao painel de controle do Wordpress.')
		);

		static $allow_admin = true;

		static function build(){
			parent::build();
			
		}


	}

 ?>