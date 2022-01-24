@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            <form method="POST" action="{{ route('register') }}">
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

                                    <input id="nameEn" type="text" class="form-control @error('nameEn') is-invalid @enderror" name="nameEn" placeholder="Your Name in English" required autocomplete="nameEn" value="{{ old('nameEn') }}" autofocus>

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

                                    <input id="nameBn" type="text" class="form-control @error('nameBn') is-invalid @enderror" name="nameBn" placeholder="বাংলায় আপনার নাম লিখুন" required autocomplete="nameBn" value="{{ old('nameBn') }}" autofocus>

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

                                    <select class="form-control form-select @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender') }}">
                                        <option selected disabled>Select Gender</option>
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
                                        <option selected disabled>Select Blood Group</option>
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

                                    <input class="form-control form-select @error('dob') is-invalid @enderror" id="dob" type="date" id="dob" name="dob" value="{{ old('dob') }}">

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

                                    <input id="present_address" type="text" class="form-control @error('present_address') is-invalid @enderror" name="present_address" autocomplete="present_address" value="{{ old('present_address') }}" placeholder="Your Present Address Here" autofocus>

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

                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Your Mobile Number, Start From 01*********" required autocomplete="mobile" value="{{ old('mobile') }}" autofocus>

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

                                    <input id="fb_link" type="text" class="form-control @error('fb_link') is-invalid @enderror" name="fb_link" placeholder="Your Facebook URL (https://facbook.com/profile)" value="{{ old('fb_link') }}" autocomplete="fb_link" autofocus>

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
                                        <option selected disabled>Select Your JU Batch</option>
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
                                        <option selected disabled>Select Your IIT Batch</option>
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
                                        <option selected disabled>Select Academic Session</option>
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
                                        <option selected disabled>Select Hall of Residance</option>
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
                                        <option selected disabled>Select Your Obtain Degree</option>
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

                                    <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" autocomplete="occupation" value="{{ old('occupation') }}" placeholder="Your Occupation Here" autofocus>

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

                                    <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" autocomplete="designation" value="{{ old('designation') }}" placeholder="Your Designation Here" autofocus>

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

                                    <input id="organization" type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" autocomplete="organization" value="{{ old('organization') }}" placeholder="Organization Name Here" autofocus>

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

                                    <input id="address_org" type="text" class="form-control @error('address_org') is-invalid @enderror" name="address_org" autocomplete="address_org" value="{{ old('address_org') }}" placeholder="Address of Organization Here" autofocus>

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

                <div class="card mb-4">
                    <div class="card-header text-white bg-dark">
                        <h4 class="m-0">
                            Login Details
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __('Email Address *') }}</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email Address for Login" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">{{ __('Password * (Min. 8 charecters)') }}</label>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password Here" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password *') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Your Password Again" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" required type="checkbox" value="" name="terms" id="terms">
                                    <label class="form-check-label" for="terms">
                                      I hereby, agree to the <a href="#" target="_blank">terms and conditions of IITJUAA</a>
                                    </label>
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
                                    {{ __('Register') }}
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
