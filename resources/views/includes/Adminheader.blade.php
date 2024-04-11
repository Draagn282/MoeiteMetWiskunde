<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moeite met diskunde</title>
        
        <link href="{{ asset('../resources/css/admin.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/x-icon" href="{{ asset('../resources/img/Logo.png') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="path/to/bootstrap.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="adheader">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            <button> <a href={{route('profile.edit')}}>
                {{ __('Profile') }}</a>
            </button>
        </header>
        <div class="headerheight"></div>