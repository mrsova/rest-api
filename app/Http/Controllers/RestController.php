<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoCollection;
use Illuminate\Http\Request;
use App\Todo;

class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     * Вызываем нашу коллекцию
     * @return Response
     */
    public function index() {
        $todos = new TodoCollection(Todo::paginate(3));
        return $todos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $todo = Todo::create($request->all());
        return $todo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $todo = Todo::find($id);
        $todo->done = $request->input('done');
        $todo->save();

        return $todo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Todo::destroy($id);
    }
}
