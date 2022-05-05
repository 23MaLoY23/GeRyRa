@extends('layout')
@section('table')
<body >
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Имя</th>
                <th scope="col">Отчество</th>
                <th scope="col">Дата_рождения</th>
                <th scope="col">Номер</th>
                <th scope="col">Адрес</th>
                <th scope="col">Предмет</th>
                <th scope="col">Стаж</th>
                <th scope="col">Образование</th>
            </tr>
        </thead>
        <tbody>
            @foreach($elements as $el)
            <tr>
                <th scope="row">{{$el->id}}</th>
                <td>{{$el -> Фамилия}}</td>
                <td>{{$el -> Имя}}</td>
                <td>{{$el -> Отчество}}</td>
                <td>{{$el -> Дата_рождения}}</td>
                <td>{{$el -> Номер}}</td>
                <td>{{$el -> Адрес}}</td>
                <td>{{$el -> Предмет}}</td>
                <td>{{$el -> Стаж}}</td>
                <td>{{$el -> Образование}}</td>
                <td class="btn btn-success"><a href='delete/{{$el->id}}' >Удалить</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    <a class="py-2 d-none d-md-inline-block text-white" href="/mtable">Заполнение</a>
</body>
@endsection            
