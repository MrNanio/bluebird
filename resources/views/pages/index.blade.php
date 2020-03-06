@extends('pages_layout')
@section('title') Dodaj @endsection
@section('content')
    <br/>
    <a class="btn btn-primary" href="{{route('pages.create')}}">Dodaj nowe ogłoszenie</a> <a class="btn btn-primary" href="{{url('noticeboard')}}">Zobacz wszystkie ogłoszenie</a>
    <br/><br/><h3>Moje ogłoszenia:</h3>
    @foreach($pages as $page)

        <table class="table table-hover">
            <tr>
                <td colspan="3"><h3>tytuł: {{$page->title}}</h3></td>
                <td><h3> data dodania: {{$page->updated_at}}</h3></td>
            </tr>
            <tr>
                <td><h6>numer ogłoszenia: </h6>{{$page->id}}</td> <td></td><td></td><td><h6>miasto:</h6> {{$page->lokalizacja}}</td>
            </tr>
            <tr>
                <td><h6>poziom:</h6> {{$page->poziom}}</td><td></td><td></td><td><h6>przedmiot:</h6> {{$page->przedmiot}}</td>
            </tr>
            <tr>
                <td><h6>osoba kontaktowa:</h6> {{$page->Imie}}</td><td></td><td></td><td><h6>kontakt:</h6> {{$page->tel}}</td>
            </tr>
            <tr>
                <td colspan="4"><h6>treść:</h6> {{$page->content}}</td>
            </tr>
            <tr>
                <td><a class="btn btn-info" href ="{{route('pages.edit', $page)}}">Edit</a></td><td></td><td></td><td><form action="{{ route('pages.destroy', $page->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form></td>
            </tr>
        </table>
        <br/><br/>
    @endforeach

    <br/><br/>
    <br/><br/>
@endsection
