@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Product Show </h1>
    </div>
    
</section>

<section class="section">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Card Header</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                    Product Show
                </a>
            </div>
        </div>
        <div class="card-body">
            
        </div>
    </div>

    </div>
</section>
@endsection
@push('scripts')
    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}
@endpush