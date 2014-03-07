<?php
	// Get all the articles of the blog
	function get_all_articles() {
		$conn = open_db();
		// select all articles ordered by date and time and calculate number of rows found
		$query = "SELECT SQL_CALC_FOUND_ROWS * FROM articles ORDER BY date_time DESC";
		$result = mysql_query($query);
		$list = array();
		if($result){
			while($row = mysql_fetch_assoc($result)){
				$list[] = $row;
			}
		}
		// Get total number of articles
		$result2 = mysql_query("SELECT FOUND_ROWS()");
		$row = mysql_fetch_array($result2);
		$rows_found = $row[0];
		close_db($conn);
		// convert result to VO
		$article_list=array();
		for($i=0; $i < $rows_found; $i++) {
			$article_list[$i] = new Article(
				$list[$i]["id"], $list[$i]["date_time"],
				$list[$i]["title_en"], $list[$i]["title_ua"],
				$list[$i]["description_en"], $list[$i]["description_ua"],
				$list[$i]["body_en"], $list[$i]["body_ua"]);
			// add sth with image
		}
		return array($article_list, $rows_found);
	}

	// Get an article detailes by id
	function get_article($postid) {
		$conn = open_db();
		$query = "SELECT * FROM articles WHERE id=" . $postid;
		$result = mysql_query($query);
		$list = array();
		if($result){
			while($row = mysql_fetch_assoc($result)){
				$list[] = $row;
			}
		}
		close_db($conn);
		$article = new Article(
				$list[0]["id"], $list[0]["date_time"],
				$list[0]["title_en"], $list[0]["title_ua"],
				$list[0]["description_en"], $list[0]["description_ua"],
				$list[0]["body_en"], $list[0]["body_ua"]);
		return $article;
	}
?>
