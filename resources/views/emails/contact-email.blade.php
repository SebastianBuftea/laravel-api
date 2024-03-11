<h1>Ciao Admin</h1>
<p>
    Hai ricevuto una nuova e-mail: <br>
    Nome: {{ $lead->name }} <br>
    Cognome: {{ $lead->surname }} <br>
    Email: {{ $lead->email }} <br>
    Telefonol: {{ $lead->phone }} <br>
    Messaggio: <br>
    {{ $lead->content }}
</p>
