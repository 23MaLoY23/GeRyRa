@extends('layout')
@section('table2')
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
                <th scope="col">Общее_время_обучения</th>
                <th scope="col">Количество_работ</th>
                <th scope="col">Ср_балл</th>
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
                <td>{{$el -> Общее_время_обучения}}</td>
                <td>{{$el -> Количество_работ}}</td>
                <td>{{$el -> Ср_балл}}</td>
                <td class="btn btn-success"><a href='delete/{{$el->id}}' >Удалить</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    <a class="py-2 d-none d-md-inline-block text-white" href="/mtable2">Заполнение</a>
</body>
@endsection            
