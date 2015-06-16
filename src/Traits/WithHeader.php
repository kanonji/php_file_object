<?php
namespace kanonji\FileObject\Traits;

/**
 * @see http://stackoverflow.com/a/10181302
 */
trait WithHeader{
	private $_WithHeader_keys;

	public function rewind() {
		parent::rewind();
		$this->_WithHeader_keys = parent::current();
		parent::next();
	}

	public function current() {
		return array_combine($this->_WithHeader_keys, parent::current());
	}

	public function getKeys() {
		return $this->_WithHeader_keys;
	}
}
