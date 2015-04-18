<?php
	namespace GRCRZ\Presenters ;
	use Presenter ;

	class Base extends Presenter {

		static $styles = array(
			
		);

		static $scripts = array(

		);

		static $includes = array(
		);


		static function build(){
			$presenter = get_called_class();
			parent::build();
		}
	}
?>