<div class="page-title-area bg-25">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $title }}</h2>

            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        {{ __('breadcrumb.home') }}
                    </a>
                </li>

                <li class="active">{{ $title }}</li>
            </ul>
        </div>
    </div>
</div>
