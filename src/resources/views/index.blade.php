@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<form class="form" action="todo" method="post">
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
                <form class="form" action="update" method="post">
                    @csrf
                    <button class="update__button-submit" type="submit">更新</button>
                </form>
            </td>
            <td>
                <form class="form" action="delete" method="post">
                    @csrf
                    <button class="delete__button-submit" type="submit">削除</button>
                </form>
            </td>
        </tr>
       
    </table>
</div>


@endsection