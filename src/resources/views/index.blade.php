@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
 <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
@endsection

@section('content')

        <div class="alert alert-success">
            <p class="alert-success__p">Todoを作成しました</p>
        </div>
<div class=body>
<form class="form" action="/todos" method="post">
@csrf
    <div class="form__group">
        <div class="form__group-todo">
            <input class="form__group-todo-input" type="text" name="todo" />
        </div>
        <div>
            <button class="form__button-submit" type="submit">作成</button>
        </div>
    </div>
</form>

<div class="todo-list">
    <table>
        <tr>
            <th>Todo</th>
        </tr>
        
        <tr>
            <td></td>
            <td>
                <form class="form-update" action="update" method="post">
                    @csrf
                    <button class="update__button-submit" type="submit">更新</button>
                </form>
            </td>
            <td>
                <form class="form-delete" action="delete" method="post">
                    @csrf
                    <button class="delete__button-submit" type="submit">削除</button>
                </form>
            </td>
        </tr>
       
    </table>
</div>
</div>

@endsection