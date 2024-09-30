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
                            @include('dashboard.transfer-card')
                            <!-- Modal for Add beneficiary-->
                            <div class="modal fade" id="addBox" tabindex="-1" aria-labelledby="addBoxModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content site-table-modal">
                                        <div class="modal-body popup-body">
                                            <button type="button" class="modal-btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i data-lucide="x"></i></button>
                                            <div class="popup-body-text">
                                                <div class="title">Add New Beneficiary</div>
                                                <form
                                                    action="https://digibank.tdevs.co/user/fund-transfer/beneficiary/store"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="fGWQt69NMG9GYvCiwRaIaAtoSGqE0FNrDNG4loa9"
                                                        autocomplete="off">
                                                    <div class="step-details-form">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="inputs">
                                                                    <label for=""
                                                                        class="input-label d-block">Select Bank<span
                                                                            class="required">*</span></label>
                                                                    <select class="add-beneficiary box-input"
                                                                        name="bank_id" id="bank_name">
                                                                        <option selected disabled>Select Bank</option>
                                                                        <option value="null">Own Bank</option>
                                                                        <option value="7">Capital One</option>
                                                                        <option value="8">Citibank</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="inputs">
                                                                    <label for="" class="input-label">Account
                                                                        Number<span class="required">*</span></label>
                                                                    <input type="text" class="box-input" required
                                                                        name="account_number">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="inputs">
                                                                    <label for="">Name on account<span
                                                                            class="required">*</span></label>
                                                                    <input type="text" class="box-input" required
                                                                        name="account_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12" id="nick_name">
                                                                <div class="inputs">
                                                                    <label for="">Nick Name<span
                                                                            class="required">*</span></label>
                                                                    <input type="text" class="box-input" required
                                                                        name="nick_name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-btns">
                                                        <button type="submit" class="site-btn-sm primary-btn me-2">
                                                            <i data-lucide="check"></i>
                                                            Add New
                                                        </button>
                                                        <a href="" class="site-btn-sm red-btn"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i data-lucide="x"></i>
                                                            Close
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal for Add beneficiary end-->
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
        $(document).ready(function() {
            "use strict"

            // Hide branch input if own bank selected
            var isPhysicalBank = '';

            if (!isPhysicalBank) {
                $('#bankId').on('change', function() {
                    if ($(this).val() == 0) {
                        $('#branch_name_field').addClass('d-none');
                    } else {
                        $('#branch_name_field').removeClass('d-none');
                    }
                });
            }

            var currency = "USD";

            $('#account_number').on('input', function() {
                $.ajax({
                    type: 'GET',
                    url: '/user/search-by-account-number/' + $(this).val(),
                    success: function(data) {
                        $('#account_name').val(data.name);
                        $('#branch_name').val(data.branch_name);
                    },
                    error: function(error) {
                        $('#account_name').val('');
                        $('#branch_name').val('');
                    }
                });
            });

            // Select 2 activation
            $('#bank_id').select2({
                dropdownParent: $('#addBox')
            });

            $('.select2-basic-active').select2({
                minimumResultsForSearch: Infinity,
            });

            // show/hide custom fields
            $('#beneficiaryId').on('change', function() {
                customFieldsVisibility();
            });

            function customFieldsVisibility() {
                let fields = $('.custom-fields');
                if ($('#beneficiaryId').val() != '') {
                    fields.hide();
                } else {
                    fields.show();
                }
            }

            // nice select
            $('.add-beneficiary').niceSelect();
            $('.edit-beneficiary').niceSelect();

            // own bank select event
            $("#bank_name").on('change', function(e) {

                if ($(this).val() == null) {
                    $('#branch_name_sec').hide();
                } else {
                    $('#branch_name_sec').show();
                }
            })
            var globalData;
            //select bank
            $('#bankId').change(function() {
                const selectedBankId = $(this).val();
                $('.charge').text('');
                $('.min-max').text('');
                $('.transfer').text('');
                $.ajax({
                    type: 'GET',
                    url: '/user/fund-transfer/beneficiary-details/' + selectedBankId,
                    success: function(data) {
                        // Clear existing options
                        $('#beneficiaryId').empty();
                        // Add new options based on the retrieved data
                        globalData = data.banksData;
                        $('#beneficiaryId').append(
                            '<option value="" selected>--Beneficiary--</option>');
                        $.each(data.beneficiaries, function(key, beneficiary) {
                            let accountNumber = beneficiary.account_number;
                            $('#beneficiaryId').append('<option value="' + beneficiary
                                .id + '">' + beneficiary.account_name + ' **** ' +
                                accountNumber.slice(-4) + '</option>');
                        });
                        if (selectedBankId != 0) {
                            $('.bank_name').text(data.banksData.name);
                            var img = '<img class="table-icon" src="../assets/' + data.banksData
                                .logo + '">'
                            $('#logo').html(img);
                            $('.charge').text('Charge ' + data.banksData.charge + ' ' + (data
                                .banksData.charge_type === 'percentage' ? ' % ' :
                                currency))
                            $('.min-max').text('Minimum ' + data.banksData.minimum_transfer +
                                ' ' + currency + ' and ' + 'Maximum ' + data.banksData
                                .maximum_transfer + ' ' + currency)
                            $('.transfer').text('Transfer in: ' + data.banksData
                                .processing_time + ' ' + data.banksData.processing_type)
                        } else {
                            $('.charge').text('Charge ' + data.banksData.charge + ' ' + (data
                                .banksData.charge_type === 'percentage' ? ' % ' :
                                currency));
                            $('.min-max').text('Minimum ' + data.banksData.minimum_transfer +
                                ' ' + currency + ' and ' + 'Maximum ' + data.banksData
                                .maximum_transfer + ' ' + currency)
                            $('.transfer').text('Instant Transfer');
                            $('.bank_name').text('Own Bank');
                            $("#logo_sec").hide();
                        }
                        customFieldsVisibility();
                    },
                    error: function(error) {
                        console.error('Error fetching beneficiaries:', error);
                        customFieldsVisibility();
                    }
                });

            })

            //amount on key up
            $('#amount').on('keyup', function(e) {
                var amount = $(this).val();
                $('.amount').text((Number(amount) + ' ' + currency))
                $('.currency').text(currency)
                var charge = globalData.charge_type === 'percentage' ? calPercentage(amount, globalData
                    .charge) : globalData.charge
                $('.charge2').text(charge + ' ' + currency)
                var total = (Number(amount) + Number(charge));
                $('.total').text(total + ' ' + currency)
                var payTotal = (Number(amount) + Number(charge));
                $('.pay-amount').text(payTotal + ' ' + currency);
            });
        })
    </script>
@endsection
