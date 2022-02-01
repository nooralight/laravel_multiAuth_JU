@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="col-11" style="font-size: 14px">
          <table id="userTable" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender, Blood, District</th>
                <th scope="col">Present Adress</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">JU Details</th>
                <th scope="col">Occupation with Details</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                <td>{{$user->nameEn}}<br>{{$user->nameBn}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}} <br>{{$user->blood}} <br>{{$user->district}}</td>
                <td>{{$user->present_address}}</td>
                <td>{{$user->mobile}}</td>
                <td>JU Batch: {{$user->ju_batch}} <br>IIT Batch:{{$user->iit_batch}} <br>Hall: {{$user->hall}} <br>Session: {{$user->ac_session}} <br>Degree: {{$user->degree_obt}}</td>
                <td>{{$user->occupation}} <br>{{$user->designation}} <br>{{$user->organization}} <br>{{$user->address_org}}</td>
                <td>{{$user->status}}
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                    </button>
                      <div class="dropdown-menu">
                        <a  class="dropdown-item" href="{{ route('editA', ['id' => $user->id]) }}" >Active</a>
                        <a class="dropdown-item" href="{{ route('editB', ['id' => $user->id]) }}" >Deactive</a>
                      </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        </div>

    </div>
</div>
@endsection

@section('script')

<script>
  $(document).ready(function() {
    $('#dfUsageTable').DataTable({
      pageLength: 10,
      filter: true,
      deferRender: true,
      scrollY: 200,
      scrollCollapse: true,
      scroller: true
    });
  });
</script>
@endsection
