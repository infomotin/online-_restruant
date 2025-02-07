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
            <h4>Product Show Image</h4>
            
        </div>

    </section>

    <section class="section">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Product Image </h4>
                
                <div class="card-header-action">
                    
                </div>
            </div>
            <form action="{{ route('admin.product-gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary">
                        back
                     </a>
                    <div>
                        <div class="form-group">
                            
                            <label for="alt_text">Product Name</label>
                            <p>{{ $data->name }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="image" class="form-label"></label>
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
                                <th>Image</th>
                                <th>Alt Text</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($images as $item)
                                <tr class="m ">
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($item->image) }}" alt="" width="100px" height="100px">
                                    </td>
                                    <td>{{ $item->alt_text }}</td>
                                    <td><a href="{{ route('admin.product-gallery.destroy', $item->id) }}"
                                            class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a></td>

                                </tr>
                            @endforeach
                            @if(count($images) == 0)
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
