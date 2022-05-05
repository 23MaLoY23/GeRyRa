
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Художественная школа</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">

<nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 text-white" href="https://dnevnik.ru/" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
    </a>
        <a class="py-2 d-none d-md-inline-block text-white" href="/spec">Контакты</a>
    <a class="py-2 d-none d-md-inline-block text-white" href="/onas">О нас</a>
    <a class="py-2 d-none d-md-inline-block text-white" href="/glav">Главная</a>
    <a class="py-2 d-none d-md-inline-block text-white" href="/table">Преподаватели</a>
    <a class="py-2 d-none d-md-inline-block text-white" href="/table2">Ученики</a>
  </nav>
<div class="container mt-5">
    @yield('onas')
    @yield('glav')
    @yield('spec')
    @yield('table')
    @yield('table2')
    @yield('mtable')
    @yield('mtable2')

</div>
</body>
</html>
