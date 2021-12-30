@extends('main')
<div class="container">
    <div class="row justify-content-center">
        <div id="register-container" class="col-md-8">
            <div class="row">
                <div class="col">Id</div>
                <div class="col">Nome</div>
                <div class="col">Checkbox</div>
                <div class="col">Ação</div>
            </div>
            
                @foreach($todos as $tudo)
                <form action="/todos/check/{{ $tudo->id }}" method="POST">
                    <div class="row">
                        <div class="col">{{ $tudo->id }}</div>
                        <div class="col">{{ $tudo->name }}</div>
                        <div class="col"><input id="completed" name="completed" value="{{ $tudo->completed }}" type="checkbox"> Check</div>
                        <div class="col"><input type="submit" class="btn btn-primary"></div>
                    </div>
                </form>
                @endforeach
        </div>
    </div>
</div>
    