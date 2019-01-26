@extends('admin.layouts.layout-basic')

@section('scripts')
<script src="/assets/admin/js/gm/example.js"></script>
@stop

@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">{{ isset($menu) ? $menu : '' }}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('example.index')}}">{{ isset($menu) ? $menu : '' }}</a></li>
            <li class="breadcrumb-item active">{{ isset($menu) ? $menu : '' }}</li>
        </ol>
        <div class="page-actions">
            <button class="btn btn-primary" data-toggle="modal" data-target=".ls-example-modal-lg">+ {{ isset($menu) ?
                $menu : '' }}</button>
            <button class="btn btn-danger"><i class="icon-fa icon-fa-trash"></i> Delete </button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6>Action Data</h6>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>field_1</th>
                                <th>field_2</th>
                                <th>field_3</th>
                                <th>field_4</th>
                                <th>field_5</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Large modal -->
    <form id="validateForm">
        <div class="modal fade ls-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Large Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="content">
                            

                                <div class="form-group">
                                    <label for="field_1">field_1</label>
                                    <input class="form-control" type="text" name="field_1" id="field_1">
                                </div>
                                <div class="form-group">
                                    <label for="field_2">field_2</label>
                                    <input class="form-control" type="text" name="field_2" id="field_2">
                                </div>
                                <div class="form-group">
                                    <label for="field_3">field_3</label>
                                    <input class="form-control" type="text" name="field_3" id="field_3">
                                </div>
                                <div class="form-group">
                                    <label for="field_4">field_4</label>
                                    <input class="form-control" type="text" name="field_4" id="field_4">
                                </div>
                                <div class="form-group">
                                    <label for="field_4">created_by</label>
                                    <select class="form-control ls-select2" name="created_by" id="created_by">
                                        @foreach($users as $key => $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@stop