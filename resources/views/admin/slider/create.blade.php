@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Add Slider</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                    {{-- $table->text('image');
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
                    //     $table->boolean('status')->default(0); --}}
                    @csrf
                    <div class="form-group">
                        <div class="image-preview" id="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="offer">Offer</label>
                        <input type="text" name="offer" class="form-control" id="offer">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="sub_title">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id="sub_title">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" class="form-control" id="short_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="long_description">Long Description</label>
                        <textarea name="long_description" class="form-control" id="long_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="button_link">Button Link</label>
                        <input type="text" name="button_link" class="form-control" id="button_link">
                    </div>
                    <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" class="form-control" id="button_text">
                    </div>
                    <div class="form-group">
                        <label for="aria_label">Aria Label</label>
                        <input type="text" name="aria_label" class="form-control" id="aria_label">
                    </div>
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" name="alt_text" class="form-control" id="alt_text">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="datetime-local" name="start_date" class="form-control" id="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="datetime-local" name="end_date" class="form-control" id="end_date">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
