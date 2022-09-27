<?php

namespace App\Filament\Pages;

use Filament\Resources\Form;
use RyanChandler\FilamentProfile\Pages\Profile as BaseProfile;
use Filament\Forms;
use Filament\Pages\Actions\Action;

class Profile extends BaseProfile
{

    public static function getPages()
    {
        return Form::make('username');
    }
}
