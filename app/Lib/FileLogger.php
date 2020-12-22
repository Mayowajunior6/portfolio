<?php

/**
 * FileLogger Class
 * FileLogger Class implementing the ILogger Intreface to write the logs
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-19-2020
 */

namespace App\Lib;

use App\Lib\ILogger;

class FileLogger implements ILogger
{

	private $file;

	public function __construct($file)
	{
		$this->file = $file;
	}

	public function write($event)
	{
		file_put_contents($this->file, $event."\n\n", FILE_APPEND);
	}
	
}