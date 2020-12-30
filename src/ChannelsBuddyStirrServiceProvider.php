<?php

namespace ChannelsBuddy\Stirr;

use ChannelsBuddy\SourceProvider\ChannelSourceProvider;
use ChannelsBuddy\SourceProvider\ChannelSourceProviders;
use ChannelsBuddy\Stirr\Services\StirrService;
use Illuminate\Support\ServiceProvider;

class ChannelsBuddyStirrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap Channels Buddy Stirr Source.
     *
     * @return void
     */
    public function boot(ChannelSourceProviders $sourceProvider)
    {
        $sourceProvider->registerChannelSourceProvider('stirr', new ChannelSourceProvider(
            StirrService::class,
            'Stirr', true, false
        ));
    }
}