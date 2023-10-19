<div>
    <div class="scroll-sidebar">
        {{-- Sidebar Navigation --}}
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="in">
                <li class="sidebar-item @if(Request::is('/')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('/')) active @endif"
                        href="{{ Route('home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                @guest
                <li class="sidebar-item @if(Request::is('/login')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="{{ Route('login') }}"
                        aria-expanded="false"><i class="mdi mdi-login"></i><span class="hide-menu">Login</span></a></li>
                <li class="sidebar-item @if(Request::is('/register')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="{{ Route('register') }}"
                        aria-expanded="false"><i class="mdi mdi-login-variant"></i><span
                            class="hide-menu">Register</span></a></li>
                @endguest

                @auth
                <li class="sidebar-item @if(Request::is('surat/pengajuan')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat/pengajuan')) active @endif"
                        href="{{ Route('surat.pengajuan') }}" aria-expanded="false"><i
                            class="mdi mdi-contact-mail"></i><span class="hide-menu">Pengajuan Surat</span></a>
                </li>
                @if (auth()->user()->status == 'Admin')
                <li class="sidebar-item @if(Request::is('surat')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat')) active @endif"
                        href="{{ Route('surat') }}" aria-expanded="false">@if ($total == 0)
                        <i class="mdi mdi-email"></i>
                        @else
                        <i class="mdi mdi-email-alert text-danger" style="font-size: 25px"></i>
                        @endif
                        <span class="hide-menu">Pemesanan Surat</span>

                    </a>
                </li>
                <li class="sidebar-item @if(Request::is('surat/sk')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat/sk')) active @endif"
                        href="{{ Route('surat.keluar') }}" aria-expanded="false"><i class="mdi mdi-email-open"></i><span
                            class="hide-menu">Surat Keluar</span></a>
                </li>
                <li class="sidebar-item @if(Request::is('surat/sk')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat/sk')) active @endif"
                        href="{{ Route('surat.keluar') }}" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
                            class="hide-menu">Data User</span></a>
                </li>
                @else
                @if (auth()->user()->status == 'RT')
                <li class="sidebar-item @if(Request::is('surat')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat')) active @endif"
                        href="{{ Route('surat') }}" aria-expanded="false">@if ($total == 0)
                        <i class="mdi mdi-email"></i>
                        @else
                        <i class="mdi mdi-email-alert text-danger" style="font-size: 25px"></i>
                        @endif
                        <span class="hide-menu">Pemesanan Surat</span>

                    </a>
                </li>
                <li class="sidebar-item @if(Request::is('surat/sk')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat/sk')) active @endif"
                        href="{{ Route('surat.keluar') }}" aria-expanded="false"><i class="mdi mdi-email-open"></i><span
                            class="hide-menu">Surat Keluar</span></a>
                </li>
                <li class="sidebar-item @if(Request::is('surat/sk')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat/sk')) active @endif"
                        href="{{ Route('surat.keluar') }}" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
                            class="hide-menu">Data User</span></a>
                </li>
                @endif
                @if (auth()->user()->status == 'User')
                <li class="sidebar-item @if(Request::is('surat/masuk')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('surat.masuk')) active @endif"
                        href="{{ Route('surat.masuk') }}" aria-expanded="false"><i class="mdi mdi-email"></i><span
                            class="hide-menu">Surat Masuk</span></a>
                </li>
                <li class="sidebar-item @if(Request::is('surat/riwayat')) selected @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link @if(Request::is('riwayat.surat')) active @endif"
                        href="{{ Route('riwayat.surat') }}" aria-expanded="false"><i
                            class="mdi mdi-email-open"></i><span class="hide-menu">Riwayat Surat</span></a>
                </li>
                @endif
                @endif
                <li class="text-center p-40 upgrade-btn">
                    <a class="btn d-block w-100 btn-danger text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-logout m-r-5 m-l-5"></i>
                        Logout</a>
                </li>
                @endauth
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
</div>