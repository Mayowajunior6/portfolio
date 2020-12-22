<?php

/**
 * AboutControllerTest Test Class
 * @file: AboutControllerTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-11-2020
 */

use PHPUnit\Framework\TestCase;
use App\Lib\ControllersFunctions;

class AboutControllerTest extends ControllersFunctions
{

	public function testPagesControllerAboutReturnsCorrectResponse()
	{
		$url = "http://capstone.local/about";
		$status = $this->getHttpStatus($url);
		$this->assertEquals(200, $status);
	}

	public function testPagesControllerAboutReturnsCorrectContent()
	{
		$url = "http://capstone.local/about";
		$response = $this->getHttpResponse($url);
		$this->assertContains('<h1>ABOUT <span>US</span></h1>', $response);
	}

}