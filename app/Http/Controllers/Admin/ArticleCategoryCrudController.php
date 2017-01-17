<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleCategoryRequest as StoreRequest;
use App\Http\Requests\ArticleCategoryRequest as UpdateRequest;

class ArticleCategoryCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\ArticleCategory");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article-category');
        $this->crud->setEntityNameStrings('article category', 'article categories');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('name', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addColumn([
                                'name' => 'slug',
                                'label' => 'Slug',
                            ]);
        $this->crud->addColumn([
                                'label' => 'Parent',
                                'type' => 'select',
                                'name' => 'parent_id',
                                'entity' => 'parent',
                                'attribute' => 'name',
                                'model' => "App\Models\ArticleCategory",
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'name',
                                'label' => 'Name',
                            ]);
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'hint' => 'Will be automatically generated from your name, if left empty.',
                                // 'disabled' => 'disabled'
                            ]);
        $this->crud->addField([
                                'label' => 'Parent',
                                'type' => 'select',
                                'name' => 'parent_id',
                                'entity' => 'parent',
                                'attribute' => 'name',
                                'model' => "App\Models\ArticleCategory",
                            ]);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
