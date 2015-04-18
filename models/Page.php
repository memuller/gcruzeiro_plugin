<?php
	namespace GRCRZ ;  
	use CustomPost ;

	class Page extends CustomPost {
		static $name = "page" ;
		static $creation_fields = array(
		) ;

		static $fields = array(
			'private' => array('type' => 'boolean', 'default' => false, 'label' => 'Requer login', 'description' => 'se sim, requer usuário com permissões de uso da central'),
		) ;

		static $editable_by = array(
			'access' => array('name' => 'Privacidade', 'placing' => 'side', 
				'fields' => array( 'private')),
		);

		

		static function build(){
			parent::build(); $class = get_called_class();
			
		}
	}

 ?>