<?php

namespace App\Providers;


use Statamic\Events\CollectionSaved;
use Statamic\Events\EntrySaved;
use Statamic\Events\EntrySaving;

class ChangeOriginOnSave
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param EntrySaving $event
     * @return false
     */
    public function handle(EntrySaving $event)
    {
//        $entry->set('foo', 'bar');
//        $entry->save();
//
//        return false;

    }
}
