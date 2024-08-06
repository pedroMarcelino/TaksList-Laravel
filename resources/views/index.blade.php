@extends('layouts.app')

@section('title', 'Lista de tarefas')

@section('content')    
    <div>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('task.show', ['id'=>$task->id]) }}"> {{$task->id}}> {{$task->title}} </a>
            </div> 
        @empty
            <div>Não existem tasks</div>
        @endforelse
        @dump($tasks)
    </div>
@endsection