@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Update Ward Information')}}</h1>
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
                            <form role="form" id="editForm" action="{{route('ward.update', $data->slug)}}" class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label"><span> *</span>{{__('Ward Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   value="{{ old('name', $data->name) }}" placeholder="Name" required>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="number" class="col-sm-3 col-form-label"><span> *</span>{{__('Ward Number')}}</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="number" name="number"
                                                   value="{{ old('number', $data->number) }}" placeholder="Number" required>
                                            @if ($errors->has('number'))
                                                <span class="text-danger">{{ $errors->first('number') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="area" class="col-sm-3 col-form-label"><span> *</span>{{__('Ward Area')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" name="area" id="area" class="form-control" placeholder="Area" required>{{ old('area', $data->area) }}</textarea>
                                            @if ($errors->has('area'))
                                                <span class="text-danger">{{ $errors->first('area') }}</span>
                                            @endif
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


