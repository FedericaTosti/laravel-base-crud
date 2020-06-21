<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employees</title>

    <script src="js/app.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  {{-- generare tutti i file necessari per eseguire una CRUD completa (lettura, scrittura, creazione, eliminazione) di elementi dalla tabella Omini cosi' definita:
    - id
    - first name
    - last name
    - address
    - code
    - state
    - phone number
    - role
  L'home page dara' la possibilita' di vedere tutti i nomi e cognomi e di creare un nuovo omino; sara' possibile attraverso un link entrare nell'entita' e vederne tutti i dettagli ed eseguire le operazioni di modifica (edit + delete); --}}

  <body>
    <div class="header">
      @include('components.header')
    </div>

    <div class="content">
      @yield('content')
    </div>

    <div class="footer">
      @include('components.footer')
    </div>

  </body>
</html>
