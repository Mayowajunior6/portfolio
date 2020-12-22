<?php

/**
 * LoginControllerTest Test Class
 * @file: LoginControllerTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-11-2020
 */

use PHPUnit\Framework\TestCase;
use App\Lib\ControllersFunctions;

final class LoginControllerTest extends ControllersFunctions
{

	public function testPagesControllerAboutReturnsCorrectResponse()
	{
		$url = "http://capstone.local/login";
		$status = $this->getHttpStatus($url);
		$this->assertEquals(200, $status);
	}

	public function testPagesControllerAboutReturnsCorrectContent()
	{
		$url = "http://capstone.local/login";
		$response = $this->getHttpResponse($url);
		$this->assertContains('<h1>LOG <span>IN</span></h1>', $response);
	}

}