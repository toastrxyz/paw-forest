<?php
use function Livewire\Volt\{state};
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Admin - Shelter Locations') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="admin-layout">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-nav">
                <h2 class="admin-sidebar-title">🏠 Paw Forest</h2>
                <ul class="admin-menu">
                    <li><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                    <li><a href="/admin/animals">{{ __('Animals') }}</a></li>
                    <li><a href="/admin/applications">{{ __('Applications') }}</a></li>
                    @if(auth()->user()->role === 'admin')
                        <li><a href="/admin/donations">{{ __('Donations') }}</a></li>
                    @endif
                    
                    <li><a href="/admin/medicine">{{ __('Medications') }}</a></li>
                    
                    @if(auth()->user()->role === 'admin')
                        <li class="active"><a href="/admin/locations">{{ __('Locations') }}</a></li>
                        <li><a href="/admin/users">{{ __('Users') }}</a></li>
                    @endif
                </ul>
            </div>
            
            <div class="admin-lang-container">
                <select class="lang-select admin-lang-select" onchange="location = this.value;">
                    <option value="/lang/en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🌐 EN</option>
                    <option value="/lang/lv" {{ app()->getLocale() == 'lv' ? 'selected' : '' }}>🌐 LV</option>
                </select>
            </div>
            <div>
                <a href="#" class="btn btn-red logout-btn" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Log out') }}
                </a>

                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>

        <main class="admin-main">
            <h1>{{ __('Manage Shelter Locations') }}</h1>
            <br>

            <div class="block-card">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('Location ID') }}</th>
                            <th>{{ __('City Name') }}</th>
                            <th>{{ __('Specific Address') }}</th>
                            <th>{{ __('Contact Phone') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-add-row">
                            <td><span class="auto-id">{{ __('Auto') }}</span></td>
                            <td><input type="text" placeholder="{{ __('e.g. Valmiera') }}" required></td>
                            <td><input type="text" placeholder="{{ __('e.g. Parka iela 12') }}" required></td>
                            <td><input type="text" placeholder="{{ __('e.g. +371 20000000') }}" required></td>
                            <td>
                                <button type="submit" class="btn btn-green table-inline-btn">{{ __('Save') }}</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#L01</td>
                            <td>Riga</td>
                            <td>Meowtown street 5a, Riga</td>
                            <td>+371 67123456</td>
                            <td class="table-actions">
                                <a href="#" class="btn btn-blue">{{ __('Edit') }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>#L02</td>
                            <td>Rezekne</td>
                            <td>Barking Ave 12, Rezekne</td>
                            <td>+371 64612345</td>
                            <td class="table-actions">
                                <a href="#" class="btn btn-blue">{{ __('Edit') }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>#L03</td>
                            <td>Ventspils</td>
                            <td>Fluffy Lane 8, Ventspils</td>
                            <td>+371 63688888</td>
                            <td class="table-actions">
                                <a href="#" class="btn btn-blue">{{ __('Edit') }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>