@extends('admin.layouts.master')
@section('content')
    
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="John Doe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="7X2Ht@example.com" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="John Doe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="7X2Ht@example.com" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="johndoe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="+0123456789" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="John Doe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="7X2Ht@example.com" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="johndoe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="+0123456789" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- image upload form   --}}
                            <div class="col-md-12">
                                {{-- show photo  --}}
                                <div class="form-group">
                                        <img src="assets/img/avatar/avatar-1.png" alt="John Doe" class="rounded-circle" width="100">
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" class="form-control">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="text-right card-footer">
                        <button class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</button>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="John Doe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="7X2Ht@example.com" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="John Doe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="7X2Ht@example.com" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="johndoe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="+0123456789" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="John Doe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="7X2Ht@example.com" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="johndoe" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="+0123456789" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- image upload form   --}}
                            <div class="col-md-12">
                                {{-- show photo  --}}
                                <div class="form-group">
                                        <img src="assets/img/avatar/avatar-1.png" alt="John Doe" class="rounded-circle" width="100">
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" class="form-control">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="text-right card-footer">
                        <button class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</button>
                    </div>
                </div>
            </div>
        </section>
    
@endsection
