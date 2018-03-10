@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><code><b><i class="fa fa-eye"></i> Phone Extension Information of : {{ $phone->thana }}</b></code> </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><b>ID</b></td>
                                    <td>{{ $phone->id }}</td>
                                    <td><b>Thana</b></td>
                                    <td>{{ $phone->thana }}</td>
                                </tr>
                                <tr>
                                    <td><b>Username</b></td>
                                    <td>{{ $phone->username }}</td>
                                    <td><b>Secret</b></td>
                                    <td>{{ $phone->secret }}</td>
                                </tr>
                                <tr>
                                    <td><b>Account Code</b></td>
                                    <td>{{ $phone->accountcode }}</td>
                                    <td><b>Caller ID</b></td>
                                    <td>{{ $phone->callerid }}</td>
                                </tr>
                                <tr>
                                    <td><b>Mail Box</b></td>
                                    <td>{{ $phone->mailbox }}</td>
                                    <td><b>Context</b></td>
                                    <td>{{ $phone->context }}</td>
                                </tr>
                                <tr>
                                    <td><b>Type</b></td>
                                    <td>{{ $phone->type }}</td>
                                    <td><b>Host</b></td>
                                    <td>{{ $phone->host }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection