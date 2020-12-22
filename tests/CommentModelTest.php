<?php

/**
 * CommentModelTest Test Class
 * @file: CommentModelTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-09-2020
 */

use PHPUnit\Framework\TestCase;

use App\Models\BaseModel;

use App\Models\CommentModel;


final class CommentModelTest extends TestCase
{

    protected $commentModel;

    public function setup()
    {

        $dbh = new PDO('mysql:hostname=localhost;dbname=capstone', 'wdd', 'wdd');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        BaseModel::init($dbh);
        $this->commentModel = new CommentModel();

    }

    /**
     * [testGetAllCommentsReturnsArray description]
     * @return void
     */
    public function testGetAllCommentsReturnsArray()
    {
        $model = $this->commentModel;
        $comment = $model->all(); // BaseModel all()
        $this->assertIsArray($comment);
    }

    /**
     * [testGetOneCommentReturnsArrayOfOneComment description]
     * @return void
     */
    public function testGetOneCommentReturnsArrayOfOneComment()
    {
        $model = $this->commentModel;
        $comment = $model->one(3);
        $this->assertArrayHasKey('comment', $comment);
    }

}