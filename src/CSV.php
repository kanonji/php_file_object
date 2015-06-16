<?php
namespace kanonji\FileObject;

class CSV extends File{

	public function __construct($file) {
		parent::__construct($file);
		$this->setFlags(
			\SplFileObject::READ_CSV
		);
	}
}
