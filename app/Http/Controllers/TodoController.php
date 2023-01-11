<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */


    public function index(): View|Factory|Application
    {
        $todos = Todo::all();
        return view('todo/index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse
     */
    public function create(): RedirectResponse
    {
        $todosArr = [
            [
                'title'=>'Задание 7',
                'description'=>'описание 7 задания'
            ],
            [
                'title'=>'Задание 8',
                'description'=>'описание 8 задания'
            ]
        ];

        foreach ($todosArr as $item){
            Todo::create($item);
        }
        return redirect()->route('todoAll');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Todo $todo
     * @param $id
     * @return Factory|View|Application
     */
    public function show(Todo $todo, $id): Factory|View|Application
    {
        $singleTodo = $todo::findOrFail($id);
        return view('todo/todo', compact('singleTodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Todo $todo
     * @return Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Todo $todo
     * @return Response
     */
    public function update(Request $request, Todo $todo)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
