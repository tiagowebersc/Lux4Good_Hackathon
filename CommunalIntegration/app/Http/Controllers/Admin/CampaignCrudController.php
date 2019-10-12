<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CampaignRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

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
        //$this->crud->setFromDb();
        $this->crud->addColumn(['name' => 'town.name', 'type' => 'text', 'label' => 'Town']);
        $this->crud->addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
    }

    protected function setupCreateOperation()
    {
        $this->setupUpdateOperation();
        $this->crud->addField(['name' => 'created_by', 'type' => 'hidden', 'label' => 'Created By', 'value'=> backpack_user()->id]);
    
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(CampaignRequest::class);

        $this->crud->addField([  // Select
            'label' => "Town",
            'type' => 'select',
            'name' => 'town_id', // the db column for the foreign key
            'entity' => 'town', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Town",
         
           ]);
        
        $this->crud->addField(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
        // Hidden field relate to : created_by / updated_by
        $this->crud->addField(['name' => 'updated_by', 'type' => 'hidden', 'label' => 'Updated By', 'value'=> backpack_user()->id]);
    
    }
}
