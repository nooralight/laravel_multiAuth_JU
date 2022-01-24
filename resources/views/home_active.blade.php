@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif


        @if(!empty($users))
            @foreach ($users as $user)
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">
                            <strong>{{$user->nameEn}}</strong>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="text-muted">Name (English):</span> {{$user->nameEn}}
                            </div>
                            <div class="col-md-12">
                                <span class="text-muted">Name (Bangla):</span> {{$user->nameBn}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span class="text-muted">Gender:</span> {{$user->gender}}
                            </div>
                            <div class="col-md-4">
                                <span class="text-muted">Blood Group:</span> {{$user->blood}}
                            </div>
                            <div class="col-md-4">
                                <span class="text-muted">District:</span> {{$user->district}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="text-muted"> Present Address:</span> {{$user->present_address}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span class="text-muted">Mobile:</span> {{$user->mobile}}
                            </div>
                            <div class="col-md-6">
                                <span class="text-muted">FB:</span> <a href="{{$user->fb_link}}" target="_blank" class="text-dark">{{$user->fb_link}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <span class="text-muted">JU Batch:</span> {{$user->ju_batch}}
                            </div>
                            <div class="col-md-3">
                                <span class="text-muted">IIT Batch:</span> {{$user->iit_batch}}
                            </div>
                            <div class="col-md-6">
                                <span class="text-muted">Academic Session:</span> {{$user->ac_session}}
                            </div>
                            <div class="col-md-12">
                                <span class="text-muted">Hall of Residence:</span> {{$user->hall}}
                            </div>
                            <div class="col-md-12">
                                <span class="text-muted">Degree Obtained From JU:</span> {{$user->degree_obt}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="text-muted">Occupation:</span> {{$user->occupation}}
                            </div>
                            <div class="col-md-12">
                                <span class="text-muted">Designation:</span> {{$user->designation}}
                            </div>
                            <div class="col-md-12">
                                <span class="text-muted">Organization:</span> {{$user->organization}}
                            </div>
                            <div class="col-md-12">
                                <span class="text-muted">Address of Organization:</span> {{$user->address_org}}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
        @elseif (empty($users))
        <div class="alert alert-danger">
            Thanks for your account verification. Currenty no other verified user(s).
        </div>
        @endif




    </div>
</div>
@endsection

