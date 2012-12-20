<?php
	namespace application\system;

	class Base_Model {
		public function __construct() {
			$this->conn = new Data_Database();
		}

		public function save() {

		}
	}