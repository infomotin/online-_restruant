<?php

namespace App\DataTables;

use App\Models\Admin\WhyChooseUs;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class WhyChooseUsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $edit = "<a href='" . route('admin.why-choose-us.edit', $query->id) . "' class='ml-2 btn btn-primary btn-sm'><i class='fa fa-edit'></i></a>";
                $delete = "<a href='" . route('admin.why-choose-us.destroy', $query->id) . "' class='ml-2 btn btn-danger btn-sm delete-item'><i class='fa fa-trash'></i></a>";
                
                return $edit . $delete;
            })
            ->addColumn('Icone_Show',function($query){
                return "<i style='font-size:50px' class='".$query->icon."'></i>";
            })
            ->addColumn('status', function ($query) {
                if ($query->status === 1) {
                    return '<span class="btn btn-primary">Active</span>';
                } else {
                    return '<span class="btn btn-danger">InActive</span>';
                }
            })
            ->rawColumns(['status','Icone_Show','action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(WhyChooseUs $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('whychooseus-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0,'asc')
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        // 'icon' => $request->icon,
        // 'title' => $request->title,
        // 'short_description' => $request->short_description,
        // 'status' => 1,
        return [

            Column::make('id')->width(20),
            Column::make('icon')->width(20),
            Column::make('Icone_Show')->width(20),
            Column::make('title')->width(120),
            Column::make('short_description')->width(120),
            Column::make('status')->width(80),
            Column::computed('action')
                ->exportable(true)
                ->printable(false)
                ->width(120)
                ->addClass('form-group'),


        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'WhyChooseUs_' . date('YmdHis');
    }
}
