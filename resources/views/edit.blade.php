@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            <form method="POST" action="{{route("update")}}">
                @csrf


                <div class="card mb-4">
                    <div class="card-header text-white bg-dark">
                        <h4 class="m-0">Personal Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="nameEn">{{ __('Full Name in English *') }}</label>

                                    <input id="nameEn" type="text" class="form-control @error('nameEn') is-invalid @enderror" name="nameEn" placeholder="Your Name in English" required autocomplete="nameEn" value="{{ $user->nameEn }}" autofocus>

                                    @error('nameEn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nameBn">{{ __('Full Name in Bangla *') }}</label>

                                    <input id="nameBn" type="text" class="form-control @error('nameBn') is-invalid @enderror" name="nameBn" placeholder="বাংলায় আপনার নাম লিখুন" required autocomplete="nameBn" value="{{$user->nameBn }}" autofocus>

                                    @error('nameBn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">{{ __('Gender') }}</label>

                                    <select class="form-control form-select @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ $user->gender }}">
                                        <option selected disabled>{{ $user->gender }}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="blood">{{ __('Blood Group') }}</label>

                                    <select class="form-control form-select @error('blood') is-invalid @enderror" id="blood" name="blood" value="{{ old('blood') }}">
                                        <option selected disabled>{{ old('blood') }}</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>

                                    @error('blood')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dob">{{ __('Date of Birth *') }}</label>

                                    <input class="form-control form-select @error('dob') is-invalid @enderror" id="dob" type="date" id="dob" name="dob" value="{{$user->dob}}">

                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="district">{{ __('Home District') }}</label>

                                    <select class="form-control form-select @error('district') is-invalid @enderror" id="district" name="district" value="{{ old('district') }}">
                                        <option selected disabled>{{ old('district') }}</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Shibchor">Shibchor</option>
                                    </select>

                                    @error('district')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="present_address">{{ __('Present Address') }}</label>

                                    <input id="present_address" type="text" class="form-control @error('present_address') is-invalid @enderror" name="present_address" autocomplete="present_address" value="{{ $user->present_address }}" placeholder="Your Present Address Here" autofocus>

                                    @error('present_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">{{ __('Mobile Number *') }}</label>

                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Your Mobile Number, Start From 01*********" required autocomplete="mobile" value="{{ $user->mobile }}" autofocus>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fb_link">{{ __('Facebook Link') }}</label>

                                    <input id="fb_link" type="text" class="form-control @error('fb_link') is-invalid @enderror" name="fb_link" placeholder="Your Facebook URL (https://facbook.com/profile)" value="{{ $user->fb_link }}" autocomplete="fb_link" autofocus>

                                    @error('fb_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header text-white bg-dark">
                        <h4 class="m-0">
                            Academic Information
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ju_batch">{{ __('JU Batch *') }}</label>

                                    <select class="form-control form-select @error('ju_batch') is-invalid @enderror" id="ju_batch" name="ju_batch" value="{{ old('ju_batch') }}">
                                        <option selected disabled>{{ old('ju_batch') }}</option>
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

                                    @error('ju_batch')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="iit_batch">{{ __('IIT Batch *') }}</label>

                                    <select class="form-control form-select @error('iit_batch') is-invalid @enderror" id="iit_batch" name="iit_batch" value="{{ old('iit_batch') }}">
                                        <option selected disabled>{{ old('iit_batch') }}</option>
                                        <option value="1">1<sup>st</sup></option>
                                        <option value="2">2<sup>nd</sup></option>
                                        <option value="3">3<sup>rd</sup></option>
                                        <option value="4">4<sup>th</sup></option>
                                        <option value="5">5<sup>th</sup></option>
                                        <option value="6">6<sup>th</sup></option>
                                        <option value="7">7<sup>th</sup></option>
                                        <option value="8">8<sup>th</sup></option>
                                        <option value="9">9<sup>th</sup></option>
                                    </select>

                                    @error('iit_batch')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ac_session">{{ __('Academic Session *') }}</label>

                                    <select class="form-control form-select @error('ac_session') is-invalid @enderror" id="ac_session" name="ac_session" value="{{ old('ac_session') }}">
                                        <option selected disabled>{{ old('ac_session') }}</option>
                                        <option value="1">2000</option>
                                        <option value="2">2001</option>
                                        <option value="3">2002</option>
                                        <option value="4">2003</option>
                                    </select>

                                    @error('ac_session')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hall">{{ __('Hall of Residence *') }}</label>

                                    <select class="form-control form-select @error('hall') is-invalid @enderror" id="hall" name="hall" value="{{ old('hall') }}">
                                        <option selected disabled>{{ old('hall') }}</option>
                                        <option value="n">Jahangir Hall</option>
                                        <option value="b">Rokeya Hall</option>
                                    </select>

                                    @error('hall')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="degree_obt">{{ __('Degree obtained from JU *') }}</label>

                                    <select class="form-control form-select @error('degree_obt') is-invalid @enderror" id="degree_obt" name="degree_obt" value="{{ old('degree_obt') }}">
                                        <option selected disabled>{{ old('degree_obt') }}</option>
                                        <option value="n">BSc in CSE</option>
                                        <option value="b">BSc in EEE</option>
                                    </select>

                                    @error('degree_obt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header text-white bg-dark">
                        <h4 class="m-0">
                            Professional Information
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="occupation">{{ __('Occupation') }}</label>

                                    <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" autocomplete="occupation" value="{{ $user->occupation }}" placeholder="Your Occupation Here" autofocus>

                                    @error('occupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="designation">{{ __('Designation') }}</label>

                                    <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" autocomplete="designation" value="{{ $user->designation }}" placeholder="Your Designation Here" autofocus>

                                    @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="organization">{{ __('Organization Name') }}</label>

                                    <input id="organization" type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" autocomplete="organization" value="{{ $user->organization }}" placeholder="Organization Name Here" autofocus>

                                    @error('organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_org">{{ __('Address of Organization') }}</label>

                                    <input id="address_org" type="text" class="form-control @error('address_org') is-invalid @enderror" name="address_org" autocomplete="address_org" value="{{ $user->adress_org }}" placeholder="Address of Organization Here" autofocus>

                                    @error('address_org')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Information') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
