@extends('layout')

@section('form')
            <form metod="get" action="{{ route ('search')}}" >
                <div class="form-row" >
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="s" name="s" placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>

            </form>
@endsection

@section('content')
  @if(count($users))
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phone}}</td>
            </tr>
            @endforeach
            
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

    {{$users->links()}}
    @endif
@endsection