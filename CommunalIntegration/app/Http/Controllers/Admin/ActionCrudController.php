<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ActionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ActionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Action');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/action');
        $this->crud->setEntityNameStrings('action', 'actions');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
        $this->crud->addColumn(['name' => 'objective.description', 'type' => 'text', 'label' => 'Objective']);
        $this->crud->addColumn(['name' => 'theme.description', 'type' => 'text', 'label' => 'Theme']);
        $this->crud->addColumn(['name' => 'partner', 'type' => 'text', 'label' => 'Partner']);
        $this->crud->addColumn(['name' => 'date', 'type' => 'text', 'label' => 'Date']);
    
    }

    protected function setupCreateOperation()
    {
        $this->setupUpdateOperation();
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
    
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(ActionRequest::class);
        
        $this->crud->addField([  // Select
            'label' => "Objective",
            'type' => 'select',
            'name' => 'objective_id', // the db column for the foreign key
            'entity' => 'objective', // the method that defines the relationship in your Model
            'attribute' => 'description', // foreign key attribute that is shown to user
            'model' => "App\Models\Objective",
         ]);

         $this->crud->addField([  // Select
            'label' => "Theme",
            'type' => 'select',
            'name' => 'theme_id', // the db column for the foreign key
            'entity' => 'theme', // the method that defines the relationship in your Model
            'attribute' => 'description', // foreign key attribute that is shown to user
            'model' => "App\Models\Theme",
         ]);
        
        $this->crud->addField(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
        $this->crud->addField(['name' => 'partner', 'type' => 'text', 'label' => 'Partner']);
        $this->crud->addField(['name' => 'date', 'type' => 'text', 'label' => 'Date']);

        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }
}
