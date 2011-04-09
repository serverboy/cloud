<?php

/**
 * Cloud Column
 * http://cloud.serverboy.net/
 *
 * PHP version 5
 *
 * Copyright 2011 Matt Basta
 * 
 * @author     Matt Basta <matt@serverboy.net>
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * 	http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 */

class cloud_column {

	private $name;
	private $type;
	private $length;
	private $key;
	private $_default;
	private $extra;

	public function __construct($name, $type, $length = 0, $key = '', $default = '', $extra = '') {
		$this->name = $name;
		$this->type = $type;
		$this->length = $length;
		$this->key = $key;
		$this->_default = $default;
		$this->extra = $extra;
	}
	
	public function __get($name) {
		if($name == "default")
			$name = "_default";
		return $this->$name;
	}
}