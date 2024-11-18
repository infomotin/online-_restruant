<?php

namespace App\DataTables;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                $edit = "<a href='" . route('admin.product.edit', $query->id) . "' class='ml-2 btn btn-primary btn-sm'><i class='fa fa-edit'></i></a>";
                $delete = "<a href='" . route('admin.product.destroy', $query->id) . "' class='ml-2 btn btn-danger btn-sm delete-item mx-2'><i class='fa fa-trash'></i></a>";
                $more ='<div class="dropdown d-inline show">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa-solid fa-gear">More </i>
                      </button>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item has-icon" href="'.route('admin.product-option.adding',$query->id).'"><i class="far fa-clock"></i> Adding Option</a>
                        <a class="dropdown-item has-icon" href="'.route('admin.product-size.adding',$query->id).'"><i class="far fa-clock"></i> Adding Size</a>
                        <a class="dropdown-item has-icon" href="'.route('admin.product-photog-allery.index',$query->id).'"><i class="far fa-clock"></i> Adding Image</a>
                      </div>
                    </div>';
                return $edit . $delete . $more;
            })
            ->addColumn('thumbnail_image',function($query){
                return '<img width="50px" src="'.asset($query->thumbnail_image).'">';
            })
            ->rawColumns(['thumbnail_image','action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Product $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('product-table')
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
        // $table->string('name');
        // $table->string('slug');
        // $table->string('thumbnail_image')->nullable();
        // $table->text('short_description')->nullable();
        // $table->text('long_description')->nullable();
        // $table->decimal('price', 10, 2);
        // $table->decimal('offer_price', 10, 2);
        // $table->string('sku');
        // $table->boolean('show_at_home')->default(false);
        // $table->boolean('status')->default(false);
        return [
           
            Column::make('id'),
            Column::make('name'),
            Column::make('price'),
            Column::make('offer_price'),
            Column::make('slug'),
            Column::make('thumbnail_image'),
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
        return 'Product_' . date('YmdHis');
    }
}
