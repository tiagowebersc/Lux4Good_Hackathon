<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ObjectiveRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ObjectiveCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ObjectiveCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Objective');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/objective');
        $this->crud->setEntityNameStrings('objective', 'objectives');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(['name' => 'campaign.description', 'type' => 'text', 'label' => 'Campaign']);
        $this->crud->addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
    }

    protected function setupCreateOperation()
    {
        $this->setupUpdateOperation();
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
    
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(ObjectiveRequest::class);
        
        $this->crud->addField([  // Select
            'label' => "Campaign",
            'type' => 'select',
            'name' => 'campaign_id', // the db column for the foreign key
            'entity' => 'campaign', // the method that defines the relationship in your Model
            'attribute' => 'description', // foreign key attribute that is shown to user
            'model' => "App\Models\Campaign",
         ]);
        
        $this->crud->addField(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }
}
