@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Create Official Order')}}</h1>
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
                            <form role="form" id="createForm" action="{{route('officialOrder.store')}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf

{{--                                                                @if($errors->any())--}}
{{--                                                                    {{ implode('', $errors->all('<div>:message</div>')) }}--}}

{{--                                                                @endif--}}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Order Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   value="{{ old('name') }}"
                                                   required>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Date')}}</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="date" name="date"
                                                   value="{{ old('date') }}"
                                                   required>
                                            @if ($errors->has('date'))
                                                <span class="text-danger">{{ $errors->first('date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file" class="col-sm-3 col-form-label">{{__('Upload Document')}}</label>
                                        <div class="input-group col-sm-6">
                                            <div class="custom-file">
                                                <input type="file" name="file"  id="file" value="{{ old('file') }}">
{{--                                                <label class="custom-file-label" for="file">Choose file</label>--}}
                                            </div>
                                        </div>
                                        @if ($errors->has('file'))
                                            <span class="text-danger">{{ $errors->first('file') }}</span>
                                        @endif
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

    </script>
@endpush




