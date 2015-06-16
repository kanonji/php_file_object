<?php
namespace kanonji\FileObject;

/**
 * @see http://stackoverflow.com/a/10181302
 */
class TSVWithHeader extends TSV{
	use Traits\WithHeader;
}
