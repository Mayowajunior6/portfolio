<?php

/**
 * ProjectModel Child Class
 * @file: ProjectModel.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-09-2020
 */

namespace App\Models;

class ProjectModel extends BaseModel
{

    protected $table = 'projects';

    protected $key = 'project_id';

    /**
     * All Projects by Category ID
     * @param  int $category_id 
     * @return array
     */
    public function allProjectsByCategory($category_id)
    {
        $query = "SELECT * FROM projects 
                WHERE categories_id = :categories_id";

        $stmt = self::$dbh->prepare($query);
        $params = array(':categories_id' => $category_id);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Getting project results by search parameter
     * @param  string $searchterm
     * @return array
     */
    public function getProjectBySearch($searchterm)
    {
        // Wuery for Search Bar 
        $query = 'SELECT * FROM projects 
                  WHERE
                  title LIKE :searchterm1
                  OR 
                  description LIKE :searchterm2
                  OR 
                  detailed_description LIKE :searchterm3
                  OR 
                  project_id LIKE :searchterm4
                  OR 
                  categories_id LIKE :searchterm5
                  OR 
                  technology LIKE :searchterm6
                  OR 
                  status LIKE :searchterm7';

        $stmt = self::$dbh->prepare($query); 

        $params = array(
            ':searchterm1' => "%{$searchterm}%",
            ':searchterm2' => "%{$searchterm}%",
            ':searchterm3' => "%{$searchterm}%",
            ':searchterm4' => "%{$searchterm}%",
            ':searchterm5' => "%{$searchterm}%",
            ':searchterm6' => "%{$searchterm}%",
            ':searchterm7' => "%{$searchterm}%"
        ); 

        $stmt->execute($params); 

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC); 

        return $result; 
    }

    /**
     * save a project in database table
     * @param  array $project $_POST values
     * @param  Object $dbh  [description]
     * @return Int Last Insert Id
     */
    function saveProject($project) :int
    {

          // 2. Create query
            // Break query into multiple lines to
            // make debugging easier in the case 
            // of errors
            $query = "INSERT INTO projects
                        (
                        title, 
                        categories_id, 
                        description,
                        detailed_description,
                        type,
                        technology,
                        image,
                        price,
                        status,
                        views, 
                        start_date,
                        end_date
                        ) 
                        VALUES 
                        (
                        :title, 
                        :categories_id, 
                        :description,
                        :detailed_description,
                        :type,
                        :technology,
                        :image,
                        :price,
                        :status,
                        :view, 
                        :start_date,
                        :end_date
                    )";

            // 3. Prepare the query to be executed
            $stmt = self::$dbh->prepare($query);


            // 4. Bind values safely (escaped) to place holders 
            $params = array(
                ':title' => $project['title'], 
                ':categories_id' => $project['categories_id'], 
                ':description' => $project['description'],
                ':detailed_description' => $project['detailed_description'],
                ':type' => $project['type'],
                ':technology' => $project['technology'],
                ':image' => $project['image'],
                ':price' => $project['price'],
                ':status' => $project['status'],
                ':view' => $project['view'], 
                ':start_date' => $project['start_date'], 
                ':end_date' => $project['end_date']
            );


            // 5. execute
            $stmt->execute($params);

            return self::$dbh->lastInsertId();

    }

    /**
     * update a project in database table
     * @param  array $project $_POST values
     * @param  Object $dbh  [description]
     * @return Int row Count
     */
    function updateProject($project) :int
    {

          // 2. Create query
            // Break query into multiple lines to
            // make debugging easier in the case 
            // of errors
            $query = "UPDATE projects
                        SET
                        title=:title, 
                        categories_id=:categories_id, 
                        description=:description,
                        detailed_description=:detailed_description,
                        type=:type,
                        technology=:technology,
                        image=:image,
                        price=:price,
                        status=:status,
                        views=:view, 
                        start_date=:start_date,
                        end_date=:end_date
                        WHERE
                        project_id=:project_id";
                        

            // 3. Prepare the query to be executed
            $stmt = self::$dbh->prepare($query);


            // 4. Bind values safely (escaped) to place holders 
            $params = array(
                ':title' => $project['title'], 
                ':categories_id' => $project['categories_id'], 
                ':description' => $project['description'],
                ':detailed_description' => $project['detailed_description'],
                ':type' => $project['type'],
                ':technology' => $project['technology'],
                ':image' => $project['image'],
                ':price' => $project['price'],
                ':status' => $project['status'],
                ':view' => $project['view'], 
                ':start_date' => $project['start_date'], 
                ':end_date' => $project['end_date'],
                ':project_id' => $project['project_id']
            );


            // 5. execute
            $stmt->execute($params);

            return $stmt->rowCount();

    }

    /**
     * delete a project in database table
     * @param  integer $project_id
     * @param  Object $dbh  [description]
     * @return Int row count
     */
    function deleteProject($project_id)
    {

          // 2. Create query
            // Break query into multiple lines to
            // make debugging easier in the case 
            // of errors
            $query = "DELETE FROM projects
                        WHERE
                        project_id=:project_id";

            // 3. Prepare the query to be executed
            $stmt = self::$dbh->prepare($query);


            // 4. Bind values safely (escaped) to place holders 
            $params = array(
                ':project_id' => $project_id
            );


            // 5. execute
            $stmt->execute($params);

            return $stmt->rowCount();
    }

    /**
     * Function to select sum of views
     * @return int
     */
    public function allViews()
    {
        $query = "SELECT SUM(views) AS total_views FROM projects";

        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Function to select project with max price
     * @return int
     */
    public function maxPriceProject()
    {
        $query = "SELECT MAX(price) AS maxumim_price FROM projects";

        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Function to select project avg price
     * @return int
     */
    public function avgPriceProject()
    {
        $query = "SELECT AVG(price) AS averaage_price FROM projects";

        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }


}