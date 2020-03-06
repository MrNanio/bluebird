@extends('admin_layout')
@section('title') Admin Panel @endsection

@section('content')


        <br/><h3>Użytkownicy:</h3>
        @foreach($pages as $page)

            <table class="table table-hover">
                <tr>
                    <td colspan="4"> <h3>USER ID: {{$page->id}}</h3></td>
                </tr>
                <tr>
                    <td><h6>name: </h6>{{$page->name}}</td> <td>role: {{$page->role_id}}</td><td></td> <td><h6>email:</h6> {{$page->email}}</td>
                </tr>
                <tr>
                    <td><h6>created:</h6>{{$page->created_at}}</td>
                    <td></td>
                    <td></td>
                    <td><h6>updated:</h6>{{$page->updated_at}}</td>
                </tr>

                <tr>
                    <td><a class="btn btn-info" href ="{{route('admin.edit', $page)}}">Edit</a></td><td></td><td></td><td><form action="{{ route('admin.destroy', $page->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                </tr>


            </table>
            <br/><br/>
            <br/>
        @endforeach

@endsection
