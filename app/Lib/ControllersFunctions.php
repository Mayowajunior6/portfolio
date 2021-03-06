<?php

/**
 * ControllersFunctionTest Test Class
 * @file: ControllersFunctionTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-11-2020
 */

namespace App\Lib;
use PHPUnit\Framework\TestCase;


class ControllersFunctions extends TestCase
{

    /**
     * Testing URL and returning the status
     * @param  string $url
     * @return array
     */
    public function getHttpResponse($url)
    {
            // Initialize curl
            $ch = curl_init();

            // Set options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 0);  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

            // Capture response
            $response = curl_exec($ch);

            // Close connection
            curl_close($ch);

            // Return 
            return $response;

    }

    /**
     * Testing URL and returning the http status
     * @param  string $url
     * @return array
     */
    public function getHttpStatus($url)
    {
            // Initialize curl
            $ch = curl_init();

            // Set options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 0);  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

            // Capture response and status
            $response = curl_exec($ch);
            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            // Close connection
            curl_close($ch);

            // Return 
            return $status;

    }

}