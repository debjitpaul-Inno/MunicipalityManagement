@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Update Relief Card Information')}}</h1>
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
                            <form role="form" id="editForm" action="{{route('reliefCard.update', $data->slug)}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="people_id" class="col-sm-3 col-form-label">{{__('People Name')}}</label>
                                        <div class="col-sm-6">
                                            <select class="form-control select2" name="people_id" id="people_id"
                                                    required>
                                                <option hidden
                                                        value="{{ old('people_id', $data->people_id) }}"> {{ $data->peoples->full_name }}</option>
                                                @foreach($peoples as $item)
                                                    <option
                                                        value="{{ $item->id }}" {{$item->people_id == $item->id  ? 'selected' : ''}}>{{ucwords($item->full_name)}}</option>
                                                @endforeach
                                                @if ($errors->has('people_id'))
                                                    <span class="text-danger">{{ $errors->first('people_id') }}</span>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="card_number" class="col-sm-3 col-form-label">{{__('Relief Card Number')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="card_number" name="card_number"
                                                   value="{{ old('card_number', $data->card_number) }}" required>
                                            @if ($errors->has('card_number'))
                                                <span class="text-danger">{{ $errors->first('card_number') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="category_id" class="col-sm-3 col-form-label">{{__('Relief Category Name')}}</label>
                                        <div class="col-sm-6">
                                            <select class="form-control select2" name="category_id" id="category_id"
                                                    required>
                                                <option hidden
                                                        value="{{ old('category_id', $data->category_id) }}"> {{ $data->reliefCategories->name ?? '' }}</option>
                                                @foreach($categories as $item)
                                                    <option hidden
                                                        value="{{ $item->id }}"{{$item->category_id == $item->id  ? 'selected' : ''}} >{{ucwords($item->name)}}</option>
                                                @endforeach
                                                @if ($errors->has('category_id'))
                                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ward_id" class="col-sm-3 col-form-label">{{__('Ward')}}</label>
                                        <div class="col-sm-6">
                                            <select class="form-control select2" name="ward_id" id="ward_id"
                                                    required>
                                                <option hidden
                                                        value="{{ old('ward_id', $data->ward_id) }}"> {{ $data->wards->name }}</option>
                                                @foreach($wards as $item)
                                                    <option
                                                        value="{{ $item->id }}" {{$item->ward_id == $item->id  ? 'selected' : ''}}>{{ucwords($item->name)}}</option>
                                                @endforeach
                                                @if ($errors->has('ward_id'))
                                                    <span class="text-danger">{{ $errors->first('ward_id') }}</span>
                                                @endif
                                            </select>

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




