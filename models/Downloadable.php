<?php
	namespace GRCRZ ;  
	use CustomPost ;

	class Downloadable extends CustomPost {
		static $name = "dlm_download" ;
		static $skip_creation = true; 

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