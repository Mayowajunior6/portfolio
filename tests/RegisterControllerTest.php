<?php

/**
 * RegisterControllerTest Test Class
 * @file: RegisterControllerTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-11-2020
 */

use PHPUnit\Framework\TestCase;
use App\Lib\ControllersFunctions;

final class RegisterControllerTest extends ControllersFunctions
{

	public function testPagesControllerAboutReturnsCorrectResponse()
	{
		$url = "http://capstone.local/register";
		$status = $this->getHttpStatus($url);
		$this->assertEquals(200, $status);
	}

	public function testPagesControllerAboutReturnsCorrectContent()
	{
		$url = "http://capstone.local/register";
		$response = $this->getHttpResponse($url);
		$this->assertContains('<h1>REGI <span>STER</span></h1>', $response);
	}

}