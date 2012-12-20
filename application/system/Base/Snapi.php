<?php
	namespace application\system;

	class Base_Snapi {
		/**
		 * Current instance of the Snapi base object
		 */
		public static $myself;

		/**
		 * Array of configuration objects
		 */
		public $configurations;

		public function __construct() {
			return $this;
		}

		public function getConfiguration() {

		}

		public function setConfigurationDir($path, $pathName) {
			if(!isset($this->configurations)) {
				$this->configurations = Configuration::$myself;
			}
		}

		public function readConfiguration() {

		}

		public static function autoloader($className) {
			echo $className;
		}
	}