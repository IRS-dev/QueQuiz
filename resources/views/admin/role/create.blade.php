@extends('layouts/dashboard')
@section('main')
<div class="page-heading">
    <h3>Quiz</h3>
</div>
            <div class="page-content">
                <div class="col-sm-12 col-lg-8 d-flex justify-content-start">
                    <a href="/dashboard/role"
                        class="btn btn-primary  mb-3 mx-2 add-multiple">Back</a>
                </div>
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Role Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Name Roles</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="username" class="form-control"
                                                            name="fname" placeholder="Name Roles">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
@endsection
