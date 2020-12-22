<?php

/**
 * Validator Class
 * Setting reusable functions for validation form inputs
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 08-30-2020
 */

namespace App\Lib;

class Validator
{
	private $post = [];

	private $errors = [];

	//Constructor
	public function __construct($array)
	{
		$this->post = $array;
	}

	/**
	 * Validate required elements in an array
	 * @param array $required array of required keys
	 * @return void 
	 */
	public function required($required)
	{
	   foreach ($required as $key) {
	        if (empty($this->post[$key])) {
	            $this->errors[$key][] = $this->label($key) . " is a required field.";
	        }
	   }
	}

	/**
	 * Validating first and last name
	 * @param string $field
	 * @return void
	 */
	public function name($field)
	{
		$name = $this->post[$field];
		$pattern = '/^[a-zA-Z\-]{3,255}$/';
		if (!preg_match($pattern, $name)) {
			$this->errors[$field][] = $this->label($field) . " must be a valid name.";
		}
	}

	/**
	 * Email validator
	 * @param  string $field 
	 * @return void 
	 */
	public function email($field)
	{
		$email = $this->post[$field];
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        $this->errors[$field][] = $this->label($field) . " must be a valid email address.";
	    }
	}

	/**
	 * Validating the string length
	 * @param  string $field
	 * @param  int $min
	 * @param  int $max
	 * @return void
	 */
	public function len($field, $min, $max)
	{
	    if (strlen($this->post[$field]) < $min) {
	       $this->errors[$field][] = $this->label($field) . " must have a minimum length of {$min}.";
	    } elseif (strlen($this->post[$field]) > $max) {
	        $this->errors[$field][] = $this->label($field) . " must have a maximum length of {$max}.";
	    } 
	}

	/**
	 * Postal code validating function
	 * @param  string $field
	 * @return void
	 */
	public function postal($field)
	{
		$postal = $this->post[$field];
		$pattern = '/^[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}[\s]?[0-9]{1}[a-zA-Z]{1}[0-9]{1}$/';
		if (!preg_match($pattern, $postal)) {
			$this->errors[$field][] = $this->label($field) . " must be a valid postal code.";
		}

	}

	/**
	 * Phone number validating function
	 * @param  string $field
	 * @return void
	 */
	public function phone($field)
	{
		$phone = $this->post[$field];
		//Phone validation accepts country code
		$pattern = '/^(\+)?[0-9]{0,3}[\-\s]?[0-9]{3}[\-\s]?[0-9]{3}[\-\s]?[0-9]{4}/';
		if (!preg_match($pattern, $phone)) {
			$this->errors[$field][] = $this->label($field) . " must be a valid phone number.";
		}

	}

	/**
	 * Validate two values match and password strength
	 * @param mixed $var1
	 * @param mixed $var2 
	 * @param string $field 
	 * @return void 
	 */
	function matches($var1, $var2, $field)
	{
		$password = $this->post[$var1];
		$pattern = '/(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z])^.{8,}$/';

		if (!preg_match($pattern, $password)) {
			$this->errors[$field][] = $this->label($field) . " must contain at least one Upercase and lowercase letter, one digit and minimun 8 characters.";
		} elseif ($this->post[$var1] != $this->post[$var2]) {
	        $this->errors[$field][] = $this->label($field) . " does not match.";
	    }
	}

	/**
	 * Validate a value is numeric and within a range
	 * @param  string $field 
	 * @param  int $min 
	 * @param  int $max  
	 * @return void 
	 */
	function num($field, $min, $max)
	{
		$age = $this->post[$field];
	    if(!empty($age)) {
	        if (!is_numeric($age)) {
	            $this->errors[$field][] = $this->label($field) . " must be a number.";
	        } elseif ($age < $min) {
	            $this->errors[$field][] = $this->label($field) . " must have a minimum value of {$min}.";
	        } elseif ($age > $max) {
	            $this->errors[$field][] = $this->label($field) . " must have a maximum value of {$max}.";
	        }
	    }
	}

	/**
	 * Validating if email exist
	 * @param  interger $user
	 * @param  object $dbh
	 * @return int
	 */
	/*function checkEmail($user, $dbh)
	{
		$emailExist = checkEmail($user, $dbh);
		return $emailExist;
	}*///Implementating has been moved to addUser php controller


	//Utility Functions
	private function label($str)
	{
		return ucwords(str_replace('_', ' ', $str));
	}

	public function post()
	{
		return $this->post;
	}

	public function error()
	{
		return $this->errors;
	}

}