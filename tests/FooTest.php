<?php
namespace kanonji\FileObject\tests;

use kanonji\FileObject\CSV;
use kanonji\FileObject\TSV;

class FooTest extends \PHPUnit_Framework_TestCase{

	private $path;

	public function setup(){
		$this->path = implode(DIRECTORY_SEPARATOR, [dirname(__FILE__), 'resources']);
	}
	public function test_base(){
		$filepath = implode(DIRECTORY_SEPARATOR, [$this->path, 'base.csv']);
		$obj = new CSV($filepath);
		// var_dump(count($obj));
		foreach($obj as $key => $row){
			// var_dump($key);
			// var_dump($row);
		}
		$filepath = implode(DIRECTORY_SEPARATOR, [$this->path, 'base.tsv']);
		$obj = new TSV($filepath);
		// var_dump(count($obj));
		foreach($obj as $key => $row){
			// var_dump($key);
			// var_dump($row);
		}
	}

	public function test_no_newline_at_end_of_file(){
		$filepath = implode(DIRECTORY_SEPARATOR, [$this->path, 'no_newline_at_end_of_file.csv']);
		$obj = new CSV($filepath);
		// var_dump(count($obj));
		foreach($obj as $key => $row){
			var_dump($key);
			var_dump($row);
		}
		$filepath = implode(DIRECTORY_SEPARATOR, [$this->path, 'no_newline_at_end_of_file.tsv']);
		$obj = new TSV($filepath);
		var_dump($obj->count());
		// var_dump(count($obj));
		foreach($obj as $key => $row){
			var_dump($key);
			var_dump($row);
		}
	}
}
