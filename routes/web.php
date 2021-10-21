<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MovieController@index');
Route::resource('movies', 'MovieController');


/* Riprendiamo l'esercizio dei fumetti che avevamo iniziato Lunedì e inseriamo gli step per la creazione e la modifica dei fumetti.  Creiamo quindi il giro di rotte, controller e viste per le operazioni di
CREATE, STORE, EDIT e UPDATE
    Per far partire il progetto:
    accendiamo MAMP e creiamo un database  in php MyAdmin (Es. movies_db)
    Una volta clonata la copiamo il file .env.example e lo rinominiamo .env modificando la parte relativa ala connessione DB (DB_PORT, DB_DATABASE, DB_USERNAME. DB_PASSWORD)
    Lanciamo i seguenti comandi:
    npm install
    npm run dev
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan serve */


/* Completiamo il giro delle nostre operazioni CRUD con l'eliminazione dei fumetti.
Mettete un bottone Elimina nella vostra lista di fumetti (e anche nel dettaglio di un fumetto se volete) e preparate la rotta destroy per l'eliminazione.
BONUS:
dare un feedback all'utente dopo l'eliminazione
chiedere conferma prima di effettuare l'eliminazione
implementare la soft-delete */


/* Terminiamo l'esercizio portato avanti in settimana inserendo i controlli di validazione sui form di creazione e modifica.
BONUS:
Aggiungere in tabella due colonne che mostrino la data di creazione e ultima modifica del fumetto, formattandole con Carbon
Provare a stilizzare gli errori sui singoli campi del form.
    $date = Carbon::now()->format('d-m-Y H:i:s');   
    $date = Carbon::today()->format('d-m-Y');
    $date = Carbon::yesterday()->format('d-m-Y');
    $date = Carbon::tomorrow()->format('d-m-Y'); */
