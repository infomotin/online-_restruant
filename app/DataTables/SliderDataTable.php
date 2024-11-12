<?php

namespace App\DataTables;

use App\Models\Admin\Slider as Slider;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SliderDataTable extends DataTable
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
                $edit = "<a href='" . route('admin.slider.edit', $query->id) . "' class='ml-2 btn btn-primary btn-sm'><i class='fa fa-edit'></i></a>";
                $delete = "<a href='" . route('admin.slider.destroy', $query->id) . "' class='ml-2 btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>";
                
                return $edit . $delete;
            })
            ->addColumn('status', function ($query) {
                if($query->status === 1){
                    return '<span class="badge badge-primary">Active</span>';
                }else {
                    return '<span class="badge badge-danger">InActive</span>';
                }
            })
            ->addColumn('image', function ($query) {
                return '<img width="100px" src="'.asset($query->image).'">';
            })
            ->rawColumns(['action', 'status','image'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Slider $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('slider-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
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
        //     $table->text('image');
        //     $table->string('offer');
        //     $table->string('title');
        //     $table->string('sub_title');
        //     $table->string('short_description')->nullable();
        //     $table->string('long_description')->nullable();
        //     $table->string('button_link')->nullable();
        //     $table->string('button_text')->nullable();
        //     $table->string('aria_label')->nullable();
        //     $table->string('alt_text')->nullable();
        //     $table->dateTime('start_date')->nullable();
        //     $table->dateTime('end_date')->nullable();
        //     $table->boolean('status')->default(0);
        return [
            
            
            Column::make('id'),
            Column::make('offer'),
            Column::make('image'),
            Column::make('title'),
            Column::make('sub_title'),
            Column::make('short_description'),
            Column::make('long_description'),
            Column::make('button_link'),
            Column::make('button_text'),
            Column::make('aria_label'),
            Column::make('alt_text'),
            Column::make('start_date'),
            Column::make('end_date'),
            Column::make('status'),
            Column::computed('action')
                    ->exportable(false)
                    ->printable(false)
                    ->width(180)
                    ->addClass('text-center'),
            
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Slider_' . date('YmdHis');
    }
}
