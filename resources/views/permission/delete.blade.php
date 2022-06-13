@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Delete Permission')}}</h1>
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
                            <form role="form" id="dltForm" action="{{ route('permission.destroy', $data->slug) }}" class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label id="title" class="col-sm-3 col-form-label">{{__('Title')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->name) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="description" class="col-sm-3 col-form-label">{{__('Description')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->description) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="status" class="col-sm-3 col-form-label">{{__('Status')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            @if($data->status == 1)
                                                {{ ucwords('Active' ?? '') }}
                                            @else
                                                {{ucwords('Inactive' ?? '')}}
                                            @endif
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


