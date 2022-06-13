@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Create Permission')}}</h1>
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
                            <form role="form" id="createForm" action="{{route('permission.store')}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" id="title"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Title')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="title" name="title"
                                                   value="{{ old('title') }}" placeholder="Title" required>
                                            @if ($errors->has('title'))
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" id="description" class="col-sm-3 col-form-label"><span> *</span>{{__('Description')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" name="description" id="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label"><span> *</span>{{__('Status')}}</label>
                                        <div class="col-sm-6 pt-2">
                                            <div class="form-check form-check-inline">
                                                <label for="active">
                                                    <input type="radio" id="active" name="status" value="1">
                                                    <span class="mr-4">{{__('Active')}}</span>
                                                </label>
                                                <label for="inactive">
                                                    <input type="radio" id="inactive" name="status" value="0">
                                                    <span class="mr-4">{{__('Inactive')}}</span>
                                                </label>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        @include('layouts.partials.backBtn')
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i>&nbsp;Save
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


