@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Create Vehicle Type')}}</h1>
                    </div>
                </div><!-- /.container-fluid -->
                </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <form role="form" id="createForm" action="{{route('vehicleType.store')}}" class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="type" id="type" class="col-sm-3 col-form-label">{{_('Vehicle Type')}} </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="type" name="type"
                                                   value="{{ old('type') }}" required>
                                            @if ($errors->has('type'))
                                                <span class="text-danger">{{ $errors->first('type') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fees" id="fees" class="col-sm-3 col-form-label">{{_('Vehicle Licence Fees')}} </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="fees" name="fees"
                                                   value="{{ old('fees') }}" required>
                                            @if ($errors->has('fees'))
                                                <span class="text-danger">{{ $errors->first('fees') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        @include('layouts.partials.backBtn')
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i>&nbsp;Save</button>

{{--                                        <button type="submit" class="btn btn-success swalDefaultSuccess">--}}
{{--                                            <i class="fas fa-plus-circle"></i>&nbsp;Save--}}
{{--                                        </button>--}}
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

    </script>
@endpush


