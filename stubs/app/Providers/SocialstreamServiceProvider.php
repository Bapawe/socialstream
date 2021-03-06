<?php

namespace App\Providers;

use App\Actions\Socialstream\CreateUserFromProvider;
use App\Actions\Socialstream\SetUserPassword;
use App\Exceptions\Handlers\HandleInvalidState;
use App\Exceptions\Handlers\InvalidStateExceptionHandler;
use Illuminate\Support\ServiceProvider;
use JoelButcher\Socialstream\Socialstream;

class SocialstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Socialstream::createUsersFromProviderUsing(CreateUserFromProvider::class);
        Socialstream::setUserPasswordsUsing(SetUserPassword::class);
        Socialstream::handlesInvalidStateUsing(HandleInvalidState::class);
    }
}
