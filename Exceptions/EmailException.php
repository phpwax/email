<?php
/**
 *
 * @package PHP-Wax
 * @author Ross Riley
 **/
 
class WaxEmailException extends \RuntimeException {
  
	function __construct( $message, $help = "") {
  	parent::__construct( $message, "Email Send Error");
  }
}

