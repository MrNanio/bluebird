<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pl">
<head>
    <title>Regulamin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--style Bootstrap-a-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css"/>
    -->
    <!--własny styl css-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <!--fonty-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

</head>
<body>
<div class="site-branding">
    <h1 class="site-title">bluebird</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-dark
             sticky-top">
    <div class="container">
        <h3><a class="navbar-brand" href="{{url('/')}}">bluebird</a></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('about')}}">Regulamin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('noticeboard')}}">Ogłoszenia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('pages')}}">Dodaj</a>
                </li>
                @if (\Illuminate\Support\Facades\Auth::id()==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin')}}">Admin</a>
                    </li>
                @endif

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <br/><h2>REGULAMIN SERWISU INTERNETOWEGO</h2>
    <h4>www.bluebird.pl</h4><br/>
    <h4>I Postanowienia ogólne.</h4><br/>
<h5>
    Serwis www.bluebird.pl - jest pośrednikiem ogłoszeniowym mającym na celu stworzenie możliwości do umieszczenia ofert ogłoszeń Użytkowników Serwisu. Umożliwia założenie,
    administrację i edycję ogłoszeń na zasadach określonych w niniejszym Regulaminie. Użytkownikiem niniejszy Regulamin, uznawany za wzorzec umowy w rozumieniu art. 384
    Kodeksu cywilnego.</h5><br/>

    <h4>II Umieszczanie Ogłoszeń na stronie Serwisu.</h4><br/>
<h5>
    Użytkownik, który chce skorzystać z Usług Serwisu musi wcześniej dokonać bezpłatnej rejestracji. Po zakończeniu rejestracji posiada możliwość zalogowania się do
    Panelu Użytkownika umożliwiającego pełne korzystanie z Usług Serwisu. Każdy Użytkownik ma prawo do posiadania jednego Panelu Użytkownika.
    Niedopuszczalne jest także wspólne posiadanie jednego Panelu Użytkownika przez więcej niż jednego Użytkownika. Administrator Serwisu uprawniony jest do odmowy
    zarejestrowania drugiego Panelu tego samego Użytkownika oraz do usunięcia takiego Panelu. Użytkownik w trakcie rejestracji musi się zapoznać z niniejszym Regulaminem.
    Fakt zapoznania się i akceptacji wszystkich postanowień niniejszego Regulaminu potwierdza jawnie przy rejestracji w systemie. Użytkownik rejestrując się lub umieszczając
    Ogłoszenie w Serwisie zobowiązany jest do wprowadzania danych do systemu zgodnych ze stanem faktycznym, zgodnych z prawem i dobrymi obyczajami. Udostępniane dane
    nie mogą naruszać dóbr osobistych ani praw własności osób trzecich. W przypadku zmiany danych podanych przy rejestracji jest zobowiązany do niezwłocznego ich
    uaktualnienia poprzez Panel Użytkownika. Opis oferty zawarty w Ogłoszeniu nie może wprowadzać w błąd potencjalnego Klienta. Administrator Serwisu nie ponosi żadnej
    odpowiedzialności za treść, błędy lub nieścisłości Ogłoszeń Użytkownika oraz żadnych konsekwencji z tym związanych. Użytkownik ponosi pełną odpowiedzialność za powyższe.
    Administrator Serwisu może usunąć Ogłoszenie w przypadku, gdy treści umieszczone w ofercie naruszają postanowienia Regulaminu lub obowiązujące przepisy prawa.
    W takiej sytuacji Użytkownik ponosi odpowiedzialność za swoje działania będące podstawą do usunięcia Ogłoszenia.</h5><br/>

   <h4> III Usługi świadczone przez Administratora Serwisu.</h4><br/>
<h5>
    1.      Świadczenie Usług Serwisu przez Administratora Serwisu odbywa się na podstawie i w zakresie zapisów Regulaminu, którego akceptację
    potwierdza Użytkownik jawnie podczas rejestracji w Serwisie. Na podstawie Regulaminu Administrator Serwisu za zgodą Użytkownika ma prawo
    do dalszego przetwarzania danych Użytkownika, treści Ogłoszenia oraz wszelkich danych potrzebnych do kompleksowej i rzetelnej realizacji
    Usług Serwisu na potrzeby i w imieniu Użytkownika.<br/>

    2.      Administrator Serwisu udostępnia Użytkownikowi Panel Użytkownika umożliwiający dodanie Ogłoszenia, oraz korzystanie z dostępnych Usług Serwisu.<br/>

    3.      W skład Usług Serwisu wchodzą :<br/>

    a)      Założenie ogłoszeń - usługa ta polega na dodaniu treści Ogłoszenia Użytkownika do wybranych przez Użytkownika portali ogłoszeniowych oraz w razie konieczności
    założenia konta zgodnie z danymi wypełnionymi w Panelu Użytkownika (wyłącznie na potrzeby dodania i administracji ogłoszenia),<br/>

    b)      Administracja - usługa ta polega na odświeżeniu zamieszczonych Ogłoszeń Użytkownika co najmniej raz w miesiącu, prezentowaniu i aktualizacji
    liczby wyświetleń Ogłoszeń w Panelu Użytkownika, na podstawie informacji dostępnych w wybranych portalach ogłoszeniowych. W razie wystąpienia niezależnych
    od Administratora Serwisu lub Użytkownika nieprawidłowości dotyczących prezentacji ogłoszeń w wybranych portalach, Administrator Serwisu
    nieodpłatnie umieści je ponownie. Usługa administrowania jest ściśle powiązana oraz zależna od reguł działania danego portalu ogłoszeniowego.
    Datę odświeżenia stanowi dzień miesiąca następującego po dacie założenia ogłoszenia lub ostatniego odświeżenia (tj. termin ok. 30 dni).
    Administrator Serwisu zastrzega, że data odświeżenia może ulec nieznacznej zmianie ze względów technicznych.
    Czas odświeżenia Ogłoszeń Użytkownika wynosi do 3 dni roboczych przed i po wyżej deklarowanym terminie odświeżania,<br/>

    c)      Edycja ogłoszeń - usługa ta polega na wprowadzeniu zmian w ogłoszeniach na portalach zgodnie ze zmianami naniesionymi przez Użytkownika
    w Ogłoszeniach<br/>
