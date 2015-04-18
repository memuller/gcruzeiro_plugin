<?php
	namespace GRCRZ\Presenters ;
	use Presenter ;

	class Auth extends Presenter {

		static $actions = array(
			'central_restrict' => array('is' => 'page')
		);

		static function central_restrict(){
			$page = new \GRCRZ\Page();
			if($page->private){
				if(current_user_can('manage_options')){ return ; }
				if(is_user_logged_in()){
					$user = new \GRCRZ\Editor();
					if($user->central_access){ return ; }
				}

				\GRCRZ\Editor::auth();
			}

		}

		static function dashboard_restrict(){
			include_once(ABSPATH. WPINC . '/pluggable.php');
			$user = new \GRCRZ\Editor();
			//if($user->skip_dashboard){ wp_redirect(home_url('/central')); }
		}

		static function build(){
			$presenter = get_called_class();
			parent::build();
			if(is_admin()){ add_action('admin_init', static::dashboard_restrict()); }
		}
	}
?>