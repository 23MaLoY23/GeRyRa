@extends('layout')
@section('mtable')
<form method="post">
@csrf
<input type="text" name="Фамилия" id="Фамилия" placeholder="Фамилия" class="form-control"><br>
<input type="text" name="Имя" id="Имя" placeholder="Имя" class="form-control"><br>
<input type="text" name="Отчество" id="Отчество" placeholder="Отчество" class="form-control"><br>
<input type="text" name="Дата_рождения" id="Дата_рождения" placeholder="Дата_рождения" class="form-control"><br>
<input type="text" name="Номер" id="Номер" placeholder="Номер" class="form-control"><br>
<input type="text" name="Адрес" id="Адрес" placeholder="Адрес" class="form-control"><br>
<input type="text" name="Предмет" id="Предмет" placeholder="Предмет" class="form-control"><br>
<input type="text" name="Стаж" id="Стаж" placeholder="Стаж" class="form-control"><br>
<input type="text" name="Образование" id="Образование" placeholder="Образование" class="form-control"><br>

<button type="submit" class="btn btn-success">Записать</button>
@endsection