</h5>

    <h4>IV Przetwarzanie i ochrona danych osobowych.</h4><br/>
<h5>
    Administratorem danych osobowych Użytkownika zbieranych za pośrednictwem SERWISU jest firma bluebird Ltd z siedzibą w Bruklina Faso.
    Podanie danych osobowych przez Użytkownika jest dobrowolne, jednakże niepodanie danych osobowych niezbędnych do rejestracji i wystawiania Ogłoszenia może skutkować
    niemożliwością zawarcia i realizacji tej że umowy. Zgodę na rejestrację i przetwarzanie danych osobowych Użytkownik wyraża jawnie przez rejestrację
    w Serwisie. Użytkownik ma prawo dostępu do treści swoich danych, ich poprawiania oraz żądania ich usunięcia w dowolnym czasie.
</h5><br/>
    <h4> V Postanowienia końcowe.</h4><br/>
<h5>
    Umowa zawierana jest w języku polskim i pod jurysdykcją prawa polskiego. Treść Regulaminu jest dostępna cały czas w zakładce Regulamin na stronie Serwisu
    i może być kopiowana i drukowana w każdej chwili. W sprawach nieuregulowanych niniejszym Regulaminem zastosowanie będą miały właściwe przepisy prawa.
    W przypadku gdyby w Regulaminie zostały zawarte postanowienia sprzeczne z wyżej wymienionymi, przepisy te mają pierwszeństwo nad sformułowaniami Regulaminu.
    Jeśli którekolwiek z postanowień niniejszego Regulaminu zostanie uznane za niezgodne z prawem, nieważne lub w inny sposób niewykonalne w zakresie przewidzianym
    przepisami prawa, to w tym zakresie zostaje ono wyłączone. W pozostałym zakresie Regulamin pozostaje obowiązujący. W przypadku sporów związanych z realizacją zawartej
    umowy strony będą dążyły do rozwiązania sporu na drodze postępowania polubownego pozasądowego - w tym do rozwiązania sporu przed mediatorem. W przypadku braku rozstrzygnięcia
    sporu na drodze polubownej sądem właściwym do rozstrzygnięcia sporu będzie Sąd Powszechny.<br/><br/>
    1.       Administratorowi Serwisu przysługuje prawo okresowego zawieszenia świadczenia Usługi w Serwisie w stosunku do wszystkich lub niektórych Paneli Użytkowników
    w związku z przeprowadzaniem prac konserwacyjnych.<br/><br/>
    2.       Administrator Serwisu zastrzega sobie prawo do całkowitego zaprzestania udostępniania świadczonych przez siebie Usług bez podania przyczyn
    po uprzednim poinformowaniu Użytkowników w drodze mailowej o podjęciu takiej decyzji co najmniej 14 (czternaście) dni wcześniej.<br/><br/>
    3.       Administrator Serwisu zastrzega sobie prawo do zmiany niniejszego Regulaminu
    w dowolnym czasie, o czym Użytkownik zostanie powiadomiony z min. 14-dniowym wyprzedzeniem . Zmiany Regulaminu nie będą ograniczać
    praw nabytych przez Użytkowników przed zmianą. Zmiany Regulaminu obowiązują od momentu wskazanego w nowym Regulaminie umieszczonym na stronie
    internetowej Serwisu.<br/><br/>
    4.   Aktualny Regulamin jest publikowany na stronie internetowej Serwisu.<br/><br/>
    5.   Regulamin wchodzi w życie z dniem 1 stycznia 2020 r<br/><br/><br/><br/>
</h5>
    <h4>koniec regulaminu</h4>
    <br/><br/><br/>

</div>
<!-- Footer -->
<footer class="footer-up">
    <div class="container">
    </div>
    <div class="footer-down text-center py-3"> paweł nankiewicz 2020
        <a href="{{url('/')}}"> bluebird</a>
    </div>
</footer>
<!--skrypty
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

