<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('/')}}/front/new_assets/images/logo.svg" alt="NCMS Jobs" width="142">
        </a>
        <button class="navbar-toggler pt-3" type="button" data-toggle="collapse" data-target="#NCMSNavbar" aria-controls="NCMSNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>

        <div class="collapse navbar-collapse" id="NCMSNavbar">
            <ul class="navbar-nav mr-auto menu_head" >
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">{{__('app.Home')}} <span class="sr-only">({{__('app.current')}})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('jobs.jobs')}}">{{__('app.Jobs')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Technologies">{{__('app.Technolog')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link down_why" href="#why_us"> {{__('app.Benefits')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Graduates">{{__('app.Graduates')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact_us')}}">{{__('app.Contact us')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login')}}">
                        <img src="{{url('/')}}/front/new_assets/images/thump.svg" alt="NCMS Login">
                    </a>
                </li>
                <li class="nav-item active pt-2">
                    <a class="nav-link" href="{{route('lang',Session::get('locale') == 'en'? 'ar':'en')}}">{{__('app.AR')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav> <!-- /Navbar -->