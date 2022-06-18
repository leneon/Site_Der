@extends('layouts.master')

@section('content')

<div class="container-fluid mt--7">
    <!--Pie chart to show number of car categories-->
    <div class="row">
        <div class="card col-md-12">
            <h2 class="card-header">Ajouter un nouveau Utilisateur</h2>
            <div class="card-body">
                <!--Form-->
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nom d'utilisateur</label>
                            <input type="text" required="" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                    <div class="row">
                        <div class="form-group col-md-6 focused">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" required="" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-md-6 focused">
                            <label for="exampleInputEmail1">Mot de passe</label>
                            <input type="password" required="" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>


                    <button type="submit" name="reg_staff" class="btn btn-primary">Ajouter</button>
                </form>
                <!-- ./ Form -->
            </div>
        </div>
    </div>
  <!-- Footer -->
    <footer class="py-5">
  <div class="container">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-12">
        <div class="copyright text-center text-xl-left text-muted">
          © 2019 - 2021 Service Management System. Powered By <a href="#" class="font-weight-bold ml-1" target="_blank">Kamal</a>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

@endsection
