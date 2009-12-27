<?php
/**
 * A class which provides all the functions to interact with the 
 * movie/series features of the IMDb iPhone API.
 * 
 * @package Imdbphp
 * @class Imdbphp_Movie
 * @extends Imdbphp_Base
 * @author http://code.google.com/p/imdb-php/
 * @license    http://www.opensource.org/licenses/bsd-license.php     New BSD License
 * @version 0.9.0
 */

require_once (dirname(__FILE__)."/Base.php");

class Imdbphp_Movie extends Imdbphp_Base {
	####################################################
	# OVERRIDDEN METHODS                               #
	####################################################
	/**
	 * Constructor method.
	 * 
	 * @param  string       $locale 		(Optional) Localization Parameter in the Format en_US.
	 * @return Imdbphp_Movie
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
	 * Get the maindetails for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getMaindetails($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getMaindetails(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/maindetails', $arg);
		}
	}
	
	/**
	 * Get the photo urls for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getPhotos($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getPhotos(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/photos', $arg);
		}
	}
	
	/**
	 * Get the plot summary for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getPlotSummary($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getPlotSummary(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/plot', $arg);
		}
	}
	
	/**
	 * Get the synopsis for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param string $tconst  (Required) Title ID.
	 * @return string  JSON formatted string.
	 */
	public function getSynopsis($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getSynopsis(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/synopsis', $arg);
		}
	}
	
	/**
	 * Get the complete cast & crew list for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getAllCast($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getAllCast(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/fullcredits', $arg);
		}
	}
	
	/**
	 * Get the external review url list for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getExternalReviews($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getExternalReviews(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/external_reviews', $arg);
		}
	}
	
	/**
	 * Get the user review url list for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getUserReviews($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getUserReviews(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/usercomments', $arg);
		}
	}
	
	/**
	 * Get the parental guide for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getParentalGuide($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getParentalGuide(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/parentalguide', $arg);
		}
	}
	
	/**
	 * Get the trivia for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getTrivia($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getTrivia(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/trivia', $arg);
		}
	}
	
	/**
	 * Get the quotes for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getQuotes($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getQuotes(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/quotes', $arg);
		}
	}
	
	/**
	 * Get the goofs for a movie/series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getGoofs($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getGoofs(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/goofs', $arg);
		}
	}
	
	/**
	 * Get a episode list sorted by season for a specified series formatted as a JSON string.
	 * 
	 * A title ID (tt0000000) is required.
	 *
	 * @param  string $tconst 	Title ID.
	 * @return string  			JSON formatted string.
	 */
	public function getEpisodesbySeason($tconst)
	{
		if(!$tconst)
		{
			throw new Exception ('getEpisodesbySeason(): A title ID is required.');
		} else {
			$arg['tconst'] = $tconst;
			return $this->makeRequest('/title/episodes', $arg);
		}
	}
}
