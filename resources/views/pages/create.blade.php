@extends('pages_layout')
@section('title') Dodaj @endsection
@section('content')
    <br/><h3>dodawanie ogłoszenia:</h3>
    <form action="{{ action('PagesController@store') }}" method="post" role="form" >
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class ="btn btn-danger">{{$error}}</div>
            @endforeach
        @endif
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="id_us" value="{{ Auth::user()->id }}" />
        <table class="table table-hover">
        <tr>
            <td>poziom:  <div class="form-group">
                    <select class="form-control" name="poziom">
                        <option>Szkoła Podstawowa 1-4</option>
                        <option>Szkoła Podstawowa 5-8</option>
                        <option>Liceum</option>
                        <option>Technikum</option>
                        <option>Studia</option>
                        <option>Inne</option>
                    </select>
                </div>
            </td>
            <td></td>
            <td></td>
            <td>miasto:
                <div class="form-group">
                    <input type="text" required class="form-control" name="lokalizacja" />
                </div>
            </td>
        </tr>
        <tr>
            <td>tytuł:
                <div class="form-group">

                    <select class="form-control" name="title">
                        <option>Szukam koropetycji</option>
                        <option>Oferuje koropetycje</option>
                    </select>
                </div>
            </td>
            <td></td>
            <td>
            </td>
            <td>przedmiot: <div class="form-group">

                    <select class="form-control" name="przedmiot">
                        <option>Matematyka</option>
                        <option>Język Polski</option>
                        <option>Język Angielski</option>
                        <option>Fizyka</option>
                        <option>Chemia</option>
                        <option>Geografia</option>
                        <option>Biologia</option>
                        <option>Informatyka</option>
                        <option>Język Niemiecki</option>
                        <option>Inne</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>osoba kontaktowa:  <div class="form-group">
                    <input type="text" required class="form-control" name="Imie" value="{{ Auth::user()->name }}"  />
                </div>
            </td>
            <td></td>
            <td></td>
            <td>kontakt:<div class="form-group">
                    <input type="text" required class="form-control" name="tel" pattern="\d\d\d\d\d\d\d\d\d" />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">treść:  <div class="form-group">
                    <input type="text" required class="form-control" name="content" />
                </div></td>
        </tr>
        <tr>
            <td  colspan="4" rowspan="3"><input type="submit" required value="Add" class="btn btn-primary" />
                <a href="{{ action('PagesController@index') }}" class="btn btn-link">Return</a></td>
        </tr>
    </table>
</form>
   <br/> <br/>
@endsection
