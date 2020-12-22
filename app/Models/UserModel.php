<?php

/**
 * UserModel Child Class
 * @file: UserModel.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-08-2020
 */

namespace App\Models;

class UserModel extends BaseModel
{

    protected $table = 'users';

    protected $key = 'id';

/**
 * save a user in database table
 * @param  array $user $_POST values
 * @param  Object $dbh  [description]
 * @return Int Last Insert Id
 */
function saveUser($user) :int
{

    	// 2. Create query
        // Break query into multiple lines to
        // make debugging easier in the case 
        // of errors
        $query = "INSERT INTO users
                    (
                    first_name, 
                    last_name, 
                    street,
                    city,
                    postal_code,
                    province,
                    country,
                    phone,
                    email,
                    age, 
                    password
                    ) 
                    VALUES 
                    (
                    :first_name, 
                    :last_name, 
                    :street,
                    :city,
                    :postal,
                    :province,
                    :country,
                    :phone,
                    :email,
                    :age, 
                    :password
                )";

        // 3. Prepare the query to be executed
        $stmt = self::$dbh->prepare($query);


        // 4. Bind values safely (escaped) to place holders 
        $params = array(
        	':first_name' => $user['first_name'], 
            ':last_name' => $user['last_name'], 
            ':street' => $user['street'],
            ':city' => $user['city'],
            ':postal' => $user['postal'],
            ':province' => $user['province'],
            ':country' => $user['country'],
            ':phone' => $user['phone'],
            ':email' => $user['email'],
            ':age' => $user['age'], 
            ':password' => password_hash($user['password'], PASSWORD_DEFAULT)
        );


        // 5. execute
        $stmt->execute($params);

        return self::$dbh->lastInsertId();

}

/**
 * Authenticating user with checking the email
 * @param  interger $user
 * @param  object $dbh
 * @return array OR boolean the user
 */
function authUser($user)
{
    // Create the query
    $query = "SELECT * FROM users WHERE email = :user_email";

    // Prepare the query
    $stmt = self::$dbh->prepare($query);

    // Bind the parameter(s)
    $params = array(
        ':user_email' => $user['email']
    );

    // Execute the query
    $stmt->execute($params);

    // Fetch the results
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

/**
 * Checking if email exist
 * @param  interger $user
 * @param  object $dbh
 * @return int
 */
function checkEmail($user)
{
    // Create the query
    $query = "SELECT * FROM users WHERE email = :user_email";

    // Prepare the query
    $stmt = self::$dbh->prepare($query);

    // Bind the parameter(s)
    $params = array(
        ':user_email' => $user['email']
    );

    // Execute the query
    $stmt->execute($params);

    return $stmt->rowCount();
}

/**
 * Checking privilege
 * @param  interger $user
 * @param  object $dbh
 * @return int
 */
function checkPrivilege($user)
{
    // Create the query
    $query = "SELECT * FROM admins WHERE email = :user_email";

    // Prepare the query
    $stmt = self::$dbh->prepare($query);

    // Bind the parameter(s)
    $params = array(
        ':user_email' => $user['email']
    );

    // Execute the query
    $stmt->execute($params);

    return $stmt->rowCount();
}

/**
 * Function to select all Log records
 * @return array
 */
public function allLog()
{
    $query = "SELECT * FROM log ORDER BY id DESC LIMIT 10";
    $stmt = self::$dbh->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

}