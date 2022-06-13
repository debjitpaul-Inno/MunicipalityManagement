@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Emergency Call Entry')}}</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <form role="form" id="createForm" action="{{route('emergencyCall.store')}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label">{{__('Name of Caller')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name"
                                                   name="name" value="{{ old('name') }}"
                                                   required>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="number"
                                               class="col-sm-3 col-form-label">{{__('Phone Number')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="phone_number"
                                                   name="phone_number" value="{{ old('phone_number') }}"
                                                   required>
                                            @if ($errors->has('phone_number'))
                                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="details" class="col-sm-3 col-form-label">{{__('Call Details')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="details" name="details"
                                                      required>{{ old('details') }}</textarea>
                                            @if ($errors->has('details'))
                                                <span class="text-danger">{{ $errors->first('details') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date_of_call" class="col-sm-3 col-form-label">{{__('Date Of Call')}}</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="date_of_call" name="date_of_call" value="{{ old('date_of_call') }}"
                                                   required>
                                            @if ($errors->has('date_of_call'))
                                                <span class="text-danger">{{ $errors->first('date_of_call') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="current_status" class="col-sm-3 col-form-label">{{__('Current Status')}}</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="current_status" id="current_status" required>
                                                <option hidden></option>
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="in_progress">In progress</option>

                                                @if ($errors->has('current_status'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('current_status') }}</span>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
{{--                                    <div class="form-group row">--}}
{{--                                        <label for="address"--}}
{{--                                               class="col-sm-3 col-form-label">{{__('Address')}}</label>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <textarea type="text" class="form-control" id="address" name="address"--}}
{{--                                                      required>{{ old('address') }}</textarea>--}}
{{--                                            @if ($errors->has('address'))--}}
{{--                                                <span class="text-danger">{{ $errors->first('address') }}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label for="area"--}}
{{--                                               class="col-sm-3 col-form-label">{{__('Area')}}</label>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <input type="text" class="form-control" id="area"--}}
{{--                                                   name="area" value="{{ old('area') }}"--}}
{{--                                                   required>--}}
{{--                                            @if ($errors->has('area'))--}}
{{--                                                <span class="text-danger">{{ $errors->first('area') }}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="card-footer text-center">
                                        @include('layouts.partials.backBtn')
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i>&nbsp;{{__('Save')}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('customScripts')
    <!-- Page specific script -->
    <script>
        //For Phone_Number
        $("input[name*='phone_number']").keyup(function () {
            let value_input = $("input[name*='phone_number']").val();
            let regexp = /[^0-9+]/g;
            if (value_input.match(regexp)) {
                $("input[name*='phone_number']").val(value_input.replace(regexp, ''))
            }
        });
        //For Complainant Name
        $("input[name*='name']").keyup(function () {
            let value_input = $("input[name*='name']").val();
            let regexp = /[^A-Za-z. ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='name']").val(value_input.replace(regexp, ''))
            }
        });

    </script>
@endpush




