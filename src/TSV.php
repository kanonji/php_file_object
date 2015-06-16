<?php
namespace kanonji\FileObject;

class TSV extends CSV{

	public function __construct($file) {
		parent::__construct($file);
		$this->setCsvControl("\t");
	}
}
