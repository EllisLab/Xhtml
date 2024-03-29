<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Copyright (C) 2005 - 2021 Packet Tide, LLC

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
PACKET TIDE, LLC BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Except as contained in this notice, the name of Packet Tide, LLC shall not be
used in advertising or otherwise to promote the sale, use or other dealings
in this Software without prior written authorization from Packet Tide, LLC.
*/

/**
 * Xhtml Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Packet Tide
 * @copyright		Copyright (C) 2005 - 2021 Packet Tide, LLC
 * @link			https://github.com/EllisLab/Xhtml
 */
class Xhtml {

	public $return_data;

	/**
	* Light xhtml
	*
	* @access	public
	* @param	string
	* @return	string
	*/
	function light($str = '')
	{
		if ($str == '')
		{
			$str = ee()->TMPL->tagdata;
		}

		ee()->load->library('typography');
		return ee()->typography->format_characters($str);
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

		$str = ($str == '') ? ee()->TMPL->tagdata : $str;

		ee()->load->library('typography');
		return ee()->typography->auto_typography($str);
	}

	// --------------------------------------------------------------------
}
