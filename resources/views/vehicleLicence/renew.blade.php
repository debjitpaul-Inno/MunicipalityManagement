@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Renew Vehicle Licence')}}</h1>
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
                            <form role="form" id="editForm" action="{{route('vehicleLicence.renewUpdate', $data->slug)}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="issue_date"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Issue Date')}} </label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="issue_date" name="issue_date"
                                                   value="{{ old('issue_date', $data->expiry_date) }}">
                                            @if ($errors->has('issue_date'))
                                                <span class="text-danger">{{ $errors->first('issue_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="expiry_date"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Expiration Date')}} </label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control take_future_date" id="expiry_date" name="expiry_date"
                                                   value="{{ old('expiry_date') }}">
                                            @if ($errors->has('expiry_date'))
                                                <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        @include('layouts.partials.backBtn')
                                        <button type="submit" class="btn btn-success"><i class="fas fa-highlighter"></i>&nbsp;{{__('Renew')}}
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
        //For National Id
        $("input[name*='nid']").keyup(function () {
            let value_input = $("input[name*='nid']").val();
            let regexp = /[^0-9]/g;
            if (value_input.match(regexp)) {
                $("input[name*='nid']").val(value_input.replace(regexp, ''))
            }
        });
        //For Full Name
        $("input[name*='name']").keyup(function () {
            let value_input = $("input[name*='name']").val();
            let regexp = /[^A-Za-z. ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='name']").val(value_input.replace(regexp, ''))
            }
        });
        //For Full Name
        $("input[name*='owner_name']").keyup(function () {
            let value_input = $("input[name*='owner_name']").val();
            let regexp = /[^A-Za-z. ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='owner_name']").val(value_input.replace(regexp, ''))
            }
        });
        //For Father's Name
        $("input[name*='father_name']").keyup(function () {
            let value_input = $("input[name*='father_name']").val();
            let regexp = /[^A-Za-z. ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='father_name']").val(value_input.replace(regexp, ''))
            }
        });
        //For Mother's Name
        $("input[name*='mother_name']").keyup(function () {
            let value_input = $("input[name*='mother_name']").val();
            let regexp = /[^A-Za-z. ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='mother_name']").val(value_input.replace(regexp, ''))
            }
        });
    </script>
@endpush




