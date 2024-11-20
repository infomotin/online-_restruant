@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Setting</h1>
        </div>

    </section>

    <section class="section">
        <div class="card card-primary">
            <div class="card-header">
                <h4>All Setting</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-primary">
                        Add Setting
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-sm-12 col-md-2">
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            <li class="nav-item active show">
                                <a class="nav-link" id="home-tab4" data-toggle="tab" href="#GeneralSetting" role="tab"
                                    aria-controls="home" aria-selected="false">Genaral Setting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab"
                                    aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="contact-tab4" data-toggle="tab" href="#contact4" role="tab"
                                    aria-controls="contact" aria-selected="true">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-12 col-md-10">
                        <div class="tab-content no-padding" id="myTab2Content">

                            <div class="tab-pane fade" id="GeneralSetting" role="tabpanel" aria-labelledby="home-tab4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Genaral Setting</h4>
                                    </div>
                                    <div class="card-body bordered">
                                        <form action="{{ route('admin.update-seting.store') }}" method="post">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-2 col-form-label ">App
                                                    Name</label>
                                                <input type="text" name="app_name" class="form-control"
                                                    placeholder="App Name" value="{{ config('settings.app_name') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-2 col-form-label">App Default
                                                    Currency</label>
                                                <select name="app_default_currency" id=""
                                                    class="form-control select2">
                                                    <option @selected(config('settings.app_name')==='usd') value="usd">USD</option>
                                                    <option @selected(config('settings.app_name')==='tk') value="tk">Tk</option>
                                                    <option @selected(config('settings.app_name')==='uro') value="uro">URO</option>
                                                    
                                                    
                                                </select>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-2 col-form-label">Currency
                                                            Icon
                                                        </label>
                                                        <button role="iconpicker" class="btn btn-primary form-control"
                                                            name="app_icon" value="{{ config('settings.app_icon') }}"></button>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-2 col-form-label">
                                                            Currency Position</label>
                                                        <select name="currency_position" id=""
                                                            class="form-control select2">
                                                            <option @selected(config('settings.currency_position')==='left') value="left">Left</option>
                                                            <option @selected(config('settings.currency_position')==='right') value="right">Right</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-2 col-form-label">App
                                                            Default
                                                            Language </label>
                                                        <select name="app_default_language" id=""
                                                            class="form-control select2">
                                                            <option @selected(config('settings.app_default_language')==='english') value="en">English</option>
                                                            <option @selected(config('settings.app_default_language')==='hindi') value="hi">Hindi</option>
                                                            <option @selected(config('settings.app_default_language')==='urdu') value="ur">Urdu</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-2 col-form-label">App
                                                            Default
                                                            Colour</label>
                                                        <select name="app_default_colour" id=""
                                                            class="form-control select2">
                                                            <option @selected(config('settings.app_default_colour')==='red') value="red">Red</option>
                                                            <option @selected(config('settings.app_default_colour')==='blue') value="blue">Blue</option>
                                                            <option @selected(config('settings.app_default_colour')==='green') value="green">Green</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est
                                lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis
                                iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque
                                eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit
                                venenatis justo, eget scelerisque tellus pharetra a.
                            </div>


                            <div class="tab-pane fade active show" id="contact4" role="tabpanel"
                                aria-labelledby="contact-tab4">
                                Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa,
                                gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum
                                molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci
                                non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis
                                ultrices. Proin bibendum bibendum augue ut luctus.
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
@push('scripts')
@endpush
