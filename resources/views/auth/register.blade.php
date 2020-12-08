@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl-4 pa-0">
            <div class="auth-form-wrap py-xl-0 py-50">
                <div class="auth-form w-xxl-100 w-xl-75 w-sm-90 w-xs-100">

                    <form style="border-radius: 20px; background-color: #94939b; padding: 20px;;" method="POST"
                          action="{{ route('auth.register')}} ">
                        {{ csrf_field() }}
                        @include('errors.list')
                        <p class="mb-30"><span
                                style="color: #ffffff;">Sign up for a Mainstreet account</span></p>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="FirstName" type="text"
                                           name="first_name" value="{{ old('first_name') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-sm-6">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="LastName" type="text" name="last_name" value="{{ old('last_name') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="Phone" type="tel" name="phone" value="{{ old('phone') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="input-group">
                                <textarea class="form-control" style="border-radius: 200px;"
                                          placeholder="Address" name="address">{{ old('address') }}</textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="BVN" type="text" name="bvn" value="{{ old('bvn') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="Enter Password" type="password" name="password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="input-group">
                                    <input class="form-control" style="border-radius: 200px;"
                                           placeholder="Confirm Password" type="password" name="password_confirmation">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-25">
                            <input class="custom-control-input" id="same-address" type="checkbox" checked>
                            <label class="custom-control-label font-14" for="same-address"><span
                                    style="color: #ffffff;">I agree to the</span><span><a
                                        href="#"> Terms & Conditions</a></label>
                        </div>
                        <button class="btn btn-primary btn-block" style="border-radius: 20px;" type="submit">
                            Sign up
                        </button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection

