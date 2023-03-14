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

Bonus: Milestone 3:

Il file per l'importazione dei dati si trova all'interno di:

public\csv\trains.csv



deve essere settato l'orario in quello europeo, roma = >>

`config \ app.php \ 'timezone' da:'UTC' a: 'Europe/Rome'`