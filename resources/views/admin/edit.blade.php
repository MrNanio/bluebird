@extends('admin_layout')
@section('title')
    Admin Panel
@endsection

@section('content')


        <br/><h4>Użytkownik</h4>
        <form method="post" action="{{ route('admin.update', ['id' => $pages->id]) }}">
            @method('PATCH')
            @if($errors->any())

                @foreach($errors->all() as $error)
                    <div class ="btn btn-danger">{{$error}}</div>
                @endforeach


            @endif
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


            <table class="table table-hover">

                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required  value="{{ $pages->name }}" />
                        </div>
                    </td>
                    <td></td>
                    <td><input type="role_id" class="form-control" name="role_id" required  value="{{ $pages->role_id }}" /></td>
                    <td></td>
                    <td><input type="email" class="form-control" name="email" required  value="{{ $pages->email }}" /></td>
                </tr>

                <tr>
                    <td  colspan="4" rowspan="3"><input type="submit" value="Update" class="btn btn-primary" />
                        <a href="{{ action('AdminController@index') }}" class="btn btn-link">Return</a></td>
                </tr>

            </table>
        </form>

@endsection
