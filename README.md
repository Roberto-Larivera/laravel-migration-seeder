# Laravel Migration Seeder

## Descrizione

## MILESTONE 1
Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...
Inserite inizialmente i dati tramite PhpMyAdmin.

## MILESTONE 2
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

## MILESTONE 3
Aggiungiamo un seeder per la classe Train usando FakerPHP.

## BONUS MILESTONE 3:
Implementare il seeder un file csv.


#### Appunti

- Deve essere settato l'orario in quello europeo, roma = >>

    - `config \ app.php \ 'timezone' da:'UTC' a: 'Europe/Rome'`

- Bonus: Milestone 3:

     - Il file per l'importazione dei dati si trova all'interno di: `public\csv\trains.csv`

    - Il processo di importazione del seeder in un database esistente è:
        - Creare una Tabella tramite Migration
            - `Database\migrations\2023_03_13_124150_create_trains_table.php`
            - Far partire il comando: `php artisan migrate`
            - Verificare la la coretta creazione della tabella nel database;
        - Aprire PhpMyAdmin;
        - Aprire la pagina importazione dentro la tabella
        - Scegliere il file scv che si trova dentro: `public\csv\trains.csv`
        - Andare alla sezione "Importazione parziale:" e modificare il paramenìtro "Salta questo numero di query (per SQL) partendo dalla prima:" in 1
            - La modifica di questo parametro in 1 servirà a far saltare la riga dei campi di intestazione
        - Cliccare su "Importa"
        - Buon Lavoro!
