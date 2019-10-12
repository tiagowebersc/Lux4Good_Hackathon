<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OutcomeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OutcomeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OutcomeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Outcome');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/outcome');
        $this->crud->setEntityNameStrings('outcome', 'outcomes');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(['name' => 'action.description', 'type' => 'text', 'label' => 'Action']);
        $this->crud->addColumn(['name' => 'age', 'type' => 'number', 'label' => 'Age']);
        $this->crud->addColumn(['name' => 'gender', 'type' => 'text', 'label' => 'Gender']);
    }

    protected function setupCreateOperation()
    {
        $this->setupUpdateOperation();
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
    
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(OutcomeRequest::class);

        $this->getActions();
        
        $this->crud->addField([  // Select
            'label' => "Action",
            'type' => 'select',
            'name' => 'action_id', // the db column for the foreign key
            'entity' => 'action', // the method that defines the relationship in your Model
            'attribute' => 'description', // foreign key attribute that is shown to user
            'model' => "App\Models\Action",
         
           ]);
        
        $this->crud->addField(['name' => 'age', 'type' => 'number', 'label' => 'Age']);
        $this->crud->addField(['name' => 'gender', 'type' => 'text', 'label' => 'Gender']);
        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }

    protected function getActions()
    {
        return \App\Models\Action::all();
    }
}
