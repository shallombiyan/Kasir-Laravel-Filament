<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\Login;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;

class CustomLogin extends Login
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLoginFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label(__('Username / Email'))
            ->required()
            ->autocomplete()
            ->autofocus()
            ->placeholder(__('Enter your username / email'))
            ->extraInputAttributes(['tabindex' => 1, 'class' => 'form-control']);
    }

    protected function getCredentialsFromFormData(array $data): array 
    { 
        $login_type = filter_var($data['login'], filter: FILTER_VALIDATE_EMAIL) ? 'email': 'username'; 

        return [ 
            $login_type => $data['login'],
            'password' => $data['password'], 
        ]; 
    } 
}
