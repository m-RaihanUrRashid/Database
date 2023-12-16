@extends('layout')
@section('title' , 'Appointment')
@section('content')

<style>

    .parent {
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .clickable-row:hover {
        background-color: red; 
        cursor: pointer;
    }

    .clickable-row.selected {
        background-color: #c0c0c0;
    }

    .table-hover tbody tr:hover td {
        background: #E6F7FF;
    }

    .table-hover tbody tr.selected td {
        background: #3498db;
        
    }

    .btn {
            padding: 10px;
            font-size: 14px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

</style>

@if(session()->has('success'))
    <div class="alert alert-danger" role="alert"> 
        {{session('success')}}
    </div>
@endif

<div class="parent">
        <div class="d-flex justify-content-center">
            <table class="table table-hover" id="specialistid" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
                <thead style="background-color: #3366CC; color: #fff; border-bottom: 2px solid lightblue;">
                    <tr >
                        <th style="padding: 6px;">Specialist ID</th>
                        <th style="padding: 6px;width: 200px;">Name</th>
                        <th style="padding: 6px;">Type</th>
                        <th style="padding: 6px; width: 150px;">Location</th>
                        <th style="padding: 6px;">Date</th>
                        <th style="padding: 6px;">Time</th>
                        <th style="padding: 6px;"></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($apps as $app)
                        <tr class="clickable-row" onclick="markAsDone(1)" style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                            <td>{{$app->csUserID}}</td>
                            
                            <td>
                                @if ($app->specialist)
                                    {{ $app->specialist->person ? $app->specialist->person->cFname.' '.$app->specialist->person->cLname : 'No Specialist Information' }}</p>
                                @else
                                    No Specialist Assigned
                                @endif
                            </td>

                            <td>{{$app->specialist->cType}}</td>

                            <td>{{$app->specialist->cOff_Address}}</td>
                            <td>{{$app->dappDate}}</td>
                            <td>{{$app->cappTime}}</td>
                            <td>
                                <form method="post" action="{{ route('destroy.app', [
                                    'cpUserID' => $app->cpUserID,
                                    'csUserID' => $app->csUserID,
                                    'dappDate' => $app->dappDate,
                                    'cappTime' => $app->cappTime,
                                ]) }}" style="margin-top: 5px;">
                                    @csrf
                                    @method('delete')
                                    <button onclick="t(this)" class="btn" type="submit" name="delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    <!-- </form> -->
</div>

<script>
    function t() {
        console.log(this);
    }
</script>

@endsection