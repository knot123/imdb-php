<?php
/**
 * A class which provides all the functions to interact with the 
 * person features of the IMDb iPhone API.
 * 
 * @package Imdbphp
 * @class Imdbphp_Person
 * @extends Imdbphp_Base
 * @author http://code.google.com/p/imdb-php/
 * @license    http://www.opensource.org/licenses/bsd-license.php     New BSD License
 * @version 0.9.0
 */

require_once (dirname(__FILE__)."/Base.php");

class Imdbphp_Person extends Imdbphp_Base {
	####################################################
	# OVERRIDDEN METHODS                               #
	####################################################
	/**
	 * Constructor method.
	 * 
	 * @param  string       $locale 		(Optional) Localization Parameter in the Format en_US.
	 * @return Imdbphp_Person
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
	 * Get a persons maindetails formatted as a JSON string.
	 * 
	 * A Person ID (nm0000000) is required.
	 *
	 * @param  string $nconst 	Person ID.
	 * @return string  			JSON formatted string.
	 */
	public function getMaindetails($nconst)
	{
		if(!$nconst)
		{
			throw new Exception ('getMaindetails(): A Person ID is required.');
		} else {
			$arg['nconst'] = $nconst;
			return $this->makeRequest('/name/maindetails', $arg);
		}
	}
	
	/**
	 * Get a persons photo urls formatted as a JSON string.
	 * 
	 * A Person ID (nm0000000) is required.
	 *
	 * @param  string $nconst 	Person ID.
	 * @return string  			JSON formatted string.
	 */
	public function getPhotos($nconst)
	{
		if(!$nconst)
		{
			throw new Exception ('getPhotos(): A Person ID is required.');
		} else {
			$arg['nconst'] = $nconst;
			return $this->makeRequest('/name/photos', $arg);
		}
	}
	
	/**
	 * Get a persons filmography formatted as a JSON string.
	 * 
	 * A Person ID (nm0000000) is required.
	 *
	 * @param  string $nconst 	Person ID.
	 * @return string  			JSON formatted string.
	 */
	public function getFilmography($nconst)
	{
		if(!$nconst)
		{
			throw new Exception ('getFilmography(): A Person ID is required.');
		} else {
			$arg['nconst'] = $nconst;
			return $this->makeRequest('/name/filmography', $arg);
		}
	}
	
	/**
	 * Get a persons trivia formatted as a JSON string.
	 * 
	 * A Person ID (nm0000000) is required.
	 *
	 * @param  string $nconst 	Person ID.
	 * @return string  			JSON formatted string.
	 */
	public function getTrivia($nconst)
	{
		if(!$nconst)
		{
			throw new Exception ('getTrivia(): A Person ID is required.');
		} else {
			$arg['nconst'] = $nconst;
			return $this->makeRequest('/name/trivia', $arg);
		}
	}
	
	/**
	 * Get a persons quotes formatted as a JSON string.
	 * 
	 * A Person ID (nm0000000) is required.
	 *
	 * @param  string $nconst 	Person ID.
	 * @return string  			JSON formatted string.
	 */
	public function getQuotes($nconst)
	{
		if(!$nconst)
		{
			throw new Exception ('getQuotes(): A Person ID is required.');
		} else {
			$arg['nconst'] = $nconst;
			return $this->makeRequest('/name/quotes', $arg);
		}
	}
}
