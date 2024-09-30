@php
    if (request()->routeIs('user.transactions')) {
        // request()->routeIs('transactions')) {
        $showFirstCard = 'd-none';
    }
@endphp
<div class="col-xl-12 col-lg-12 col-md-12 col-12 {{ $showFirstCard ?? '' }}">
    <div class="site-card">
        <div class="site-card-body transfer-top-btns">
            <a href="{{ route('user.transfers') }}" class="site-btn-sm "><i data-lucide="send"></i> Transfer</a>
            <a href="{{ route('user.wire-transfer') }}" class="site-btn-sm "><i data-lucide="wifi"></i> Wire transfer</a>
            @if (request()->routeIs('user.transfers-search'))
                <a href="{{ route('user.transfers-search') }}" class="site-btn-sm"><i data-lucide="alert-circle"></i>
                    Transfer
                    history</a>
            @else
                <a href="{{ route('user.transfer-log') }}" class="site-btn-sm"><i data-lucide="alert-circle"></i>
                    Transfer
                    history</a>
            @endif
        </div>
    </div>
</div>

<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="site-card">
        @php $includeName = ($log??false) ? 'dashboard.transfer-log' : 'dashboard.transfer-form'; @endphp
        @include($includeName)
    </div>
</div>
