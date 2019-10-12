<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UsersRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UsersCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class UsersCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/users');
        $this->crud->setEntityNameStrings('users', 'users');
  }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();

        $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addColumn(['name' => 'email', 'type' => 'text', 'label' => 'Email']);
        $this->crud->addColumn(['name' => 'town.name', 'type' => 'text', 'label' => 'Town']);
        $this->crud->addColumn(['name' => 'role.name', 'type' => 'text', 'label' => 'Role']);
    }

    protected function setupCreateOperation()
    {
        $this->setupUpdateOperation();
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
    
    }
    
    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(UsersRequest::class);
        
        $this->crud->addField([  // Select
            'label' => "Town",
            'type' => 'select',
            'name' => 'town_id', // the db column for the foreign key
            'entity' => 'town', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Town",
         ]);

         $this->crud->addField([  // Select
            'label' => "Role",
            'type' => 'select',
            'name' => 'role_id', // the db column for the foreign key
            'entity' => 'role', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Role",
         ]);
        
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addField(['name' => 'email', 'type' => 'email', 'label' => 'Email']);
        $this->crud->addField(['name' => 'password', 'type' => 'hidden', 'label' => 'Password', 'value' => 'password']);
        
        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }
}
