@extends('admin.layouts.master')
@section('content')
    <style>
        th,
        td {
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
            background-clip: padding-box;
            background-origin: padding-box;
        }
    </style>
    <section class="section">
        <div class="section-header">
            <h4>Product Name:({{ $data->name }})</h4>

        </div>

    </section>

    <section class="section">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Add Product Size </h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary">
                        back
                    </a>
                </div>
            </div>
            <form action="{{ route('admin.product-size.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select name="size" class="form-control" id="size">
                                    <option value="" selected>Select Size</option>
                                    <option value="x">X</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    {{-- @foreach ($sizes as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach --}}
                                </select>
                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alt_text">Price</label>
                                <input type="text" name="price" class="form-control" id="alt_text">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Product Gallery</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped data-table" id="product_gallery">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Size - Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($size_data as $item)
                                <tr class="m ">
                                    <td>{{ $loop->iteration }}</td>
                                    <td> Size : {{ $item->size }} - Price: {{ $item->price }} 
                                    </td>
                                    <td><a href="{{ route('admin.product-size.destroy', $item->id) }}"
                                            class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a></td>

                                </tr>
                            @endforeach
                            @if (count($size_data) == 0)
                                <tr>
                                    <td colspan="4" class="text-center">No Data Found</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}
@endpush
