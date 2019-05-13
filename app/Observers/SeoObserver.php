<?php

namespace App\Observers;

use App\Models\Seo;

/**
 * Class SeoObserver
 * @package App\Observers
 */
class SeoObserver
{
    /**
     * Handle the seo "created" event.
     *
     * @param  \App\Models\Seo  $seo
     * @return void
     */
    public function created(Seo $seo)
    {
        //
    }

    /**
     * Handle the seo "updated" event.
     *
     * @param  \App\Models\Seo  $seo
     * @return void
     */
    public function updated(Seo $seo)
    {
        //
    }

    /**
     * Handle the seo "deleted" event.
     *
     * @param  \App\Models\Seo  $seo
     * @return void
     */
    public function deleted(Seo $seo)
    {
        //
    }

    /**
     * Handle the seo "restored" event.
     *
     * @param  \App\Models\Seo  $seo
     * @return void
     */
    public function restored(Seo $seo)
    {
        //
    }

    /**
     * Handle the seo "force deleted" event.
     *
     * @param  \App\Models\Seo  $seo
     * @return void
     */
    public function forceDeleted(Seo $seo)
    {
        //
    }
}
