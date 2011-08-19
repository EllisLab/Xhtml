<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
						'pi_name'			=> 'XHTML',
						'pi_version'		=> '1.1',
						'pi_author'			=> 'Rick Ellis',
						'pi_author_url'		=> 'http://www.expressionengine.com/',
						'pi_description'	=> 'XHTML Typography Plugin',
						'pi_usage'			=> Xhtml::usage()
					);

/**
 * Xhtml Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			ExpressionEngine Dev Team
 * @copyright		Copyright (c) 2005 - 2009, EllisLab, Inc.
 * @link			http://expressionengine.com/downloads/details/xhtml_typography/
 */
class Xhtml {

	var $return_data;
	
	/**
	* Light xhtml
	*
	* @access	public
	* @param	string
	* @return	string
	*/
	function light($str = '')
	{
		$EE =& get_instance();
		
		if ($str == '')
		{
			$str = $EE->TMPL->tagdata;
		}
		
		$EE->load->library('typography');
		return $EE->typography->format_characters($str);
	}

	// --------------------------------------------------------------------		   

	/**
	* Full xhtml
	*
	* @access	public
	* @param	string
	* @return	string
	*/
	function full($str = '')
	{
		$EE =& get_instance();
		
		$str = ($str == '') ? $EE->TMPL->tagdata : $str;
		
		$EE->load->library('typography');
		return $EE->typography->auto_typography($str);
	}
	  
	// --------------------------------------------------------------------
	
	/**
	* Usage
	*
	* Plugin Usage
	*
	* @access	public
	* @return	string
	*/
	function usage()
	{
		ob_start(); 
		?>
		This plugin converts certain characters into typographically correct entities.

		Quotes are converted to curly quotes, hyphens into em-dashes, three periods into elipsis, etc.

		There are two ways to use this plugin depending on whether you want line breaks turned into &lt;p&gt; tags.

		The "light" version is used this way:

		{exp:xhtml:light}

		text you want processed

		{/exp:xhtml:light}


		The full version like this:

		{exp:xhtml:full}

		text you want processed

		{/exp:xhtml:full}


		Version 1.1
		******************
		- Updated plugin to be 2.0 compatible


		<?php
		$buffer = ob_get_contents();
	
		ob_end_clean(); 

		return $buffer;
	}

	// --------------------------------------------------------------------

}
// END CLASS

/* End of file pi.xhtml.php */
/* Location: ./system/expressionengine/third_party/xhtml/pi.xhtml.php */

