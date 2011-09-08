<?php

require_once 'app/model/db/sqldb.php';

class MovieDAO {
	
	private static $GET_MOVIE_DETAILS = "select * from movie where movieid = ?";
	private static $GET_MOVIE_CREW = "select * from moviecrew mc, crew c where mc.movieid = ? and mc.crewid = c.crewid";
	private static $GET_MOVIE_REVIEWS = "select * from moviereview mr, user_account u where movieid = ? and  mr.userid = u.userid";
	
	function get_movie_details($movieid) {
		$db = new SqlDB();
		$result = $db->execute_query(MovieDAO::$GET_MOVIE_DETAILS, array('i', $movieid));
		return $result;
	}
	
	function get_movie_crew($movieid) {
		$db = new SqlDB();
		$result = $db->execute_query(MovieDAO::$GET_MOVIE_CREW, array('i', $movieid));
		return $result;
	}
	
	function get_movie_reviews($movieid) {
		$db = new SqlDB();
		$result = $db->execute_query(MovieDAO::$GET_MOVIE_REVIEWS, array('i', $movieid));
		return $result;
	}
	
}
