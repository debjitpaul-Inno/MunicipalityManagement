@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Update Work Information')}}</h1>
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
                            <form role="form" id="editForm" action="{{route('work.update', $data->slug)}}"
                                  class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="category"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Selected Work Level')}}</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="category" id="category" required>
                                                <option hidden></option>
                                                <option
                                                    value="Emergency" {{$data->category == "Emergency" ? 'selected':''}}>
                                                    Emergency
                                                </option>
                                                <option
                                                    value="Normal" {{$data->category == "Normal" ? 'selected':''}}>
                                                    Normal
                                                </option>

                                                @if ($errors->has('category'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('category') }}</span>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Name of the complainant')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   value="{{ old('name', $data->name) }}"
                                                   required>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Complain Title')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="title" name="title"
                                                   value="{{ old('title', $data->title) }}"
                                                   required>
                                            @if ($errors->has('title'))
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="details" class="col-sm-3 col-form-label"><span>*</span>{{__('Complain Details')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="details" name="details"
                                                      required>{{ old('details',$data->details) }}</textarea>
                                            @if ($errors->has('details'))
                                                <span class="text-danger">{{ $errors->first('details') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Address')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="address" name="address"
                                                      required>{{ old('address', $data->address) }}</textarea>
                                            @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="area"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Area')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="area"
                                                   name="area"
                                                   value="{{ old('area', $data->area) }}"
                                                   required>
                                            @if ($errors->has('area'))
                                                <span class="text-danger">{{ $errors->first('area') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone_number"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Phone Number')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="phone_number"
                                                   name="phone_number"
                                                   value="{{ old('phone_number', $data->phone_number) }}"
                                                   required>
                                            @if ($errors->has('phone_number'))
                                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ward_id" class="col-sm-3 col-form-label"><span>*</span>{{__('Ward')}}</label>
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
                                    <div class="form-group row">
                                        <label for="current_status"
                                               class="col-sm-3 col-form-label"><span>*</span>{{__('Current Status')}}</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="current_status" id="current_status" required>
                                                <option hidden></option>
                                                <option
                                                    value="complete" {{$data->current_status == "complete" ? 'selected':''}}>
                                                    Completed
                                                </option>
                                                <option
                                                    value="pending" {{$data->current_status == "pending" ? 'selected':''}}>
                                                    Pending
                                                </option>
                                                <option
                                                    value="in_progress" {{$data->current_status == "in_progress" ? 'selected':''}}>
                                                    In progress
                                                </option>

                                                @if ($errors->has('current_status'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('current_status') }}</span>
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




