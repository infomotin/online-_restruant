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
                <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <br>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="status">Status </label>
                        <select name="status" id="status">
                            <option  value="1">Active</option>
                            <option  value="0">Inactive</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="status">Show in Home </label>
                        <select name="show_at_home" id="status">
                            <option  value="1">Show</option>
                            <option selected  value="0">Hide</option>
                        </select>
                    </div> 
                    
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
