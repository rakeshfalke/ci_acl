<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Output extends CI_Output {
	function _display_cache(&$CFG, &$URI)
	{
		/* Simple Test for Ip Address */
		if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' ) {
			return FALSE;
		}
		/* Call the parent function */
		return parent::_display_cache($CFG,$URI);
	}
}