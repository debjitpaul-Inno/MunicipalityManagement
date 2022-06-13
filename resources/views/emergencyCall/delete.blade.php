@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Delete Emergency Call Information')}}</h1>
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
                            <form role="form" id="dltForm" action="{{ route('emergencyCall.destroy', $data->slug) }}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label id="name" class="col-sm-3 col-form-label">{{__('Name of caller')}}
                                            :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->name) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="date_of_call" class="col-sm-3 col-form-label">{{__('Date Of Call')}}
                                            :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->date_of_call) }}
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label id="address" class="col-sm-3 col-form-label">{{__('Phone Number')}}
                                            :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->phone_number) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="details" class="col-sm-3 col-form-label">{{__('Call Details')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->details }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="current_status" class="col-sm-3 col-form-label">{{__('Current Status')}}
                                            :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords(getWordWithSpace($data->current_status) ) }}
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    @include('layouts.partials.backBtn')
                                    <button type="submit" name="dltBtn" id="dltBtn" value="Save"
                                            class="btn btn-danger ml-2"><i
                                            class="fas fa-trash"></i>&nbsp;{{__('Delete')}}
                                    </button>
                                    {{--                                    <button type="submit" name="createBtn" id="createBtn" value="Save" class="btn btn-info">Save</button>--}}
                                    {{--                                    <button type="submit" class="btn btn-default float-right">Cancel</button>--}}
                                </div>
                                <!-- /.card-footer -->
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



