@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('tasks.create.title') }}
                </div>
                <div class="panel-body">
                @include('common.errors')
                    <form action="{{ route('tasks.store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">{{ trans('tasks.create.name') }}</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>{{ trans('tasks.create.button') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('tasks.index.title') }}
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>{{ trans('tasks.index.name') }}</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-text">
                                        <div>
                                            {{ trans('tasks.index.example1') }}
                                        </div>
                                    </td>
                                    <td>
                                        <form action="#" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>{{ trans('tasks.index.bt_delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-text">
                                        <div>
                                            {{ trans('tasks.index.example2') }}
                                        </div>
                                    </td>
                                    <td>
                                        <form action="#" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>{{ trans('tasks.index.bt_delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
@endsection
