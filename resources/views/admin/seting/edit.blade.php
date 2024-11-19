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
            <h4>Add Why Choose Us ?</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.update',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <br>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="status">Status </label>
                    <select name="status" id="status">
                        <option  value="1" @if ($data->status == 1) selected @endif>Active</option>
                        <option  value="0" @if ($data->status == 0) selected @endif>Inactive</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="status">Show in Home </label>
                    <select name="show_at_home" id="status">
                        <option  value="1" @if ($data->show_at_home == 1) selected @endif>Show</option>
                        <option  value="0" @if ($data->show_at_home == 0) selected @endif>Hide</option>
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

    <div class="form-group">
        <label for="status">Status </label>
        <select name="status" id="status">
            <option @selected($data->status === 1) value="1">Active</option>
            <option @selected($data->status === 0) value="0">Inactive</option>
        </select>
    </div>
@endpush