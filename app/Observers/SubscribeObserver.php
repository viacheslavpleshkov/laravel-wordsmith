<?php

namespace App\Observers;

use App\Models\Subscribe;

class SubscribeObserver
{
    /**
     * Handle the subscribe "created" event.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return void
     */
    public function created(Subscribe $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "updated" event.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return void
     */
    public function updated(Subscribe $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "deleted" event.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return void
     */
    public function deleted(Subscribe $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "restored" event.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return void
     */
    public function restored(Subscribe $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "force deleted" event.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return void
     */
    public function forceDeleted(Subscribe $subscribe)
    {
        //
    }
}
