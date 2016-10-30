<?php
	session_start();
	include "../includes/db.php";
	include "../functions/function.php";
		$myapp= new app;
	if ($_GET['comment']) {
		$del_id = $_GET['comment'];
		$myapp->delete("comment",$del_id);
		header("location:view_comment.php?c=1");
	}
	if ($_GET['artist']) {
		$del_id = $_GET['artist'];
		$myapp->delete("profile",$del_id);
		header("location:view_profile.php?art=2");
	}
	if ($_GET['article']) {
		$del_id = $_GET['article'];
		$yes=$myapp->deletefile('article',$del_id);
		if($yes){
			$myapp->delete("article",$del_id);
			header("location:view_article.php?cle=3");
		}else{
			header("location:view_article.php");
		}
	}
	if ($_GET['song']) {
		$del_id = $_GET['song'];
		
		$yes=$myapp->deletesong('song',$del_id);
		if($yes){
			$myapp->delete("song",$del_id);
			header("location:view_song.php?s=4");
		}else{
			header("location:view_song.php");
		}
	}
	if ($_GET['instrumental']) {
		$del_id = $_GET['instrumental'];
		$yes=$myapp->deleteinstrumental('instrumental',$del_id);
		if($yes){
			$myapp->delete("instrumental",$del_id);
			header("location:view_instrumentals.php?i=5");
		}else{
			header("location:view_instrumentals.php");
		}
	}
	if ($_GET['user']) {
		$del_id = $_GET['user'];
		$myapp->delete("users",$del_id);
		header("location:view_user.php?u=6");
	}
	if ($_GET['genre']) {
		$del_id = $_GET['genre'];
		$myapp->delete("class_table",$del_id);
		header("location:view_musicgenre.php?cla=7");
	}
	if ($_GET['gallery']) {
		$del_id = $_GET['gallery'];
		$yes=$myapp->deletefile('gallery',$del_id);
		if($yes){
			$myapp->delete("gallery",$del_id);
			header("location:view_gallery.php?g=8");
		}else{
			header("location:view_gallery.php");
		}
		
	}
?>