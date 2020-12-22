<?php

/**
 * ILogger Intreface
 * ILogger Intreface to be implemented to write the logs
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-19-2020
 */

namespace App\Lib;

interface ILogger
{

	public function write($event);

}