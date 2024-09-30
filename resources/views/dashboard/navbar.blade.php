<aside class="user-sidebar">
    <div class="site-logo">
        <a href="{{ route('user.dashboard') }}" class="logo"><img
                src="{{ url('assets/global/images/g8qOqXBYmhXvhxWst3qI.png') }}"
                style="height:35px;width:auto;max-width:none" alt="User"></a>
    </div>
    <nav class="user-nav">
        <ul>
            <li>
                <a href="{{ route('user.dashboard') }}">
                    <i data-lucide="inbox"></i>
                    <span>Overview</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.transfers') }}">
                    <i data-lucide="send"></i>
                    <span>Transfers</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.transactions') }}">
                    <i data-lucide="list"></i>
                    <span>Transactions</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.loan') }}">
                    <i data-lucide="pen"></i>
                    <span>Loan</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('user.pay-bill') }}">
                    <i data-lucide="credit-card"></i>
                    <span>Pay Bill</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.mortgage') }}">
                    <i data-lucide="home"></i>
                    <span>Mortgage</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.support') }}">
                    <i data-lucide="message-circle"></i>
                    <span>Support</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('user.settings') }}">
                    <i data-lucide="settings"></i>
                    <span>Settings</span>
                </a>
            </li>
            {{--

            <li class="">
                <a href="{{ route('user.deposit') }}">
                    <i data-lucide="plus-circle"></i>
                    <span>Deposit</span>
                </a>
            </li>
        <li class="">
            <a href="{{ route('user.wallets') }}">
                <i data-lucide="wallet"></i>
                <span>Wallets</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.cards') }}">
                <i data-lucide="credit-card"></i>
                <span>Virtual Cards</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.dps') }}">
                <i data-lucide="archive"></i>
                <span>DPS</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.fdr') }}">
                <i data-lucide="book"></i>
                <span>FDR</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.withdraw') }}">
                <i data-lucide="box"></i>
                <span>Withdraw</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.referral') }}">
                <i data-lucide="users"></i>
                <span>Referral</span>
                <b class="count-number">1</b>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.portfolio') }}">
                <i data-lucide="pie-chart"></i>
                <span>Portfolio</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.rewards') }}">
                <i data-lucide="gift"></i>
                <span>Rewards</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.support-ticket.index') }}">
                <i data-lucide="message-circle"></i>
                <span>Support</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.settings') }}">
                <i data-lucide="settings"></i>
                <span>Settings</span>
            </a>
        </li> --}}
            {{-- <li class="logout">
            <a href="{{ route('logout') }}">
                <i data-lucide="log-out"></i>
                <span>Logout</span>
            </a>
        </li> --}}
            <li class="logout">
                <a href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-lucide="log-out"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </nav>
</aside><aside class="user-sidebar">
    <div class="site-logo">
        <a href="{{ route('user.dashboard') }}" class="logo"><img
                src="{{ url('assets/global/images/g8qOqXBYmhXvhxWst3qI.png') }}"
                style="height:35px;width:auto;max-width:none" alt="User"></a>
    </div>
    <nav class="user-nav">
        <ul>
            <li>
                <a href="{{ route('user.dashboard') }}">
                    <i data-lucide="inbox"></i>
                    <span>Overview</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.transfers') }}">
                    <i data-lucide="send"></i>
                    <span>Transfers</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.transactions') }}">
                    <i data-lucide="list"></i>
                    <span>Transactions</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.loan') }}">
                    <i data-lucide="pen"></i>
                    <span>Loan</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('user.pay-bill') }}">
                    <i data-lucide="credit-card"></i>
                    <span>Pay Bill</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.mortgage') }}">
                    <i data-lucide="home"></i>
                    <span>Mortgage</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('user.support') }}">
                    <i data-lucide="message-circle"></i>
                    <span>Support</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('user.settings') }}">
                    <i data-lucide="settings"></i>
                    <span>Settings</span>
                </a>
            </li>
            {{--

            <li class="">
                <a href="{{ route('user.deposit') }}">
                    <i data-lucide="plus-circle"></i>
                    <span>Deposit</span>
                </a>
            </li>
        <li class="">
            <a href="{{ route('user.wallets') }}">
                <i data-lucide="wallet"></i>
                <span>Wallets</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.cards') }}">
                <i data-lucide="credit-card"></i>
                <span>Virtual Cards</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.dps') }}">
                <i data-lucide="archive"></i>
                <span>DPS</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.fdr') }}">
                <i data-lucide="book"></i>
                <span>FDR</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.withdraw') }}">
                <i data-lucide="box"></i>
                <span>Withdraw</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.referral') }}">
                <i data-lucide="users"></i>
                <span>Referral</span>
                <b class="count-number">1</b>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.portfolio') }}">
                <i data-lucide="pie-chart"></i>
                <span>Portfolio</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.rewards') }}">
                <i data-lucide="gift"></i>
                <span>Rewards</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.support-ticket.index') }}">
                <i data-lucide="message-circle"></i>
                <span>Support</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('user.settings') }}">
                <i data-lucide="settings"></i>
                <span>Settings</span>
            </a>
        </li> --}}
            {{-- <li class="logout">
            <a href="{{ route('logout') }}">
                <i data-lucide="log-out"></i>
                <span>Logout</span>
            </a>
        </li> --}}
            <li class="logout">
                <a href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-lucide="log-out"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </nav>
</aside>
