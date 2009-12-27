<?php
/**
 * A class which provides all the functions to interact with the 
 * search feature of the IMDb iPhone API.
 * 
 * @package Imdbphp
 * @class Imdbphp_Search
 * @extends Imdbphp_Base
 * @author John McClane
 * @copyright John McClane 2009
 * @version 0.9.0
 */

require_once (dirname(__FILE__)."/Base.php");

class Imdbphp_Search extends Imdbphp_Base {
	####################################################
	# OVERRIDDEN METHODS                               #
	####################################################
	/**
	 * Constructor method.
	 * 
	 * @param  string       $locale 		(Optional) Localization Parameter in the Format en_US.
	 * @return Imdbphp_Search
	 */
	public function __construct($locale = null) 
	{	
		// call the parent constructor
		if ($locale) {
			parent::__construct( $locale );
		} else {
			parent::__construct();
		}
	}
	
	####################################################
	# PUBLIC METHODS                                   #
	####################################################
	/**
	 * Makes the search request and returns the result 
	 *
	 * @param  string $searchterm 	Search term for which should be searched.
	 * @return string $searchterm 	Returns the search results as a JSON formatted string.
	 */
	public function getSearchResults($searchterm)
	{
		if(!$searchterm)
		{
			throw new Exception ('getSearchResults(): A searchterm is required.');
		} else {
			$q['q'] = urlencode($searchterm);
			return $this->makeRequest('/find', $q);
		}
	}
}