<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('frontend.home') }}" class="brand-link">
        <img src="\frontend\assets\images\logo.png"
             alt="AdminLTE Logo"
             class="brand-image  elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>


    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('frontend.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
