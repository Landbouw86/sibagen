<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return <<<'blade'
            <header class="bg-dark dk header navbar navbar-fixed-top-xs">
                <div class="navbar-header aside-md">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="{{ route('dashboard') }}" class="navbar-brand" data-toggle="fullscreen"><img
                            src="{{ asset('assets/images/logo.png') }}" class="m-r-sm">{{ __('SIBAGEN') }}</a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                        <i class="fa fa-cog"></i>
                    </a>
                </div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="thumb-sm avatar pull-left">
                                    <img src="{{ asset('assets/images/avatar.jpg') }}">
                                </span>
                                {{ Auth::user()->name }} <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight">
                                <span class="arrow top"></span>
                                @can('delete')
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                                @endcan
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="route('logout')"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </header>
        blade;
    }
}
