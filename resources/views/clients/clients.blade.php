@extends('layouts.master')

@section('content')

        <!--Pie chart to show number of car clients-->

        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Clients <button  class="btn btn-default float-right" style="padding: 0.5%;"> <i class="icon-user">+</i><a href="{{route('client.create')}}">Nouveau Client</a></button></h2>
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
                                                <th scope="col">#</th>
                                                <th scope="col">Service Id</th>
                                                <th scope="col">Type Service.</th>
                                                <th scope="col">VLAN</th>
                                                <th scope="col">Routeur</th>
                                                <th scope="col">Site</th>
                                                <th scope="col"   >Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $clients as $client)


                                                <tr>
                                                <th scope="row">
                                                   {{ $loop->index+1 }}
                                                </th>
                                                <td>
                                                        {{ $client['serviceId'] }}
                                                </td>
                                                <td>
                                                        {{ $client['typeService'] }}
                                                </td>

                                                <td>
                                                        {{ $client['VLAN'] }}
                                                </td>

                                                <td>
                                                        {{ $client['routeur'] }}
                                                </td>
                                                <td>
                                                        {{ $client['site'] }}
                                                </td>

                                                <td>
                                                    <a href="admin_view_staff.php?s_id=1&amp;s_no=CRMS-S-LKMT-001" class="badge badge-success">
                                                        <i class="fa fa-eye"></i> <i class="fa fa-user"></i>
                                                                Voir
                                                            </a>
                                                            <a href="admin_update_staff.php?s_id=1&amp;s_no=CRMS-S-LKMT-001" class="badge badge-primary">
                                                                <i class="fa fa-edit"></i> <i class="fa fa-user"></i>
                                                                Modifier
                                                            </a>
                                                            <a href="admin_manage_staff.php?delete_id=1" class="badge badge-danger">
                                                                <i class="fa fa-trash"></i> <i class="fa fa-user"></i>
                                                                Supprimer
                                                            </a>
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

                       @include('layouts.partials.footer')

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
