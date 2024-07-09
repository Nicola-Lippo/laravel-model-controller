1 - Create un nuovo progetto Laravel
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Movie
php artisan make:model Movie
6 - Create un controller che gestirà la rotta /
php artisan make:controller Guest/PageController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.


APPROFONDIMENTO METODO INDEX()
Cosa Fa il Metodo index()?
Recupero delle Risorse: Il metodo index() spesso recupera un elenco di risorse dal database. Nel nostro esempio, recupera tutti gli utenti dalla tabella users utilizzando il modello Eloquent User.

Preparazione della Vista: Una volta recuperati i dati, il metodo index() li passa a una vista. In Laravel, questo è fatto generalmente con il metodo view(), che restituisce una vista specifica (ad esempio, users.index) e passa i dati alla vista utilizzando il metodo compact() o un array associativo.

Restituzione della Vista: Infine, il metodo index() restituisce la vista, che viene inviata come risposta HTTP al client. La vista renderizza l'HTML con i dati forniti, visualizzando l'elenco delle risorse.