@extends('layout')
@section('content')
<style>
</style>

<!--Page topic-->
<!--Page topic-->

    <div id="pwrapper1">
        <div class="productRow1">
            <div class="col-sm-10">
                <div class="pageTopic"><h2>Customer Purchases List</h2></div>
            </div>
        </div>

        <div class="iq-search-bar device-search">
            <form method="POST" action="{{route('searchAdminOrder')}}" class="searchbox">
            @csrf
                Search:<a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" name="keyword" type="search" placeholder="Search" aria-label="Search">
                <button type="submit"></button>
            </form>
        </div>
    </div>

    <div class="row" id="pwrapper2">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th width="12%">Order ID</th>
                    <th width="12%">Payment Status</th>
                    <th>Customer Name</th>
                    <th>Status</th>
                    <th>Download Link</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($or as $ord)
                    <tr>
                    <td width="60">
                    </td>
                    <td class="link">
                        <a href="{{ route('editOrder',['id'=>$ord->orderID]) }}" class="editOrder" title="Edit" data-toggle="tooltip"><div class="p-2"><strong>#{{$ord->orderID}}</strong></div></a>
                    </td>
                    <td><span class="badge badge-success">{{$ord->paymentStatus}}</span></td>
                    <td>{{ $ord->username }}</td>
                    @if($ord->status == 'Fulfilled')
                    <td><span class="badge badge-success">{{$ord->status}}</span></td>
                    @elseif($ord->status == 'Cancelled')
                    <td><span class="badge badge-fail">{{$ord->status}}</span></td>
                    @else
                    <td><span class="badge badge-processing">{{$ord->status}}</span></td>
                    @endif
                    <td>{{ $ord->downloadLink }}</td>
                    <td>
                        <Button type="button" class="editBtn">
                        <a href="{{ route('editOrder',['id'=>$ord->orderID]) }}" class="editOrder fa fa-edit" title="Edit" data-toggle="tooltip"></a>
                        </Button>
                    </td>
                    
                    </tr>  

                @endforeach
                </tbody>
            </table>
    </div>
    {{$or->links()}}
@endsection
