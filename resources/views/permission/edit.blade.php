@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Update Permission Information')}}</h1>
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
                            <form role="form" id="editForm" action="{{route('permission.update', $data->slug)}}" class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 col-form-label"><span> *</span>{{__('Title')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="title" name="title"
                                                   value="{{ old('title', $data->title) }}" placeholder="Title" required>
                                            @if ($errors->has('title'))
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 col-form-label"><span> *</span>{{__('Description')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" name="description" id="description" class="form-control" placeholder="Description" required>{{ old('description', $data->description) }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">{{__('Status')}}</label>
                                        <div class="col-sm-6 pt-2">
                                            <div class="form-check form-check-inline">
                                                <label for="active">
                                                    <input type="radio" name="status" id="active"
                                                           value="1" {{ ($data->status == "1")? "checked" : ""}}>
                                                    <span class="mr-sm-2 mt-0">{{__('Active')}}</span>
                                                </label>
                                                <label for="inactive">
                                                    <input type="radio" name="status" id="inactive"
                                                           value="0" {{ ($data->status == "0")? "checked" : ""}}>
                                                    <span class="mr-sm-2">{{__('Inactive')}}</span>
                                                </label>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        @include('layouts.partials.backBtn')
                                        <button type="submit" class="btn btn-success"><i class="fas fa-highlighter"></i>&nbsp;{{__('Update')}}
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


