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
            <form action="{{ route('admin.product-option.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bundle_name">Bundile Name</label>
                                <select name="bundle_name" class="form-control" id="bundle_name">
                                    <option value="" selected>Select Bundile Name</option>
                                    <option value="cocoa">Cocoa</option>
                                    <option value="drink">Drink</option>
                                    <option value="coffee">Coffee</option>
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
                                <th>Product Option - Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($option_data as $item)
                                <tr class="m ">
                                    <td>{{ $loop->iteration }}</td>
                                    <td> Option : {{ $item->bundle_name }} - Price: {{ $item->price }}
                                    </td>
                                    <td><a href="{{ route('admin.product-option.destroy', $item->id) }}"
                                            class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a></td>

                                </tr>
                            @endforeach
                            @if (count($option_data) == 0)
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
