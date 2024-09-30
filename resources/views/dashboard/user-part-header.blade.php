
<div class="user-part-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="nav-wrap">
                    <div class="nav-left">
                        <div class="single-left">
                            <div class="site-sidebar-toggle"><i data-lucide="list"></i></div>
                            <div class="site-logo-inmobile">
                                <a href="{{ route('user.dashboard') }}">
                                    <img src="{{ url('assets/global/images/g8qOqXBYmhXvhxWst3qI.png') }}"
                                        alt="Digi Bank">
                                </a>
                            </div>
                            <div class="site-logo-inmobile-icon">
                                <a href="{{ route('user.dashboard') }}">
                                    <img src="{{ url('assets/global/images/SlBP02BCpepDoEeCM5jr.png') }}"
                                        alt="Digi Bank Mobile">
                                </a>
                            </div>

                            <div class="salutation">Good {{ $greeting }}!
                                <strong>{{ $user->first_name . ' ' . $user->last_name }}</strong>
                            </div>

                        </div>
                    </div>
                    <div class="nav-right">
                        <div class="single-right mob-650-none">

                        </div>
                        <div class="single-right">
                            <div class="color-switcher">
                                <img class="light-icon"
                                    src="{{ url('assets/front/images/icons/sun.png') }}" alt="">
                                <img class="dark-icon"
                                    src="{{ url('assets/front/images/icons/moon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="single-right user-notifications1">
                            <button type="button" class="item notification-dot" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i data-lucide="bell" class=""></i>
                                <div class="number">0</div>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end notification-pop">
                                <div class="noti-head">Notifiactions <span>0</span></div>
                                <div class="all-noti">
                                    <div class="single-noti">
                                        <a href="https://digibank.tdevs.co/user/notification-read/1870"
                                            class="read">
                                            <div class="icon">
                                                <i data-lucide="gift"></i>
                                            </div>
                                            <div class="content">
                                                <div class="main-cont">Congratulations, You have
                                                    received 3 reward points.</div>
                                                <div class="time">1 week ago</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="noti-footer mt-3">
                                    <a class="noti-btn-2 ms-1 w-100"
                                        href="https://digibank.tdevs.co/user/notification/all">See all
                                        notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-right">
                            <div class="language-switcher">
                                <select class="langu-swit small" name="language" id=""
                                    onchange="window.location.href=this.options[this.selectedIndex].value;">
                                    <option value="https://digibank.tdevs.co/language-update?name=en"
                                        selected>English</option>
                                    <option value="https://digibank.tdevs.co/language-update?name=es">
                                        Spanish</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-right mob-650-none">
                            <div class="help-support">
                                <a href="{{ route('user.support') }}" data-bs-toggle="tooltip"
                                    data-bs-custom-class="custom-tooltip" data-bs-placement="top"
                                    data-bs-title="Help and Support"><i data-lucide="help-circle"></i></a>
                            </div>
                        </div>
                        <div class="single-right">
                            <div class="user-head-drop">
                                <div class="dropdown">
                                    <button class="user-head-drop-btn dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">

                                        <img class="user-icon"
                                            src="{{ $user->image ? asset('storage/' . $user->image) : url('assets/front/images/user.jpg') }}"
                                            alt="User Icon">
                                    </button>

                                    <div class="dropdown-menu">
                                        <div class="user-head-drop-top">
                                            <div class="icon">
                                                <img src="{{ $user->image ? asset('storage/' . $user->image) : url('assets/front/images/user.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="names">
                                                <div class="name">
                                                    {{ $user->first_name . ' ' . $user->last_name }}
                                                    ({{ $user->username }})</div>
                                                <div class="email text-truncate">{{ $user->email }}
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.settings') }}"><i
                                                        data-lucide="settings"></i><span>Profile
                                                        Settings</span></a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.change-password') }}"><i
                                                        data-lucide="lock"></i><span>Change
                                                        Password</span></a></li>

                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.support') }}"><i
                                                        data-lucide="bell"></i><span>All
                                                        Notifiactions</span></a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.support') }}"><i
                                                        data-lucide="help-circle"></i><span>Help &amp;
                                                        Support</span></a></li>
                                            <li>
                                                <a class="dropdown-item logout" href="javascript:void(0)"
                                                    class="dropdown-item logout"
                                                    onclick="event.preventDefault();$('#logout-form').submit();"><i
                                                        data-lucide="log-out"></i><span>Logout</span></a>
                                            </li>

                                            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
