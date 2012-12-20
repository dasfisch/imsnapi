<?php
	class Configuration {
		private $_paths;

		public static $myself;

		public function __construct() {

		}

		public function setPath($path, $pathName) {
			$this->path[$pathName] = $path;
		}

		public function getPath($pathName) {
			return $this->path[$pathName];
		}
	}