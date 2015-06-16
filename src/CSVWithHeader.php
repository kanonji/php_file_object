<?php
namespace kanonji\FileObject;

/**
 * @see http://stackoverflow.com/a/10181302
 */
class CSVWithHeader extends CSV{
	use Traits\WithHeader;
}
