@extends('admin.layouts.master')
@section('content')
{{-- jquary cdn  --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Add </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.why-choose-us.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <br>
                        <button role="iconpicker" class="btn btn-primary" name="icon" data-icon="{{ $data->icon }}"></button>
                    </div>
                    <div class="form-group">
                        <label for="title">Title </label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <input type="text" name="short_description" class="form-control" id="short_description" value="{{ $data->short_description }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status </label>
                        <select name="status" id="status">
                            <option @selected($data->status === 1) value="1">Active</option>
                            <option @selected($data->status === 0) value="0">Inactive</option>
                        </select>
                    </div> 
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    {{-- <script>
        $(document).ready(function() {
            $('#image-upload').change(function() {
                let reader = new FileReader();
                console.log(reader);
                reader.onload = (e) => {
                    $('#image-preview').css('background-image', `url(${e.target.result})`);
                    $('#image-preview').hide();
                    $('#image-preview').fadeIn(650);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#short_description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#long_description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> --}}
@endpush