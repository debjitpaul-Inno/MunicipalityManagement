@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-family: 'Comfortaa'">
                        <h1>{{__('Update Role')}}</h1>
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
                            <form role="form" id="editForm" action="{{route('role.update', $role->slug)}}" class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label"><span> *</span>{{__('Role Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   value="{{ old('name', $role->name) }}" placeholder="Name" required>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" id="description" class="col-sm-3 col-form-label"><span> *</span>{{__('Description')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" name="description" id="description" class="form-control" placeholder="Description">{{ old('description', $role->description) }}</textarea>
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
                                                           value="1" {{ ($role->status == "1")? "checked" : ""}}>
                                                    <span class="mr-sm-2 mt-0">{{__('Active')}}</span>
                                                </label>
                                                <label for="inactive">
                                                    <input type="radio" name="status" id="inactive"
                                                           value="0" {{ ($role->status == "0")? "checked" : ""}}>
                                                    <span class="mr-sm-2">{{__('Inactive')}}</span>
                                                </label>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 text-center mb-3 permission-bg-color">
                                            <span class="p-margin-top">PERMISSIONS ASSIGN TO ROLE</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class='table table-striped table-hover table-light' id="table1">
                                            <thead>
                                            <th style="width: 50%">Title</th>
                                            <th>Action  <input  type="checkbox" id="checkAll"><span> (Check All)</span></th>
                                            </thead>
                                            <tbody>
                                            @if(count($permissions)!==0)
                                                @foreach($permissions as $permission)
                                                    <tr>
                                                        <td>{{ucwords($permission->title ?? '')}}</td>
                                                        <td>
                                                            <input  type="checkbox" name="permission_id[]" id="permission" value="{{$permission->id}}"
                                                            @foreach($role->permissions as $p)
                                                                {{  ($permission->id == $p->id ? ' checked' : '')}}
                                                                @endforeach
                                                            >
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5">
                                                        <h2 class="text-center">No Data Available <i data-feather="frown" ></i> </h2>
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
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
        $('#checkAll').click(function(e){
            var table= $(e.target).closest('table');
            $('td input:checkbox',table).prop('checked',this.checked);
        });
    </script>
@endpush


