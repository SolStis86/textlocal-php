<?php

namespace TextLocal;


class Contact
{
	var $number;
	var $first_name;
	var $last_name;
	var $custom1;
	var $custom2;
	var $custom3;

	var $groupID;

	/**
	 * Structure of a contact object
	 * @param        $number
	 * @param string $firstname
	 * @param string $lastname
	 * @param string $custom1
	 * @param string $custom2
	 * @param string $custom3
	 */
	function __construct($number, $firstname = '', $lastname = '', $custom1 = '', $custom2 = '', $custom3 = '')
	{
		$this->number = $number;
		$this->first_name = $firstname;
		$this->last_name = $lastname;
		$this->custom1 = $custom1;
		$this->custom2 = $custom2;
		$this->custom3 = $custom3;
	}
}
