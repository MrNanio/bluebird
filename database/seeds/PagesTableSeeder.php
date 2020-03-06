<?php

use Illuminate\Database\Seeder;
use App\Pages;
class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page=new Pages();
        $page->przedmiot='Matematyka';
        $page->poziom='Liceum';
        $page->lokalizacja='Lublin';
        $page->tel='123123123';
        $page->Imie='Adam';
        $page->title='Szukam';
        $page->content='Szukam koropetycji z Matematyki';
        $page->id_us='1';
        $page->save();

        $page=new Pages();
        $page->przedmiot='Angielski';
        $page->poziom='Liceum';
        $page->lokalizacja='Lublin';
        $page->tel='123123123';
        $page->Imie='Adam';
        $page->title='Szukam';
        $page->content='Szukam koropetycji z Angielskiego';
        $page->id_us='1';
        $page->save();

        $page=new Pages();
        $page->przedmiot='Matematyka';
        $page->poziom='Studia';
        $page->lokalizacja='Lublin';
        $page->tel='111111111';
        $page->Imie='Kamil';
        $page->title='Szukam';
        $page->content='Szukam koropetycji z Matematyki';
        $page->id_us='2';
        $page->save();

        $page=new Pages();
        $page->przedmiot='Polski';
        $page->poziom='Liceum';
        $page->lokalizacja='Lublin';
        $page->tel='123123123';
        $page->Imie='Adam';
        $page->title='Szukam';
        $page->content='Szukam koropetycji z Polskiego';
        $page->id_us='3';
        $page->save();

        $page=new Pages();
        $page->przedmiot='Matematyka';
        $page->poziom='Studia';
        $page->lokalizacja='Lublin';
        $page->tel='111111111';
        $page->Imie='Kamil';
        $page->title='Szukam';
        $page->content='Szukam koropetycji z Matematyki';
        $page->id_us='4';
        $page->save();

        $page=new Pages();
        $page->przedmiot='Polski';
        $page->poziom='Liceum';
        $page->lokalizacja='Lublin';
        $page->tel='123123123';
        $page->Imie='Adam';
        $page->title='Szukam';
        $page->content='Szukam koropetycji z Polskiego';
        $page->id_us='5';
        $page->save();
    }
}
