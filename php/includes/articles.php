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
				$list[$i]["body_en"], $list[$i]["body_ua"], $list[$i]["image_id"]);
			// add sth with image
		}
		return $article_list;
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
		$article = new Article($list[0]["id"], $list[0]["date_time"],
				$list[0]["title_en"], $list[0]["title_ua"],
				$list[0]["description_en"], $list[0]["description_ua"],
				$list[0]["body_en"], $list[0]["body_ua"], $list[0]["image_id"]);
		return $article;
	}

    function get_image($id) {
        $conn = open_db();
        $query = "SELECT image_name FROM images WHERE id=" . $id;
        $result = mysql_query($query);
        $list = array();
        if($result){
            while($row = mysql_fetch_assoc($result)){
                $list[] = $row;
            }
        }
        close_db($conn);
        $name = $list[0]["image_name"];
        return $name;
    }

	function insert_article($article) {
		$conn = open_db();
        $query = "INSERT INTO articles (date_time, title_en, 
            title_ua, description_en, description_ua, 
            body_en, body_ua, image_id) 
        VALUES ('" .
            $article->getDateTime() . "', '" .
            $article->getTitleEN(). "', '" .
            $article->getTitleUA(). "', '" .
            $article->getDescEN(). "', '" .
            $article->getDescUA(). "', '" .
            $article->getBodyEN(). "', '" .
            $article->getBodyUA(). "', '" .
            $article->getImageId() . "')";
        $result = mysql_query($query);
        $id = mysql_insert_id();

        close_db();
        return $id;
	}

	function delete_article($article_id) {
		$conn = open_db();
        $query = "DELETE FROM articles WHERE id=$article_id";
        $result = mysql_query($query);
        close_db();
	}

	function update_article($article) {
        $conn = open_db();
        $query = "UPDATE articles 
        SET title_en='" . $article->getTitleEN() . "',
        title_ua='" . $article->getTitleUA() . "',
        description_en='" . $article->getDescEN() . "',
        description_ua='" . $article->getDescUA() . "',
        body_en='" . $article->getBodyEN() . "',
        body_ua='" . $article->getBodyUA() . "' 
        WHERE id=" . $article->getId();
        echo $query;
        $result = mysql_query($query);
        echo $result;
        close_db();

        return $result;
	}

    function insert_image($name, $type, $size) {
        $conn = open_db();
        $query = "INSERT INTO images (image_name, image_type, image_size) 
        VALUES ('$name', '$type', '$size')";
        echo $query;
        $result = mysql_query($query);
        $id = mysql_insert_id();

        close_db();
        return $id;
    }
?>
