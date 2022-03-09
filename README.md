# PHP_SESSIONI
Il protocollo HTTP/HTTPS è stateless, ossia non permette di salvare lo stato del client per essere utilizzato nelle richieste successive. Per ovviare a questo problema è possibile utilizzare diversi approcci:
<li>hidden input (non più in uso)</li>
<li>Cookie</li>
<li>Sessioni</li>
Permettono di salvare informazioni sul server correlate al client.
<li>Contiene l'informazione che si vuole far persistere per richieste successive.</li>
<li>L'informazione è salvata dalla coppia: nome, valore.</li>
<li>La sessione è identificata con un ID, utilizzato successivamente per recuperare i dati di un client.</li>
<li>Il server invia al client un cookie speciale che contiene i riferimenti alla sessione (ID) che prende il nome di "cookie di sessione".</li>
<li>Ogni web application può salvare più sessioni per il proprio uso.</li>
Generalmente le sessioni vengono utilizzati per memorizzare informazioni sull'attività più recenti dell'utente.
<h2>Funzionamento</h2>
Tre fasi:</br>
<li>Avvio o creazione. Quando si avvia una nuova sessione, oltre che salvare le informazioni il server invia il cookie di sessione al client.</li>
<li>Utilizzo della sessione. Il sever chiede id di sessione al client (cookie di sessione) per recuperare le informazioni salvate nella sessione.</li>
<li>Chiusura. E' possibile cancellare i dati di sessione sia su richiesta del client o dell'utente. E' sempre consigliato impostare la chiusura della sessione dopo un tempo prestabilito o alla chiusura del browser.</li>
<h2>Sessioni in php</h2>
Per la gestione delle sessioni in PHP fornisce allo sviluppere la struttura dati:
<li>$_SESSION: array associativo che contiene i dati della sessione.</li>
Funzioni più importanti:</br>
<li>session_start(): Crea una sessione se non esiste oppure ne rimprende una valida in base all'ID di sessione fornito dal client.</li>
<ul><li>Il nome del cookie è PHPSESSID</li></ul>
<li>session_status(): Restituisce lo stato della sessione corrente.</li>
<li>session_unset(): cancella tutte le variabli di sessione salvate.</li>
<li>session_destroy(): distrugge tutti i dati associati alla sessione corrente, ma non cancella i valori associati alla sessionem ne il cookie di sessione. E' possibile utilizzare nuovamente i dati della sessione invocanto una session_start().</li>
Esempio:</br>
session_star();</br>
$_SESSION["colore"] = "rosso";
