@extends('layouts.master')

@section('content')

        <!--Pie chart to show number of car clients-->

        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Niveau L3 (Interfaces)  <button  class="btn btn-default float-right" style="padding: 0.5%;"> <i class="icon-user">+</i><a href="{{route('client.create')}}">Nouveau Client</a></button></h2>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- Projects table -->

                    <div class="container-fluid mt--7">
                        <div class="row">
                            <div class="card col-md-12">
                                <h2 class="card-header">Service Clients</h2>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="">#</th>
                                <th scope="col">Client Id</th>
                                <th scope="col">Type de service</th>
                                <th scope="col">IP</th>
                                <th scope="col">Port</th>
                                <th scope="col">QOS<th>


                            </tr>
                            </thead>
                            <tbody>
                                @foreach($l3s as $l3)
                                <tr>
                                    <th scope="row">
                                        {{$loop->index+1}}
                                    </th>
                                    <td>
                                        {{ $l3['clientId'] }}
                                    </td>
                                    <td>
                                        {{'L3'}}
                                    </td>
                                    <td>
                                        {{$l3['IP']}}
                                    </td>
                                    <td>
                                        {{$l3['port']}}
                                    </td>
                                    <td>
                                        {{$l3['QOS']}}
                                    </td>


                                </tr>
                               @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </div>
      <!-- Footer -->

    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-xl-left text-muted">
              © 2019 - 2021 Car Rental Management System. Powered By <a href="https://martdev.info/" class="font-weight-bold ml-1" target="_blank">MartDevelopers</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    </div>

    </div><br>
{{-- <div class="text-center">{{ $clients->links()}}</div> --}}
</div>

</div>
</div>

    </div><br>
{{-- <div class="text-center">{{ $clients->links()}}</div> --}}
</div>

</div>
</div>

@stop
