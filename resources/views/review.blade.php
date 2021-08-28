@extends('layout')

@section('page_title')
    Отзывы
@endsection

@section('main_content')
    <div class="container">
        <h1>Добавление отзыва</h1>

        @if($errors->any())
            <div class="alert-danger alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/review/check">
            @csrf
            <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
            <textarea name="message" id="message" class="form-control" cols="30" placeholder="Введите сообщение"
                      rows="10"></textarea><br>
            <button type="submit" class="btn-success btn">Отправить</button>
        </form>

        <h1>Все отзывы</h1>
        @foreach($reviews as $el)
            <div class="alert alert-warning">
                <h3>{{$el->subject}}</h3>
                <b>{{$el->email}}</b>
                <p>{{$el->message}}</p>
            </div>
        @endforeach
    </div>
@endsection
