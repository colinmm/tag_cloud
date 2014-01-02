<?php
	class add_tags {

        //Add tags to database
        public function addTags($tag, $section) {

            $db = Dbconn::getDB();

            //$tag = new tag_category();
            //$tagname = $tag->getTag();

            $query = "INSERT INTO tags (tag, article_ref) VALUES ('$tag', '$section')";
            $db->exec($query);
        }

       //Retrieve tags from database
       public function selectTag($section) {

            $db = Dbconn::getDB();
            $sqlquery = "SELECT * FROM tags WHERE article_ref = '$section'";
           	$tagset = $db->query($sqlquery);
            $tags = array();

            foreach ($tagset as $page_tag) {
                $tag = new Tag(
                	$page_tag['tag_id'],
                    $page_tag['tag'],
                    $page_tag['article_ref'],
                    $page_tag['users_usr_id'] //Using this column to affect css class
                    );
                $tag->getID($page_tag['tag_id']);
                $tag->getTag($page_tag['tag']);
                $tag->getArticle_Ref($page_tag['article_ref']);
                $tag->getCloud_Class($page_tag['users_usr_id']);
                $tags[] = $tag;
            }

        	return $tags;
   		}

	   //Retrieve tags based on id
	   public function selectTagByTag($tag) {

            $db = Dbconn::getDB();
            $sqlquery = "SELECT * FROM tags WHERE tag = '$tag'";
           	$tagset = $db->query($sqlquery);
            $tags = array();

            foreach ($tagset as $page_tag) {
                $tag = new Tag(
	            	$page_tag['tag_id'],
	                $page_tag['tag'],
	                $page_tag['article_ref'],
	                $page_tag['users_usr_id'] //using this column to affect css class //added 16/05/2013
                );
                $tag->getID($page_tag['tag_id']);
                $tag->getTag($page_tag['tag']);
                $tag->getArticle_Ref($page_tag['article_ref']);
                $tag->getCloud_Class($page_tag['users_usr_id']); //added 16/05/2013
                $tags[] = $tag;
        	}
	        return $tags;
	   	}

        //Deletes tag based on comparison
        public function deleteTag($tag, $article) {
            $db = Dbconn::getDB();
            $query = "DELETE FROM tags WHERE tag = '$tag' AND article_ref = '$article'";
            $db->exec($query);
	   	}

	    //Update users_usr_id which will be used to alter css class
        public function updateTagCloudClass($tag) {
            $db = Dbconn::getDB();
            $query = "UPDATE tags SET users_usr_id = users_usr_id +1 WHERE tag_id = '$tag'";
            $db->exec($query);
	   	}
    }

?>