@extends('layout.dashboard-layout')
@section('content')
    <!--Notification-->

    <!-- Dashboard Section -->
    <main class="main-user-dahboard">
        @include('dashboard.navbar')
        <div class="page-content">
            <div class="main-content">
                @include('dashboard.user-part-header')
                <div class="page-gap">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="user-profile-card">
                                    {{-- <div class="badge">
                                        <a href="#" data-bs-toggle="tooltip"
                                            data-bs-custom-class="custom-tooltip" data-bs-placement="top"
                                            data-bs-title="Digi Member">
                                            <img src="assets/global/images/KWXpGesBrGNie4R3yRiS.svg"
                                                alt="">
                                        </a>
                                    </div> --}}

                                    <input type="hidden" id="refLink" value="{{ $user->iban }}">

                                    <h4 class="title">Current Account Balance</h4>

                                    <h3 class="acc-balance" id="passo">
                                        {{ $user->currency }} {{ $user->balance }}
                                    </h3>

                                    <div class="acc-num">A/C:
                                        <strong>{{ $user->iban }}</strong>
                                        <span id="copy" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                                            data-bs-placement="right" data-bs-title="Copy"><i data-lucide="copy"></i></span>
                                    </div>
                                    @php
                                        // Ensure last_login_at is a Carbon instance
                                        $lastLogin = $user->last_login_at
                                            ? \Carbon\Carbon::parse($user->last_login_at)->format('d M, h:i A')
                                            : 'Never';
                                        $browser = $user->last_login_browser ?? 'Unknown';
                                        $os = $user->last_login_os ?? 'Unknown';
                                    @endphp

                                    <div class="last-login">
                                        Last Login At: {{ $lastLogin }}. {{ $os }} . {{ $browser }}
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ route('user.transfers') }}" class="add"><i
                                                data-lucide="send"></i>Send Money</a>
                                    </div>
                                    <div class="o">O</div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                                        <div class="single-spec-stat">
                                            <div class="top">
                                                <div class="icon">
                                                    <i data-lucide="banknote"></i>
                                                </div>
                                                <div class="title">Overdraft Balance</div>
                                            </div>
                                            <div class="text">
                                                <p>Currently No Overdraft Balance Found.</p>
                                            </div>
                                            <div class="bottom">
                                                <div class="amount">$0.00</div>
                                                <a href="{{ '#' }}" class="ex-link"><i
                                                        data-lucide="arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="d-none col-xl-4 col-lg-4 col-md-6 col-12">
                                        <div class="single-spec-stat">
                                            <div class="top">
                                                <div class="icon">
                                                    <i data-lucide="banknote"></i>
                                                </div>
                                                <div class="title">
                                                    My FDR
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>Currently No FDR Found.</p>
                                            </div>
                                            <div class="bottom">
                                                <div class="amount">$0.00</div>
                                                <a href="https://digibank.tdevs.co/user/fdr/history" class="ex-link"><i
                                                        data-lucide="arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                                        <div class="single-spec-stat">
                                            <div class="top">
                                                <div class="icon">
                                                    <i data-lucide="banknote"></i>
                                                </div>
                                                <div class="title">Loan Balance</div>
                                            </div>
                                            <div class="text">
                                                <p>No Outstanding Loan.</p>
                                            </div>
                                            <div class="bottom">
                                                <div class="amount">$0.00</div>
                                                <a href="{{ '#' }}" class="ex-link"><i
                                                        data-lucide="arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="site-card">
                                    <div class="site-card-header">
                                        <div class="title-small">Recent Transactions</div>
                                        <div class="card-header-links">
                                            <a href="{{ route('user.transactions') }}" class="card-header-link"><i
                                                    data-lucide="eye"></i>See All</a>
                                        </div>
                                    </div>
                                    <div class="site-card-body p-0 overflow-x-auto">

                                        <div class="site-custom-table">
                                            <div class="contents">
                                                <div class="site-table-list site-table-head">
                                                    <div class="site-table-col">Description</div>
                                                    <div class="site-table-col">Amount</div>
                                                    <div class="site-table-col">Account Number</div>
                                                    {{-- <div class="site-table-col">Transaction ID</div> --}}
                                                    {{-- <div class="site-table-col">Fee</div> --}}
                                                    <div class="site-table-col">Status</div>
                                                    <div class="site-table-col">Bank</div>
                                                </div>
                                                {{-- <div class="site-table-list">
                <div class="site-table-col">
                    <div class="description">
                        <div class="event-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" data-lucide="send"
                                class="lucide lucide-send">
                                <path d="m22 2-7 20-4-9-9-4Z"></path>
                                <path d="M22 2 11 13"></path>
                            </svg></div>
                        <div class="content">
                            <div class="title">
                                Transfer to 56635633653
                            </div>
                            <div class="date">19 Sep 2024 09:14 AM</div>
                        </div>
                    </div>
                </div>
                <div class="site-table-col">
                    <div class="trx fw-bold">

                        juju por
                    </div>
                </div>
                <div class="site-table-col">
                    <div class="green-color fw-bold">- 30 USD</div>
                </div>
                <div class="site-table-col">
                    <div class="type site-badge badge-pending">Pending</div>
                </div>
                <div class="site-table-col">
                    <div class="fw-bold">
                        Own Bank
                    </div>
                </div>
            </div> --}}
                                                @foreach ($transfers as $transfer)
                                                    <div class="site-table-list">
                                                        <div class="site-table-col">
                                                            <div class="description">
                                                                <div class="event-icon">
                                                                    @if ($transfer->type === 'CR')
                                                                        <i data-lucide="chevrons-down"></i>
                                                                    @else
                                                                        <i data-lucide="send"></i>
                                                                    @endif
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title">
                                                                        Transfer to {{ $transfer->name_of_account }}
                                                                    </div>
                                                                    <div class="date">
                                                                        {{ $transfer->created_at->format('d M Y h:i A') }}
                                                                    </div>
                                                                    <div class="text-muted">
                                                                        {{ $transfer->purpose ?? '' }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="site-table-col">
                                                            <div class="green-color fw-bold">{{ $transfer->amount }}
                                                                {{ $user->currency }}</div>
                                                        </div>
                                                        <div class="site-table-col">
                                                            <div class="trx fw-bold">
                                                                {{ $transfer->account_number }}
                                                                <!-- Assuming you have a name field in your transfers -->
                                                            </div>
                                                        </div>
                                                        <div class="site-table-col">
                                                            <div
                                                                class="type site-badge badge-{{ strtolower($transfer->status) }}">
                                                                {{ ucfirst($transfer->status) }}</div>
                                                        </div>
                                                        <div class="site-table-col">
                                                            <div class="fw-bold">
                                                                {{ $transfer->bank_name }}
                                                                <!-- Assuming you have a bank_name field -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach




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
    </main>
    <!-- Dashboard Section End -->
@endsection

@section('extraJs')
    <script>
        $('#copy').on('click', function() {
            copyRef();
        });

        function copyRef() {
            /* Get the text field */
            var textToCopy = $('#refLink').val();
            // Create a temporary input element
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();
            // Copy the text from the temporary input
            document.execCommand('copy');
            // Remove the temporary input element
            tempInput.remove();

            // Set tooltip as copied
            var tooltip = bootstrap.Tooltip.getInstance('#copy');
            tooltip.setContent({
                '.tooltip-inner': 'Copied'
            });

            setTimeout(() => {
                tooltip.setContent({
                    '.tooltip-inner': 'Copy'
                });
            }, 4000);
        }
    </script>
@endsection
