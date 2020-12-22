<?php

/**
 * CategoryModelTest Test Class
 * @file: CategoryModelTest.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-09-2020
 */

use PHPUnit\Framework\TestCase;

use App\Models\BaseModel;

use App\Models\CategoryModel;


final class CategoryModelTest extends TestCase
{

    protected $categoryModel;

    public function setup()
    {

        $dbh = new PDO('mysql:hostname=localhost;dbname=capstone', 'wdd', 'wdd');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        BaseModel::init($dbh);
        $this->categoryModel = new CategoryModel();

    }

    /**
     * [testGetAllCategoriesReturnsArray description]
     * @return void
     */
    public function testGetAllCategoriesReturnsArray()
    {
        $model = $this->categoryModel;
        $category = $model->all(); // BaseModel all()
        $this->assertIsArray($category);
    }

    /**
     * [testGetOneCategoryReturnsArrayOfOneCategorydescription]
     * @return void
     */
    public function testGetOneCategoryReturnsArrayOfOneCategory()
    {
        $model = $this->categoryModel;
        $category = $model->one(1);
        $this->assertArrayHasKey('name', $category);
    }

}