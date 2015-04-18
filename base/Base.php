<?php
	namespace GRCRZ ;
	use BasePlugin ;

	class Plugin extends BasePlugin {

		static $db_version = '0' ;
		static $custom_posts = array();
		static $custom_taxonomies = array();
		static $custom_post_formats = array();
		static $custom_classes = array();
		static $custom_users = array();
		static $presenters = array();
		static $has_translations = false ;

		static $absent_roles = array();
		static $restricted_menus = array();
		static $restrict_for_everyone = true;

		static $migrations = array(

		);

		static $query_vars = array(
		);
		static $rewrite_rules = array(
		);

		static function build(){
			parent::build();		
		}

	}
 ?>