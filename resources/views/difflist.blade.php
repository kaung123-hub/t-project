@extends('layouts.app')
@section('title','Unmatched Person Information')
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <style>
    label{
      margin: 10px 5px;
    }
  </style>
  @endsection
@section('content')
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-2 px-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand fs-4" href="{{url('online-person-informations')}}">Person Information Lists</a>
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('online-person-informations')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('offline-person-informations')}}">Offline Person Informaiton</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('difflist')}}">Unmatched Person Information</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid">
        <div class="content-wrapper bg-light">
          <div class="page-header">
            <h2 class="page-title p-3">
              <span class="page-title-icon bg-gradient-primary me-2">
                <i class="mdi mdi-account-multiple"></i>
              </span><span class="fs-4">Unmatched Person Informations</span>
            </h2>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
                <div class="container-fluid">
                  {{-- @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p> Person Information Successfully Added!</p>
                    </div>
                  @endif --}}
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" style="white-space: nowrap" id="personInformationTable">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Person Code </th>
                          <th> Name mm </th>
                          <th> Birth Date </th>
                          <th> Gender </th>
                          <th> NRC No </th>
                          <th> Father Name mm </th>
                          <th> Email </th>
                          <th> Queue Token </th>
                          <th> Appointed Date </th>
                          <th> Created Date </th>
                          <th> Status </th>
                          <th> Station Id </th>
                          <th> From Time </th>
                          <th> Is Booking </th>
                          <th> No Of Booking </th>
                          <th> Server Time </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $i=1;
                        @endphp
                        @foreach ($output as $person)
                        <tr>
                          <td> {{$i++}} </td>
                          <td> {{$person->person_code}}</td>
                          <td> {{$person->name_mm}} </td>
                          <td> {{$person->birth_date}} </td>
                          <td> 
                            @php
                                if($person->gender == 0){
                                  echo('Male');
                                }
                                else {
                                  echo('Female');
                                }
                            @endphp  
                          </td>
                          <td> {{$person->nrc}} </td>
                          <td> {{$person->father_name_mm}} </td>
                          <td> {{$person->email}} </td>
                          <td> {{$person->queue_token}} </td>
                          <td> {{$person->appointed_date}} </td>
                          <td> {{$person->created_date}} </td>
                          <td> {{$person->status}} </td>
                          <td> {{$person->stationid}} </td>
                          <td> {{$person->from_time}} </td>
                          <td> {{$person->is_booking}} </td>
                          <td> {{$person->no_of_booking}} </td>
                          <td> {{$person->server_time}} </td>
                          <td> 
                            <button class="btn btn-sm btn-primary"><i class="mdi mdi-eye-outline"></i></button>
                            <button class="btn btn-sm btn-success"><i class="mdi mdi-square-edit-outline"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="mdi mdi-trash-can-outline"></i></button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
@endsection
@push('script')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready( function () {
        $('#personInformationTable').DataTable();
      });
    </script>
@endpush