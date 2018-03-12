@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><code><b><i class="fa fa-eye"></i> Carrier Information of Carrier ID: {{ $carrier->carrierid }}</b></code> </h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><b>carrierid</b></td>
                                    <td>{{ $carrier->carrierid }}</td>
                                </tr>
                                <tr>
                                    <td><b>register</b></td>
                                    <td>{{ $carrier->register }}</td>
                                </tr>
                                <tr >
                                    <td colspan="2" class="text-center bg-info"><b><i>Account Entry</i></b></td>
                                </tr>
                                <tr>
                                    <td><b>disallow</b></td>
                                    <td>{{ $carrier->disallow }}</td>
                                </tr>
                                <tr>
                                    <td><b>type</b></td>
                                    <td>{{ $carrier->type }}</td>
                                </tr>
                                <tr>
                                    <td><b>dtmfmode</b></td>
                                    <td>{{ $carrier->dtmfmode }}</td>
                                </tr>
                                <tr>
                                    <td><b>context</b></td>
                                    <td>{{ $carrier->context }}</td>
                                </tr>
                                <tr>
                                    <td><b>qualify</b></td>
                                    <td>{{ $carrier->qualify }}</td>
                                </tr>
                                <tr>
                                    <td><b>insecure</b></td>
                                    <td>{{ $carrier->insecure }}</td>
                                </tr>
                                <tr>
                                    <td><b>nat</b></td>
                                    <td>{{ $carrier->nat }}</td>
                                </tr>
                                <tr>
                                    <td><b>host</b></td>
                                    <td>{{ $carrier->host }}</td>
                                </tr>
                                <tr>
                                    <td><b>username</b></td>
                                    <td>{{ $carrier->username }}</td>
                                </tr>
                                <tr>
                                    <td><b>secret</b></td>
                                    <td>{{ $carrier->secret }}</td>
                                </tr>
                                <tr>
                                    <td><b>gsmallow</b></td>
                                    <td>{{ $carrier->gsmallow }}</td>
                                </tr>
                                <tr>
                                    <td><b>alawallow</b></td>
                                    <td>{{ $carrier->alawallow }}</td>
                                </tr>
                                <tr>
                                    <td><b>ulawallow</b></td>
                                    <td>{{ $carrier->ulawallow }}</td>
                                </tr>
                                 <!-- <div class="thumbnail">
                        <div class="text-center bg-primary"><b><i>Account Entry</i></b></div> -->
                                <tr >
                                    <td colspan="2" class="text-center bg-success"><b><i>Dialplan Entry</i></b></td>
                                </tr>
                                <tr>
                                    <td><b>AGIexten</b></td>
                                    <td>{{ $carrier->AGIexten }}</td>
                                </tr>
                                <tr>
                                    <td><b>SETexten</b></td>
                                    <td>{{ $carrier->SETexten }}</td>
                                </tr>
                                <tr>
                                    <td><b>Dialexten</b></td>
                                    <td>{{ $carrier->Dialexten }}</td>
                                </tr>
                                <tr>
                                    <td><b>Hangupexten</b></td>
                                    <td>{{ $carrier->Hangupexten }}</td>
                                </tr>
                            <!-- </div>
                            </div> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
