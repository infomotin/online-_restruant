@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Product</h1>
    </div>
    
</section>

<section class="section">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Product List</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary">
                    Add Product
                </a>
            </div>
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>

    </div>
</section>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush