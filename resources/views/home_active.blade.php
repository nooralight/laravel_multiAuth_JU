@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <form action="{{route('home')}}" method="get" autocomplete="off">
                @csrf
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="district">{{ __('Home District') }}</label>
                        <select class="form-control form-select" id="district" name="district">
                            <option selected disabled>Select District</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Feni">Feni</option>
                            <option value="Brahmanbaria">Brahmanbaria</option>
                            <option value="Rangamati">Rangamati</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Chandpur">Chandpur</option>
                            <option value="Lakshmipur">Lakshmipur</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Coxsbazar">Coxsbazar</option>
                            <option value="Khagrachhari">Khagrachhari</option>
                            <option value="Bandarban">Bandarban</option>
                            <option value="Sirajganj">Sirajganj</option>
                            <option value="Pabna">Pabna</option>
                            <option value="Bogura">Bogura</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Natore">Natore</option>
                            <option value="Joypurhat">Joypurhat</option>
                            <option value="Chapainawabganj">Chapainawabganj</option>
                            <option value="Naogaon">Naogaon</option>
                            <option value="Jashore">Jashore</option>
                            <option value="Satkhira">Satkhira</option>
                            <option value="Meherpur">Meherpur</option>
                            <option value="Narail">Narail</option>
                            <option value="Chuadanga">Chuadanga</option>
                            <option value="Kushtia">Kushtia</option>
                            <option value="Magura">Magura</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Bagerhat">Bagerhat</option>
                            <option value="Jhenaidah">Jhenaidah</option>
                            <option value="Jhalakathi">Jhalakathi</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Pirojpur">Pirojpur</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Bhola">Bhola</option>
                            <option value="Barguna">Barguna</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Moulvibazar">Moulvibazar</option>
                            <option value="Habiganj">Habiganj</option>
                            <option value="Sunamganj">Sunamganj</option>
                            <option value="Narsingdi">Narsingdi</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Shariatpur">Shariatpur</option>
                            <option value="Narayanganj">Narayanganj</option>
                            <option value="Tangail">Tangail</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            <option value="Manikganj">Manikganj</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Munshiganj">Munshiganj</option>
                            <option value="Rajbari">Rajbari</option>
                            <option value="Madaripur">Madaripur</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Panchagarh">Panchagarh</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Lalmonirhat">Lalmonirhat</option>
                            <option value="Nilphamari">Nilphamari</option>
                            <option value="Gaibandha">Gaibandha</option>
                            <option value="Thakurgaon">Thakurgaon</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Kurigram">Kurigram</option>
                            <option value="Sherpur">Sherpur</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Jamalpur">Jamalpur</option>
                            <option value="Netrokona">Netrokona</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ju_batch">{{ __('JU Batch *') }}</label>
                                    <select class="form-control form-select" id="ju_batch" name="ju_batch" value="">
                                        <option selected disabled>JU Batch</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="organization">{{ __('Oranization') }}</label>
                                    <select class="form-control form-select" id="organization" name="organization" value="">
                                        <option selected disabled>Organization</option>
                                        <option value="Private">Private</option>
                                        <option value="Government">Government</option>
                                        <option value="Firm">Firm</option>
                                    </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-0">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Filter') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

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
                                <span class="text-muted">FB:</span> <a href="{{$user->fb_link}}" target="_blank" class="text-light btn btn-primary btn-sm">Open Facebook</a>
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

