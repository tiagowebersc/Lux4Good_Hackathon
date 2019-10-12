<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CampaignRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models;

/**
 * Class CampaignCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CampaignCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Campaign');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/campaign');
        $this->crud->setEntityNameStrings('campaign', 'campaigns');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CampaignRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->getTowns();

        $this->crud->addField(['name' => 'description', 'type' => 'text', 'label' => 'Description']);

        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function getTowns()
    {
        return Town::all();
    }
}
