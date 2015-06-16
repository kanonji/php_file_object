<?php
namespace kanonji\FileObject;

class File extends \SplFileObject implements \Countable{

	public function __construct($file) {
		parent::__construct($file);
		$this->setFlags(
			\SplFileObject::READ_AHEAD |
			\SplFileObject::SKIP_EMPTY
		);
	}

	public function count(){
		var_dump(1111);
		ob_flush();
		$d = iterator_count($this);
		var_dump(2222);
		return $d;
	}
}
