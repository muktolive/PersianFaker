<?php

require_once 'Base.php';

class Certificate extends Base
{
	protected static $certificates = array('دیپلم', 'لیسانس', 'فوق لیسانس', 'دکترا');

	public static function generate()
	{
		return static::picker(static::$certificates);
	}
}