<?php

require_once 'app/model/db/sqldb.php';

class UserDAO {
	
	private static $GET_USER = "SELECT *
							   FROM user_account
							   WHERE username = ? AND password = ?
							   LIMIT 1";
	
	private static $GET_USER_REVIEWS = "select * 
										from moviereview mr, user_account u, movie m
										where mr.userid = ? and mr.userid = u.userid and mr.movieid = m.movieid";
	
	function validate_user($username, $password) {
		$db = new SqlDB();
		$result = $db->execute_query(UserDAO::$GET_USER, array('ss',$username,$password));
		if(isset($result)) {
			session_start();
			$_SESSION['userid'] = $result[0]['userid'];
			$_SESSION['username'] = $result[0]['username'];
			return true;
		}
		return false;
	}
	
	function get_user_reviews($userid) {
		$db = new SqlDB();
		$result = $db->execute_query(UserDAO::$GET_USER_REVIEWS, array('s', $userid));
		return $result;
	}
}