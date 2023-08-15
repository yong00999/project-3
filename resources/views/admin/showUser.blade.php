@extends('layout')
@section('content')
<style>
</style>

<!--Page topic-->
<!--Page topic-->

    <div id="pwrapper1">
        <div class="productRow1">
            <div class="">
                <div class="pageTopic"><h2>Customer List</h2></div>
            </div>
            <div class="addProBtn">
                <div class="p-3">
                    <Button type="button" class="addButton">
                        <a href="{{ route('insertUser') }}" class="addProduct" title="New" data-toggle="tooltip"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Customer</a>
                    </Button>
                </div>
            </div>
        </div>

        <div class="iq-search-bar device-search">
            <form method="POST" action="{{route('search.user')}}" class="searchbox">
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
                    <th></th>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>State</th>
                    <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                    <td width="60">
                    </td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td width="400">{{ $user->email }}</td>
                    <td>{{ $user->contact }}</td>
                   
                    <td>
                        <Button type="button" class="editBtn">
                            <a href="{{ route('editUser',['id'=>$user->id]) }}" class="editCategory fa fa-edit" title="Edit" data-toggle="tooltip"></a>
                        </Button>

                        <button type="button" class="deleteBtn">
                            <a href="{{ route('deleteUser',['id'=>$user->id]) }}" class="deleteSupplier fa fa-trash-o" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"></a>
                        </button>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>

@endsection
