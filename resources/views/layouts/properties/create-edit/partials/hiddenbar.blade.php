   <section class="hidden-bar">
        <div class="dashboard-inner">
            <div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
            <ul class="navigation">
                <li class="active"><a href="{{route('home')}}"><i class="pe-7s-culture"></i> Dashboard</a></li>
                
                <li> {{--   logout --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    {{-- end logout --}}
                </li>
            </ul>
        </div>
    </section>