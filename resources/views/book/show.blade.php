@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">book {{ $book->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/book') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/book/' . $book->id . '/edit') }}" title="Edit book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('book' . '/' . $book->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete book" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $book->id }}</td>
                                    </tr>
                                    <tr><th> Id Room </th><td> {{ $book->id_room }} </td></tr><tr><th> Sub Name </th><td> {{ $book->sub_name }} </td></tr><tr><th> Professor </th><td> {{ $book->professor }} </td></tr><tr><th> Day </th><td> {{ $book->day }} </td></tr><tr><th> Time Start </th><td> {{ $book->time_start }} </td></tr><tr><th> Time End </th><td> {{ $book->time_end }} </td></tr><tr><th> Esc </th><td> {{ $book->esc }} </td></tr><tr><th> User Id </th><td> {{ $book->user_id }} </td></tr><tr><th> Phone </th><td> {{ $book->phone }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
