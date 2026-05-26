<div class="{{ $configData['horizontal_menu'] ? 'header-navbar navbar-expand-sm navbar navbar-horizontal' : 'main-menu' }}">
    <div class="main-menu-content">
        <aside class="{{ $configData['horizontal_menu'] ? 'main-horizontal-sidebar' : 'main-sidebar shadow' }} {{ $configData['sidebar_style'] }}">

            @if(! $configData['horizontal_menu'])
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a href="{{ admin_url('/') }}" class="navbar-brand waves-effect waves-light">
                            <span class="logo-mini">{!! config('admin.logo-mini') !!}</span>
                            <span class="logo-lg">{!! config('admin.logo') !!}</span>
                        </a>
                    </li>
                </ul>
            </div>
            @endif

            <div class="p-0 {{ $configData['horizontal_menu'] ? 'pl-1 pr-1' : 'sidebar pb-3' }}">
                <ul class="nav nav-pills nav-sidebar {{ $configData['horizontal_menu'] ? '' : 'flex-column' }}"
                    {!! $configData['horizontal_menu'] ? '' : 'data-widget="treeview"' !!}
                     style="padding-top: 10px">
                    {!! admin_section(Dcat\Admin\Admin::SECTION['LEFT_SIDEBAR_MENU_TOP']) !!}

                    {!! admin_section(Dcat\Admin\Admin::SECTION['LEFT_SIDEBAR_MENU']) !!}

                    {!! admin_section(Dcat\Admin\Admin::SECTION['LEFT_SIDEBAR_MENU_BOTTOM']) !!}
                </ul>
                <p class="clearfix blue-grey lighten-2 mb-0 text-center version-text" style="font-size: 90%;position: absolute;bottom: 10px;left: calc(50% - 73px);">
                    <span class="text-center d-block d-md-inline-block mt-25">
                        Neo2 Video
                        <span>&nbsp;·&nbsp;</span>
                        v{{env('VERSION')}}
                    </span>
                </p>
            </div>
        </aside>
    </div>
</div>