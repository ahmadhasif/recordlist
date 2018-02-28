@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/record/create" class="btn btn-primary">New Record</a>
    </div>


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>IC Number</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                        <td></td>
                        {{--<td>{{ $record->id }}</td>--}}
                        <td>{{ $record->name }}</td>
                        {{--<td><a href="{{ $record->id }}">{{ $record->name }}</a></td>--}}
                        <td>{{ $record->ic_number }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->email }}</td>

                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="/record/edit/{{$record->id}}"><i class="icon-pencil"></i>Edit</a></li>
                                        <li><a href="/record/destroy/{{$record->id}}"><i class="icon-trash"></i>Delete</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </td>
                    </tr>


                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
    @endsection