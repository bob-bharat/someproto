<?php

require_once 'app/model/db/sqldb.php';

class ReviewDAO {
	
	private static $INSERT_MOVIE_REVIEW ="insert into moviereview(movieid,userid,review,rating,date) values (?,?,?,?,'1/12/2011')";

	
	function insert_movie_review($movieid,$userid,$review,$rating) {
		$db = new SqlDB();
		$result = $db->execute_query(ReviewDAO::$INSERT_MOVIE_REVIEW, array('iisi', $movieid,$userid,$review,$rating),true);
		return $result;
	}
	
	
}
