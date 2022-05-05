@extends('layout')
@section('mtable2')
<form method="post">
@csrf
<input type="text" name="Фамилия" id="Фамилия" placeholder="Фамилия" class="form-control"><br>
<input type="text" name="Имя" id="Имя" placeholder="Имя" class="form-control"><br>
<input type="text" name="Отчество" id="Отчество" placeholder="Отчество" class="form-control"><br>
<input type="text" name="Дата_рождения" id="Дата_рождения" placeholder="Дата_рождения" class="form-control"><br>
<input type="text" name="Номер" id="Номер" placeholder="Номер" class="form-control"><br>
<input type="text" name="Адрес" id="Адрес" placeholder="Адрес" class="form-control"><br>
<input type="text" name="Общее_время_обучения" id="Общее_время_обучения" placeholder="Общее_время_обучения" class="form-control"><br>
<input type="text" name="Количество_работ" id="Количество_работ" placeholder="Количество_работ" class="form-control"><br>
<input type="text" name="Ср_балл" id="Ср_балл" placeholder="Ср_балл" class="form-control"><br>

<button type="submit" class="btn btn-success">Записать</button>
@endsection