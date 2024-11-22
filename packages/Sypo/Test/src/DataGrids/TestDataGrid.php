<?php

namespace Sypo\Test\DataGrids;

use Webkul\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;

class TestDataGrid extends DataGrid
{
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('test')
            ->select('id', 'name', 'created_at', 'updated_at');

        return $queryBuilder;
    }

    public function prepareColumns()
    {
        $this->addColumn([
            'index'              => 'id',
            'label'              => 'ID',
            'type'               => 'string',
            'searchable'         => true,
            'filterable'         => false,
            'sortable'   => true,
        ]);
        $this->addColumn([
            'index'              => 'name',
            'label'              => 'Name',
            'type'               => 'string',
            'searchable'         => true,
            'filterable'         => false,
            'sortable'   => true,
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'icon'   => 'icon-edit',
            'title'  => trans('blog::app.admin.datagrid.edit'),
            'method' => 'GET',
            'url'    => function ($row) {
                return '#';
                #return route('admin.test.edit', $row->id);
            },
        ]);
    }
}