<?php

/**
 * CommentModel Child Class
 * @file: CommentModel.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-09-2020
 */

namespace App\Models;

class CommentModel extends BaseModel
{

    protected $table = 'comments';

    protected $key = 'comment_id';

    /**
	 * SELECT all Comment to specific Project in database table
	 * @param  $project_id
	 * @param  Object $dbh  [description]
	 * @return array
	 */
    public function allCommentProject($project_id){
        $query = 'SELECT comments.*, 
					users.first_name, 
					projects.title, 
					projects.project_id 
					FROM comments , projects, users 
					WHERE comments.project_id = projects.project_id 
					AND comments.user_id = users.id AND comments.project_id = :project_id 
					ORDER BY comment_id ASC';

		$stmt = static::$dbh->prepare($query);

        $params = array(
            'project_id' => $project_id
        );

        $stmt->execute($params);

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;

    }

    /**
     * Select all comment from specific user
     * @param  $user_id
     * @return array
     */
    public function allUserComment($user_id){
        $query = 'SELECT comments.*, 
					users.first_name, 
					projects.title, 
					projects.project_id 
					FROM comments , projects, users 
					WHERE comments.project_id = projects.project_id 
					AND comments.user_id = users.id
					AND comments.user_id = :user_id 
					ORDER BY comment_id ASC';

		$stmt = static::$dbh->prepare($query);

        $params = array(
            'user_id' => $user_id
        );

        $stmt->execute($params);

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;

    }

    /**
	 * save a comments in database table
	 * @param  array $comment $_POST values
	 * @param  Object $dbh  [description]
	 * @return void
	 */
	function saveComment($comment)
	{

	    	// 2. Create query
	        // Break query into multiple lines to
	        // make debugging easier in the case 
	        // of errors
	        $query = "INSERT INTO comments
	                    (
	                    user_id, 
	                    project_id, 
	                    comment
	                    ) 
	                    VALUES 
	                    (
	                    :user_id, 
	                    :project_id, 
	                    :comment
	                )";

	        // 3. Prepare the query to be executed
	        $stmt = self::$dbh->prepare($query);


	        // 4. Bind values safely (escaped) to place holders 
	        $params = array(
	        	':user_id' => $comment['user_id'], 
	            ':project_id' => $comment['project_id'], 
	            ':comment' => $comment['comment']
	        );


	        // 5. execute
	        $stmt->execute($params);

	}

	/**
     * Function to select only project with comment and comment total
     * @return array
     */
    public function allCommentedProject()
    {
        $query = "SELECT p.title, count(p.title)total
					FROM projects p
					JOIN comments c ON p.project_id = c.project_id
					group by p.project_id";

        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}