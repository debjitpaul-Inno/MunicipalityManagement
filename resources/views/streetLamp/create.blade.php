@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Add Street Lamp')}}</h1>
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
                            <form role="form" id="createForm" action="{{route('streetLamp.store')}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="lamp_name" class="col-sm-3 col-form-label"><span>*</span>{{__('Lamp Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lamp_name" name="lamp_name"
                                                   value="{{ old('lamp_name') }}"
                                                   required>
                                            @if ($errors->has('lamp_name'))
                                                <span class="text-danger">{{ $errors->first('lamp_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="area" class="col-sm-3 col-form-label"><span>*</span>{{__('Area')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="area" name="area"
                                                      required>{{ old('area') }}</textarea>
                                            @if ($errors->has('area'))
                                                <span class="text-danger">{{ $errors->first('area') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="road" class="col-sm-3 col-form-label"><span>*</span>{{__('Road')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="road" name="road"
                                                      required>{{ old('road') }}</textarea>
                                            @if ($errors->has('road'))
                                                <span class="text-danger">{{ $errors->first('road') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="category" class="col-sm-3 col-form-label"><span>*</span>{{__('Category')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="category" name="category"
                                                   value="{{ old('category') }}" required>
                                            @if ($errors->has('category'))
                                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="installation_date" class="col-sm-3 col-form-label"><span>*</span>{{__('Installation Date')}}</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="installation_date" name="installation_date"
                                                   value="{{ old('installation_date') }}"
                                                   required>
                                            @if ($errors->has('installation_date'))
                                                <span class="text-danger">{{ $errors->first('installation_date') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="longitude"
                                               class="col-sm-3 col-form-label">{{__('Longitude')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="longitude" name="longitude"
                                                   value="{{ old('longitude') }}">
                                            @if ($errors->has('longitude'))
                                                <span class="text-danger">{{ $errors->first('longitude') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="latitude" class="col-sm-3 col-form-label">{{__('Latitude')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="latitude" name="latitude"
                                                   value="{{ old('latitude') }}">
                                            @if ($errors->has('latitude'))
                                                <span class="text-danger">{{ $errors->first('latitude') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="details" class="col-sm-3 col-form-label">{{__('Details')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="details" name="details"
                                                   value="{{ old('details') }}">
                                            @if ($errors->has('details'))
                                                <span class="text-danger">{{ $errors->first('details') }}</span>
                                            @endif
                                        </div>
                                    </div>
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
        //For Longitude
        $("input[name*='longitude']").keyup(function () {
            let value_input = $("input[name*='longitude']").val();
            let regexp = /[^0-9-.]/g;
            if (value_input.match(regexp)) {
                $("input[name*='longitude']").val(value_input.replace(regexp, ''))
            }
        });
        //For Latitude
        $("input[name*='latitude']").keyup(function () {
            let value_input = $("input[name*='latitude']").val();
            let regexp = /[^0-9-.]/g;
            if (value_input.match(regexp)) {
                $("input[name*='latitude']").val(value_input.replace(regexp, ''))
            }
        });


    </script>
@endpush




