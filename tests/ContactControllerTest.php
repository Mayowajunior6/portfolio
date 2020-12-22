<?php

/**
 * ContactControllerTest Test Class
 * @file: ContactControllerTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-11-2020
 */

use PHPUnit\Framework\TestCase;
use App\Lib\ControllersFunctions;

final class ContactControllerTest extends ControllersFunctions
{

	public function testPagesControllerAboutReturnsCorrectResponse()
	{
		$url = "http://capstone.local/contact";
		$status = $this->getHttpStatus($url);
		$this->assertEquals(200, $status);
	}

	public function testPagesControllerAboutReturnsCorrectContent()
	{
		$url = "http://capstone.local/contact";
		$response = $this->getHttpResponse($url);
		$this->assertContains('<h1>CONTACT <span>MO2</span></h1>', $response);
	}

}