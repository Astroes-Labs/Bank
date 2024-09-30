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
                                        $4.10
                                    </h3>

                                    <div class="acc-num">A/C:
                                        <strong>{{ $user->iban }}</strong>
                                        <span id="copy" data-bs-toggle="tooltip"
                                            data-bs-custom-class="custom-tooltip" data-bs-placement="right"
                                            data-bs-title="Copy"><i data-lucide="copy"></i></span>
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
                                                    <div class="site-table-col">Transactions ID</div>
                                                    <div class="site-table-col">Type</div>
                                                    <div class="site-table-col">Amount</div>
                                                    <div class="site-table-col">Charge</div>
                                                    <div class="site-table-col">Status</div>
                                                    <div class="site-table-col">Method</div>
                                                </div>
                                                <div class="site-table-list">
                                                    <div class="site-table-col">
                                                        <div class="description">
                                                            <div class="event-icon">
                                                                <i data-lucide="send"></i>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Transfer to 56635633653
                                                                </div>
                                                                <div class="date">19 Sep 2024 09:14 AM</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="trx fw-bold">TRXZE57CQXA3N</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-primary">Fund transfer</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-30 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-0.3 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-pending">pending</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold">System</div>
                                                    </div>
                                                </div>
                                                <div class="site-table-list">
                                                    <div class="site-table-col">
                                                        <div class="description">
                                                            <div class="event-icon">
                                                                <i data-lucide="send"></i>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Card Creation Charge
                                                                </div>
                                                                <div class="date">19 Sep 2024 08:11 AM</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="trx fw-bold">TRX2GP6ER86NJ</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-primary">Card create</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-2 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-0 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-success">success</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold">System</div>
                                                    </div>
                                                </div>
                                                <div class="site-table-list">
                                                    <div class="site-table-col">
                                                        <div class="description">
                                                            <div class="event-icon">
                                                                <i data-lucide="send"></i>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Card Creation Charge
                                                                </div>
                                                                <div class="date">19 Sep 2024 07:29 AM</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="trx fw-bold">TRXD5HXWSVNZK</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-primary">Card create</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-2 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-0 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-success">success</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold">System</div>
                                                    </div>
                                                </div>
                                                <div class="site-table-list">
                                                    <div class="site-table-col">
                                                        <div class="description">
                                                            <div class="event-icon">
                                                                <i data-lucide="chevrons-down"></i>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Deposit With Stripe-USD
                                                                </div>
                                                                <div class="date">19 Sep 2024 07:29 AM</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="trx fw-bold">TRXKU5BAB1LGR</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-primary">Deposit</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold green-color">+59 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-0.59 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-failed">failed</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold">Stripe usd</div>
                                                    </div>
                                                </div>
                                                <div class="site-table-list">
                                                    <div class="site-table-col">
                                                        <div class="description">
                                                            <div class="event-icon">
                                                                <i data-lucide="send"></i>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Card Creation Charge
                                                                </div>
                                                                <div class="date">19 Sep 2024 06:45 AM</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="trx fw-bold">TRX9V3QVDZONO</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-primary">Card create</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-2 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold red-color">-0 USD</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="type site-badge badge-success">success</div>
                                                    </div>
                                                    <div class="site-table-col">
                                                        <div class="fw-bold">System</div>
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
