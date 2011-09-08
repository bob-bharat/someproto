<?php

require_once 'app/model/db/sqldb.php';

class MovieSearchDAO {
	
	private static $SEARCH_MOVIE_BY_NAME = "select * from movie where movie_name like ?";
	
	
	function search_movie_by_name($searchString) {
		$db = new SqlDB();
		$result = $db->execute_query(MovieSearchDAO::$SEARCH_MOVIE_BY_NAME, array('s', "%".$searchString."%"));
		return $result;
	}
}
