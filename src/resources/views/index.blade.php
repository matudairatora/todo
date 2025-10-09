@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
 <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
@endsection

@section('content')
    @if (session('flash_message'))
        <div class="alert alert-success">
            <p class="alert-success__p">{{ session('flash_message') }}</p>
        </div>
    @endif
    @if ($errors->any())
        <div class="todo__alert--danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class=body>
<form class="form" action="/todos" method="post">
@csrf
    <div class="form__group">
        <div class="form__group-todo">
            <input class="form__group-todo-input" type="text" name="content" />
        </div>
        <div>
            <button class="form__button-submit" type="submit">作成</button>
        </div>
    </div>
</form>

<div class="todo-list">
        <p>Todo</p>
        <table>
        @foreach($todos as $todo)
        <tr>
            <td class="todo-action">
                <form class="form-update" action="/todos/update" method="POST">
                    @method('PATCH')
                    @csrf                
                    <input class="update-form__item-input" type="text" name="content" value="{{ $todo['content'] }}">
                </td>
                <td class="todo-action">
                    <input type="hidden" name="id" value="{{ $todo['id'] }}">
                <td class="todo-action">
                    <button class="update__button-submit" type="submit">更新</button>
                </td>
                </form>
            </td>
            <td class="todo-action">
                <form class="form-delete" action="/todos/delete" method="post">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" name="id" value="{{ $todo['id'] }}">
                    <button class="delete__button-submit" type="submit">削除</button>
                </form>
            </td>        
        </tr>
       @endforeach
    </table>
    </div>
</div>

@endsection