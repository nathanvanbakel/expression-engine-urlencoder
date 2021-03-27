<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	// Encoding a string for use in a URL with the PHP rawurlencode() function https://www.php.net/manual/en/function.rawurlencode.php or urlencode() function: https://www.php.net/manual/en/function.urlencode.php.
	// Example input: <p>Something <strong>with</strong> all <em>sorts</em> of <a href="something.html" title="Testing title">tags</a>.</p>
	// Example output: %3Cp%3ESomething%20%3Cstrong%3Ewith%3C%2Fstrong%3E%20all%20%3Cem%3Esorts%3C%2Fem%3E%20of%20%3Ca%20href%3D%22something.html%22%20title%3D%22Testing%20title%22%3Etags%3C%2Fa%3E.%3C%2Fp%3E. 
	// Example usage: {exp:urlencode}{your_field}{/exp:urlencode}
		
class urlencoder {
	
	public static $name         = 'Voorloper.com: urlencoder';
	public static $version      = '1.0.1';
	public static $author       = 'Nathan van Bakel';
	public static $author_url   = 'https://www.voorloper.com/';
	public static $description  = 'Gets a string ready for safe usage in the URL';
	public static $typography   = FALSE;
	
	public $return_data = "";
	
	public function __construct() {
	
	  // Get the information between {exp:urlencode} and {/exp:urlencode}
		$string = ee()->TMPL->tagdata;
		
		if (ee()->TMPL->fetch_param('raw') != "no") {
			// RAW (http://www.faqs.org/rfcs/rfc3986.html) Encode the information
			// rawurlencode encodes space to %20
			$return_data = rawurlencode($string);
		} else {
			// urlencode encodes space to +
			$return_data = urlencode($string);
		}

    // Return the encoded data.
		$this->return_data = $return_data;
	}

}

//EOF
