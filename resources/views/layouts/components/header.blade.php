<header id="header" class="clearfix" data-ma-theme="indigo">
    <ul class="h-inner">
        {{-- <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li> --}}

        @stack('backbutton')

        <li class="hi-logo">
          <a class="hi-logo-text">{{ $pageTitle or '-' }}</a>
        </li>
        {{-- <li class="hi-logo">
            <a href="/" class="p-0" style="margin: -4px 0 0 15px;font-size: 34px">
                <i class="zmdi zmdi-cloud-circle"></i>
            </a>
        </li> --}}

        <li class="pull-right">
            <ul class="hi-menu">
                @stack('actionbutton')

                <li class="dropdown">
                    <a data-toggle="dropdown" href=""><i class="him-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li>
                            <a href="{{ route('auth.logout') }}"><i class="him-icon zmdi zmdi-arrow-right"></i> Αποσύνδεση</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        @stack('centertext')

    </ul>

    <!-- Top Search Content -->
    {{-- <div class="h-search-wrap">
        <div class="hsw-inner">
            <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
            <input type="text">
        </div>
    </div> --}}
</header>