<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Slugger Helper
 *
 * Outputs the given string as a web safe filename
 */
if ( ! function_exists('slugger'))
{
	function slugger($string, $replace = array(), $delimiter = '-', $locale = 'en_US.UTF-8', $encoding = 'UTF-8') {
		if (!extension_loaded('iconv')) {
			throw new Exception('iconv module not loaded');
		}
		// Save the old locale and set the new locale
		$oldLocale = setlocale(LC_ALL, '0');
		setlocale(LC_ALL, $locale);
		$clean = iconv($encoding, 'ASCII//TRANSLIT', $string);
		if (!empty($replace)) {
			$clean = str_replace((array) $replace, ' ', $clean);
		}
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower($clean);
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		$clean = trim($clean, $delimiter);
		// Revert back to the old locale
		setlocale(LC_ALL, $oldLocale);
		return $clean;
	}
}