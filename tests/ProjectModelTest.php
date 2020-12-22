<?php

/**
 * ProjectModelTest Test Class
 * @file: ProjectModelTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-09-2020
 */

use PHPUnit\Framework\TestCase;

use App\Models\BaseModel;

use App\Models\ProjectModel;


final class ProjectModelTest extends TestCase
{

    protected $projectModel;

    public function setup()
    {

        $dbh = new PDO('mysql:hostname=localhost;dbname=capstone', 'wdd', 'wdd');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        BaseModel::init($dbh);
        $this->projectModel = new ProjectModel();

    }

    /**
     * [testGetAllProjectsReturnsArray description]
     * @return void
     */
    public function testGetAllProjectsReturnsArray()
    {
        $model = $this->projectModel;
        $project = $model->all(); // BaseModel all()
        $this->assertIsArray($project);
    }

    /**
     * [testGetOneProjectReturnsArrayOfOneProject description]
     * @return void
     */
    public function testGetOneProjectReturnsArrayOfOneProject()
    {
        $model = $this->projectModel;
        $project = $model->one(2);
        $this->assertArrayHasKey('title', $project);
    }

}