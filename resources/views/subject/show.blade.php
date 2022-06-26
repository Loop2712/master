@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">subject {{ $subject->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/subject') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/subject/' . $subject->id . '/edit') }}" title="Edit subject"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('subject' . '/' . $subject->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete subject" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $subject->id }}</td>
                                    </tr>
                                    <tr><th> Id Sub </th><td> {{ $subject->id_sub }} </td></tr><tr><th> Sub Name </th><td> {{ $subject->sub_name }} </td></tr><tr><th> Professor </th><td> {{ $subject->professor }} </td></tr><tr><th> Day </th><td> {{ $subject->day }} </td></tr><tr><th> Time Start </th><td> {{ $subject->time_start }} </td></tr><tr><th> Time End </th><td> {{ $subject->time_end }} </td></tr><tr><th> Sub Room Id </th><td> {{ $subject->sub_room_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
