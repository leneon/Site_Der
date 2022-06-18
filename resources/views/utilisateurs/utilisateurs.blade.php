@extends('layouts.master')

@section('content')

<div class="row">
    <div class="card col-md-12">
        <h2 class="card-header">Add New Client</h2>
        <div class="card-body">
            <!--Form-->
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" required="" name="c_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-md-6 focused" style="display:none">
                        <label for="exampleInputEmail1">Client Number</label>
                                                            <input type="text" required="" name="c_number" value="CRMS-C-ZVGY-8705 " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">National ID Number</label>
                        <input type="text" required="" name="c_natidno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" required="" name="c_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Residency</label>
                        <input type="text" required="" name="c_adr" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">DOB</label>
                        <input type="text" required="" name="c_dob" placeholder="DD - MM - YYYY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Passport</label>
                        <input type="file" required="" name="c_dpic" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" required="" name="c_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" required="" name="c_pwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>


                <button type="submit" name="reg_user" class="btn btn-primary">Add Client</button>
            </form>
            <!-- ./ Form -->
        </div>
    </div>
</div>


@stop
