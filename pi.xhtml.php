<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Copyright (C) 2005 - 2011 EllisLab, Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
ELLISLAB, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Except as contained in this notice, the name of EllisLab, Inc. shall not be
used in advertising or otherwise to promote the sale, use or other dealings
in this Software without prior written authorization from EllisLab, Inc.
*/

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
 * @copyright		Copyright (c) 2005 - 2011, EllisLab, Inc.
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

