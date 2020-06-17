<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel base crud</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  {{-- rifare una show + index (con migration + dati inseriti a mano in PHPMyAdmin) sulla seguente entita':
      Cagnolini:
      - id
      - nome (stringa)
      - tipo (stringa)
      - altezza (numero)
      - peso (numero)
    La home mostrera' la lista di tutti i nomi di cagnolini presenti nel DB
    La show mostrera' tutti i dati del cagnolino su cui l'utente ha cliccato
  --}}

  <body>
    <main>

      @yield('main')

    </main>
  </body>
</html>
