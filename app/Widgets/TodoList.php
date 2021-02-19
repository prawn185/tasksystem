<?php

namespace App\Widgets;


use Illuminate\Support\Facades\Auth;
use Statamic\Facades\Collection;
use Statamic\Widgets\Widget;

class TodoList extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {

        $tasks = Collection::find('tasks')
            ->queryEntries()
            ->where('user', Auth::id())
            ->get();
         return view('widgets.todo-list', ['tasks' => $tasks]);
    }
}
