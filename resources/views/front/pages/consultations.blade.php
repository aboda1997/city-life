@extends('front.layouts.master')
@section('title')
    {{ trans('words.request_consultation') }}
@endsection

@section('content')
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => __('words.request_consultation'),
        // 'title' => $portfolio->title,
        // 'route' => 'portfolio.index',
    ])
    <!--breadcrumb-->
    <!-- START CONTACT-FORM -->
    <section id="contact" class="contact-sec">
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-12 text-center">
                    {{-- <p class= font-weight-200 font-20">How to reach us</p> --}}
                    <h1 class="main-font font-weight-600 text-black">@lang('words.request_consultation_now')</h1>
                </div>
            </div>

            <!-- Contact-us -->
            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-12 col-lg-6 contact-form-box">
                    <div class="toast-part">
                        <div id="message-success"
                             class="toast align-items-center border-0 text-bg-success mx-auto text-center w-100"
                             role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-content text-center">
                                <div class="toast-body">
                                    {{ __('words.sent_successfully') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="contact-form text-start"  id="consultation" method="post">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <!-- Submission Popup -->
                            <div class="col-12">
                                <div class="col-sm-12 px-0" id="result"></div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text"
                                           placeholder="{{__("words.organization_name")}}"
                                           id="organization_name" name="organization_name">
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control email-input" type="email"
                                           placeholder="@lang('words.email')" id="email" name="email">
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control phone-input" type="tel"
                                           placeholder="@lang('words.phone')" id="phone" name="phone">
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="falling_facility">{{__('words.what_falling_facility')}}</label>
                                    <select class="form-select services-select" name="falling_facility"
                                            id="falling_facility" aria-label="falling_facility">
                                        <option value="company">{{ __("words.company") }}</option>
                                        <option value="organization">{{ __("words.organization") }}</option>
                                    </select>
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label
                                        for="facility_have_financial">{{__('words.does_facility_have_financial')}}</label>
                                    <select class="form-select services-select" name="facility_have_financial"
                                            id="facility_have_financial" aria-label="facility_have_financial">
                                        <option value="1">{{ __("words.yes") }}</option>
                                        <option value="0">{{ __("words.no") }}</option>
                                    </select>
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="financial_statements">{{__('words.financial_statements')}}</label>
                                    <select class="form-select services-select" name="financial_statements"
                                            id="facility_have_financial" aria-label="financial_statements">
                                        <option value="internal">{{ __("words.internal") }}</option>
                                        <option value="audited">{{ __("words.audited") }}</option>
                                    </select>
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="service_id">{{__('words.services')}}</label>
                                    <select class="form-select services-select" name="service_id"
                                            id="service" aria-label="Default select example">
                                        <option selected>@lang('words.choose_service')</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="revenues">{{__('words.revenues')}}</label>
                                    <textarea class="form-control" placeholder="@lang('words.revenues')"
                                              id="revenues"
                                              name="revenues"></textarea>
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="notes">{{__('words.notes')}}</label>
                                    <textarea class="form-control" placeholder="@lang('words.notes')" id="notes"
                                              name="notes"></textarea>
                                    <div class="invalid-feedback d-none text-start"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="py-3 d-flex justify-content-center align-items-center"
                                     data-aos="fade-down">
                                    <button class="button1" type="submit" id='submit-btn'>
                                        <span id='btn-text'>@lang('words.send')</span>
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                              id="loading-spinner"></span>
                                        <span class="d-none" id="loading-text">@lang('words.loading')</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT-FORM -->
@endsection

@push('script')
    <script>
        $('#message-success').hide();

        $('#consultation').submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            $('.form-control').each(function () {
                $(this).attr('disabled', true);
            });
            $('.form-control-md').each(function () {
                $(this).attr('disabled', true);
            });

            $('#submit-btn').attr('disabled', true); // disable
            $("#loading-spinner").removeClass('d-none'); // spinner
            $("#loading-text").removeClass('d-none'); // spinner text
            $("#btn-text").addClass('d-none'); // btn text

            $(".form-control").removeClass('is-invalid');
            $(".form-control-md").removeClass('is-invalid');

            $.ajax({
                type: 'POST',
                url: "{{ route('consultation.save') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    $('.form-control').each(function () {
                        $(this).removeAttr('disabled');
                    });
                    $('.form-control-md').each(function () {
                        $(this).removeAttr('disabled');
                    });

                    $('#submit-btn').attr('disabled', false); // disable
                    $("#loading-spinner").addClass('d-none'); // spinner
                    $("#loading-text").addClass('d-none'); // spinner text
                    $("#btn-text").removeClass('d-none'); // btn text

                    this.reset();
                    $('#message-success').show();
                    $('#message-success').addClass('show');
                    $('#message-successalert').text(response);
                    $('#message-success').addClass('mb-3 opacity-1');
                    setTimeout(() => {
                        $('#message-success').fadeOut('fast');
                        $('#message-success').removeClass('mb-3 opacity-1');
                        $('#message-success').removeClass('show');
                    }, 5000);
                },
                error: function (response) {
                    $('.form-control').each(function () {
                        $(this).removeAttr('disabled');
                    });
                    $('.form-control-md').each(function () {
                        $(this).removeAttr('disabled');
                    });
                    $('#submit-btn').attr('disabled', false); // disable
                    $("#loading-spinner").addClass('d-none'); // spinner
                    $("#loading-text").addClass('d-none'); // spinner text
                    $("#btn-text").removeClass('d-none'); // btn text
                    $.each(response.responseJSON.errors, function (key, value) {
                        $("#" + key).next().show();
                        $("#" + key).next().html(value[0]);
                        $("#" + key).next().removeClass('d-none');
                        $("#" + key).addClass('is-invalid');
                        // setTimeout(() => {
                        //     $("#" + key).next().fadeOut('fast');
                        //     $("#" + key).next().addClass('d-none');
                        //     $("#" + key).removeClass('is-invalid');
                        // }, 5000);
                    });

                }
            });
        });
    </script>
@endpush
