@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-danger">
                <h4 class="card-header bg-danger text-white text-center">Your account is <span class="text-warning font-weight-bold">hold</span> due to payment. Please pay first and submit your transection information and wait. We will active your account after verification. Thanks for your patience.</h4>

                <div class="card-body pt-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('payment')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="hidden" name="paymentUserID" id="paymentUserID" value="<?php echo $id; ?>">
                                    <label for="method">{{ __('Payment Method *') }}</label>
                                    <select class="form-control form-select" id="method" name="method">
                                        <option selected disabled>Select Your Payment Method</option>
                                        <option value="bkash">Bkash</option>
                                        <option value="nagad">Nagad</option>
                                        <option value="rocket">Rocket</option>
                                        <option value="bank">Bank</option>
                                        <option value="cash">Cash</option>
                                        <option value="cheque">Cheque</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="number_sent">{{ __('Sent from Mobile Number *') }}</label>

                                    <input id="number_sent" type="text" class="form-control" name="number_sent" autocomplete="number_sent" value="{{ old('number_sent') }}" placeholder="Sent from Mobile Number" autofocus>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="transection_id">{{ __('Transection Id *') }}</label>

                                    <input id="transection_id" type="text" class="form-control" name="transection_id" autocomplete="transection_id" value="{{ old('transection_id') }}" placeholder="Your Transection ID" autofocus>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="represent_name">{{ __('Batch Representative Name (If Paid in cash)') }}</label>

                                    <input id="represent_name" type="text" class="form-control" name="represent_name" autocomplete="represent_name" value="{{ old('represent_name') }}" placeholder="Representative Name if paid in cash" autofocus>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="note">{{ __('Note') }}</label>

                                    <textarea id="note" class="form-control" name="note"  value="{{ old('note') }}" placeholder="Your note here" autofocus></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-0">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Submit Payment Information') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection

