<div class="site-card-header">
            <div class="title">{{ request()->routeIs('user.wire-transfer') ? 'Wire Transfer' : 'Transfer' }}</div>
            <div class="card-header-links">
                {{-- <a href="#" class="card-header-link" data-bs-toggle="modal"
                    data-bs-target="#addBox"><i data-lucide="plus-circle"></i>Add
                    Beneficiary</a> --}}
            </div>
        </div>
        <form id="transferForm" action="{{ route('user.transfer') }}" method="POST">
            @csrf
            <div class="site-card-body">
                <div class="step-details-form">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="inputs">
                                <label for="" class="input-label">Enter Amount<span class="required">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="amount" required>
                                    <span class="input-group-text">{{ $user->currency }}</span>
                                </div>
                                <div class="input-info-text">Minimum 10.00 {{ $user->currency }}
                                     {{-- and Maximum 10000.00 {{ $user->currency }} --}}
                                    </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="inputs">
                                <label for="" class="input-label">Name on account<span class="required">*</span></label>
                                <input type="text" class="box-input" name="name_of_account" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="inputs">
                                <label for="" class="input-label">{{ request()->routeIs('user.wire-transfer') ? 'IBAN' : 'Account Number' }}<span class="required">*</span></label>
                                <input type="text" class="box-input" name="account_number" id="account_number" required>
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="inputs">
                                <label for="" class="input-label">Bank Name<span class="required">*</span></label>
                                <input type="text" class="box-input" name="bank_name" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="inputs">
                                <label for="" class="input-label">SWIFT code</label>
                                <input type="text" class="box-input" name="swift_code" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="inputs">
                                <label class="form-label">Source of Funds<span class="required">*</span></label>
                                <select name="source_of_funds" class="page-count box-input" >
                                    <option value="" disabled selected>Select Source</option>
                                    <option value="{{ $user->balance.' '.$user->currency }}">Bank Account ({{ $user->balance.' '.$user->currency }})</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="inputs">
                                <label for="">Purpose of transfer (Optional)</label>
                                <textarea class="box-textarea" rows="3" name="purpose"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="site-btn polis-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" class="lucide lucide-send">
                        <path d="m22 2-7 20-4-9-9-4Z"></path>
                        <path d="M22 2 11 13"></path>
                    </svg>
                    Transfer
                </button>
            </div>
        </form>
