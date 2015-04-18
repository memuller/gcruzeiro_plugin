<?php
	namespace GRCRZ ;  
	use CustomPost ;

	class Downloadable extends CustomPost {
		static $name = "downloadable" ;
		static $creation_fields = array( 
			'label' => 'downloadable','description' => 'Um arquivo para download.',
			'public' => false,'show_ui' => true,'capability_type' => 'post', 'map_meta_cap' => true, 
			'hierarchical' => false,
			'supports' => array('custom-fields', 'title'), 
			'has_archive' => false, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Arquivos',
				'singular_name' => 'Arquivo',
				'menu_name' => 'Arquivos',
				'add_new' => 'Cadastrar Arquivo',
				'add_new_item' => 'Cadastrar Arquivo',
				'edit' => 'Atualizar',
				'edit_item' => 'Atualizar Arquivo',
				'new_item' => 'Registrar',
				'view' => 'Ver',
				'view_item' => 'Ver')
		) ;
		static $icon = '\f316' ;

		static $fields = array(
			'file_field' => array('type' => 'media', 'preview' => false, 'label' => 'Arquivo'),
		) ;

		static $editable_by = array(
			'form_advanced' => array( 'fields' => array( 'file_field')),
		);

		

		static function build(){
			parent::build(); $class = get_called_class();
			
		}
	}

 ?>