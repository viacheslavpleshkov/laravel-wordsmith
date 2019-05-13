<?php

namespace App\Observers;

use App\Models\Sociallink;

/**
 * Class SociallinkObserver
 * @package App\Observers
 */
class SociallinkObserver
{
    /**
     * Handle the sociallink "created" event.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return void
     */
    public function created(Sociallink $sociallink)
    {
        //
    }

    /**
     * Handle the sociallink "updated" event.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return void
     */
    public function updated(Sociallink $sociallink)
    {
        //
    }

    /**
     * Handle the sociallink "deleted" event.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return void
     */
    public function deleted(Sociallink $sociallink)
    {
        //
    }

    /**
     * Handle the sociallink "restored" event.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return void
     */
    public function restored(Sociallink $sociallink)
    {
        //
    }

    /**
     * Handle the sociallink "force deleted" event.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return void
     */
    public function forceDeleted(Sociallink $sociallink)
    {
        //
    }
}
