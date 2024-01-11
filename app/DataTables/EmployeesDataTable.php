<?php
// app/DataTables/EmployeesDataTable.php

namespace App\DataTables;

use App\Models\Employee;
use Yajra\DataTables\Services\DataTable;

class EmployeesDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'employees.datatables.action');
    }

    public function query(Employee $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
            ]);
    }

    protected function getColumns()
    {
        return [
            'id',
            'name',
            'father_name',
            'mother_name',
            'card_no',
            'gender',
            'marital_status',
            'date_of_birth',
            'salary',
            'is_ot_enable',
            'present_address',
            'permanent_address',
            'photo',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }

    protected function filename()
    {
        return 'employees_' . time();
    }
}
