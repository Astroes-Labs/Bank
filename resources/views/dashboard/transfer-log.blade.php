@section('extraJs')
    <script src="{{ url('assets/front/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/front/js/daterangepicker.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });
        });
    </script>
@endsection
@section('extraCss')
    <link href="{{ url('assets/front/css/daterangepicker.css') }}" rel="stylesheet">
@endsection

<div class="site-card-header">
    <div class="title-small">{{ request()->routeIs('user.transfer-log') || request()->routeIs('user.transfers-search') ? 'Transfer History' : 'Transactions' }}</div>
    <div class="card-header-links">
        <a href="{{ route('user.transfers') }}" class="card-header-link"><svg xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" data-lucide="send" class="lucide lucide-send">
                <path d="m22 2-7 20-4-9-9-4Z"></path>
                <path d="M22 2 11 13"></path>
            </svg>Transfer Money</a>
    </div>
</div>
<div class="site-card-body p-0 overflow-x-auto">
    <form action="{{ route('user.transfers-search') }}" method="GET">
        <div class="table-filter">
            <div class="filter">
                <div class="single-f-box">
                    <label for="trx">Description</label>
                    <input class="search" type="text" name="trx" value="{{ request('trx') }}" autocomplete="off">
                </div>
                <div class="single-f-box">
                    <label for="daterange">Date</label>
                    <input type="text" name="daterange" value="{{ request('daterange') }}" autocomplete="off" id="daterange">
                </div>
                <button class="apply-btn me-2" name="filter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" data-lucide="filter" class="lucide lucide-filter">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg> Filter
                </button>
            </div>
            {{-- <div class="filter">
                <div class="single-f-box w-auto ms-4 me-0">
                    <label for="limit">Entries</label>
                    <select name="limit" class="nice-select page-count" onchange="this.form.submit()">
                        <option value="15" {{ request('limit') == 15 ? 'selected' : '' }}>15</option>
                        <option value="30" {{ request('limit') == 30 ? 'selected' : '' }}>30</option>
                        <option value="50" {{ request('limit') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('limit') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                </div>
            </div> --}}
        </div>
    </form>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" class="lucide lucide-send">
                                    <path d="m22 2-7 20-4-9-9-4Z"></path>
                                    <path d="M22 2 11 13"></path>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    Transfer to {{ $transfer->name_of_account }}
                                </div>
                                <div class="date">{{ $transfer->created_at->format('d M Y h:i A') }}</div>
                                <div class="text-muted">
                                     {{ $transfer->purpose ?? "" }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-table-col">
                        <div class="green-color fw-bold">{{ $transfer->amount }} {{ $user->currency }}</div>
                    </div>
                    <div class="site-table-col">
                        <div class="trx fw-bold">
                            {{ $transfer->account_number }} <!-- Assuming you have a name field in your transfers -->
                        </div>
                    </div>
                    <div class="site-table-col">
                        <div class="type site-badge badge-{{ strtolower($transfer->status) }}">{{ ucfirst($transfer->status) }}</div>
                    </div>
                    <div class="site-table-col">
                        <div class="fw-bold">
                            {{ $transfer->bank_name }} <!-- Assuming you have a bank_name field -->
                        </div>
                    </div>
                </div>
                @endforeach

<!-- Add pagination links -->
<div class="pagination mb-2 ms-5">
    {{ $transfers->links() }}
</div>


        </div>
    </div>
</div>
<div class="modal fade" id="actionMessage" tabindex="-1" aria-labelledby="actionMessageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content site-table-modal">
            <div class="modal-body popup-body">
                <button type="button" class="modal-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" data-lucide="x" class="lucide lucide-x">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
                <div class="popup-body-text">
                    <div class="title">Action Message</div>
                    <p id="message-body">

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
