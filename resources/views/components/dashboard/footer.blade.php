<!-- footer @s -->
<div class="nk-footer nk-footer-fluid bg-lighter">
    <div class="container-xl">
        <div class="nk-footer-wrap">
            <div class="nk-footer-copyright"> &copy; 2022 JIU.
            </div>
            <div class="nk-footer-links">
                <ul class="nav nav-sm">
                    <li class="nav-item dropup">
                        <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                            data-bs-toggle="dropdown"
                            data-offset="0,10"><span>{{ Config::get('languages')[App::getLocale()]['display'] }}</span></a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                            <ul class="language-list">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <li>
                                            <a href="{{ route('lang.switch', $lang) }}" class="language-item">
                                                <span class="language-name">{{ $language['display'] }}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- footer @e -->
