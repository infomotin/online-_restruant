@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Why Choose Us </h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div id="accordion">
                <div class="accordion bg-muted">
                    <p class="accordion-title">Input Why Choose Us?</p>
                    <div class="accordion-header bg-light" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                        <h4>Why Choose Us</h4>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <form action="{{route('admin.why-choose-us-title.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="">Top Title</label>
                            <input type="text" class="form-control" name="why_choose_top_title" value="{{@$title['why_choose_top_title']}}">
                        </div>
                        <div class="form-group">
                            <label for="">Main Title</label>
                            <input type="text" class="form-control"name="why_choose_main_title" value="{{@$title['why_choose_main_title']}}">
                        </div>
                        <div class="form-group">
                            <label for="">Sub Title</label>
                            <input type="text" class="form-control" name="why_choose_sub_title" value="{{@$title['why_choose_sub_title']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Card Header</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.why-choose-us.create') }}" class="btn btn-primary">
                    Why Choose Us
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