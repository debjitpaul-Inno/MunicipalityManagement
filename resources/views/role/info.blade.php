@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Role Information')}}</h1>
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
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label id="title" class="col-sm-3 col-form-label">{{__('Role Name')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($role->name) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="description" class="col-sm-3 col-form-label">{{__('Description')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($role->description ?? 'N/A') }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="status" class="col-sm-3 col-form-label">{{__('Status')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            @if($role->status == 1)
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
                                    <a href="{{ route('role.edit', $role->slug) }}"
                                       class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;
                                        {{__('Update')}}</a>

                                    <a href="{{ route('role.delete', $role->slug) }}"
                                       class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;
                                        {{__('Delete')}}</a>
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


