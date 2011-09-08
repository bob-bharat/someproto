<?php
session_start();
require_once 'app/model/dao/review/ReviewDAO.php';
$dao = new ReviewDAO();
$review = $_POST['review'];
$rating = $_POST['rating'];


$result = $dao->insert_movie_review($_POST['movieid'],$_SESSION['userid'],$review,$rating);
header ('Location: summary.php?movieid='.$_POST['movieid'] );
?>
