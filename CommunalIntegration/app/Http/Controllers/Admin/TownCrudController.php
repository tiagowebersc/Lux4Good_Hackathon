<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TownRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Auth;

/**
 * Class TownCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TownCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Town');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/town');
        $this->crud->setEntityNameStrings('town', 'towns');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TownRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(TownRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }
}
