<?php

/**
 * DatabaseLogger Class
 * DatabaseLogger Class implementing the ILogger Intreface to write the logs
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-19-2020
 */

namespace App\Lib;

use App\Lib\ILogger;

class DatabaseLogger implements ILogger
{

	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function write($event)
	{
		// 2. Create query
        // Break query into multiple lines to
        // make debugging easier in the case 
        // of errors
        $query = "INSERT INTO log
                    (
                    event
                    ) 
                    VALUES 
                    ( 
                    :event
                    )";

        // 3. Prepare the query to be executed
        $stmt = $this->dbh->prepare($query);


        // 4. Bind values safely (escaped) to place holders 
        $params = array(
        	':event' => $event, 
        );

        // 5. execute
        $stmt->execute($params);
	}
	
}