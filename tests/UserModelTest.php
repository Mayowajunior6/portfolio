<?php

/**
 * UserModelTest Test Class
 * @file: UserModelTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-08-2020
 */

use PHPUnit\Framework\TestCase;

use App\Models\BaseModel;

use App\Models\UserModel;


final class UserModelTest extends TestCase
{

    protected $userModel;

    public function setup()
    {

        $dbh = new PDO('mysql:hostname=localhost;dbname=capstone', 'wdd', 'wdd');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        BaseModel::init($dbh);
        $this->userModel = new UserModel();

    }

    /**
     * [testGetAllUsersReturnsArray description]
     * @return void
     */
    public function testGetAllUsersReturnsArray()
    {
        $model = $this->userModel;
        $user = $model->all(); // BaseModel all()
        $this->assertIsArray($user);
    }

    /**
     * [testGetOneUserReturnsArrayOfOneUser description]
     * @return void
     */
    public function testGetOneUserReturnsArrayOfOneUser()
    {
        $model = $this->userModel;
        $user = $model->one(1);
        $this->assertArrayHasKey('email', $user);
    }

}