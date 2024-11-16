@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Add Why Choose Us ?</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.why-choose-us.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <br>
                        <button role="iconpicker" class="btn btn-primary" name="icon"></button>
                    </div>
                    <div class="form-group">
                        <label for="title">Title </label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <input type="text" name="short_description" class="form-control" id="short_description">
                    </div>
                    
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
