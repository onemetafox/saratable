@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- =============================== Dashboard Header ========================== -->
    @includeIf('partials.user.header')
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>@lang('Dashboard Navigation')
        </a>
        <div class="collapse" id="MobNav">
            @includeIf('partials.user.sidebar')
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">@lang('Hotel Booking Request')</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="{{ route('front.index') }}">@lang('Home')</a></li>
                                <li class="breadcrumb-item text-muted"><a href="{{ route('user.dashboard') }}">@lang('Dashboard')</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="dashboard-list-wraps bg-white rounded mb-4">
                            <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                <div class="dashboard-list-wraps-flx">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-shopping-basket me-2 theme-cl fs-sm"></i>@lang('All Bookings')</h4>
                                </div>
                            </div>

                            <div class="dashboard-list-wraps-body py-3 px-3">
                                <div class="dashboard-bookings-wraps">
                                    @foreach ($hotels as $key=>$hotel)
                                        <!-- Single booking List -->
                                        <div class="dsd-single-bookings-wraps">
                                            <div class="dsd-single-book-thumb"><img src="{{ asset('assets/images/'.$hotel->user->photo) }}" class="img-fluid circle" alt="" /></div>
                                            <div class="dsd-single-book-caption">
                                                <div class="dsd-single-book-title"><h5>{{ $hotel->user->name }}<span class="bko-dates">{{ $hotel->user->created_at->format('d M Y') }}</span></h5></div>
                                                <div class="ico-content">
                                                    <ul>
                                                        <li>
                                                            <div class="px-2 py-1 medium bg-light-{{ $hotel->status == 0 ? 'warning' :($hotel->status == 1 ? 'success':'danger')}} rounded text-{{ $hotel->status == 0 ? 'danger' :($hotel->status == 1 ? 'success':'primary')}}">
                                                                @if ($hotel->status == 0)
                                                                    @lang('Pending')
                                                                @elseif($hotel->status == 1)
                                                                    @lang('Approved')
                                                                @else
                                                                    @lang('Rejected')
                                                                @endif
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dsd-single-descr">
                                                    <div class="dsd-single-item">
                                                        <span class="dsd-item-title">@lang('Restaurant Item'):</span>
                                                        <span class="dsd-item-info">{{ $hotel->listing->name }}</span>
                                                    </div>

                                                    <div class="dsd-single-item">
                                                        <span class="dsd-item-title">@lang('Booking Date'):</span>
                                                        <span class="dsd-item-info">{{ Carbon\Carbon::parse($hotel->checkin_date)->format('d M Y')}} - {{ Carbon\Carbon::parse($hotel->checkout_date)->format('d M Y')}}</span>
                                                    </div>

                                                    <div class="dsd-single-item">
                                                        <span class="dsd-item-title">@lang('Member'):</span>
                                                        <span class="dsd-item-info">{{ $hotel->adults }} @lang('Adults'), {{ $hotel->kids }} @lang('Child')</span>
                                                    </div>

                                                    <div class="dsd-single-item">
                                                        <span class="dsd-item-title">@lang('Mail'):</span>
                                                        <span class="dsd-item-info">{{ $hotel->user->email }}</span>
                                                    </div>

                                                    <div class="dsd-single-item">
                                                        <span class="dsd-item-title">@lang('Phone'):</span>
                                                        <span class="dsd-item-info">{{ $hotel->user->phone }}</span>
                                                    </div>
                                                </div>
                                                <div class="dsd-single-book-footer">
                                                    @if ($hotel->status == 0)
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#confirm-status" data-href="{{ route('user.booking.status',['id1' => $hotel->id, 'id2' => 1]) }}" class="btn btn-aprd">
                                                            <i class="fas fa-check-circle me-1"></i>
                                                            @lang('Approved')
                                                        </a>

                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#confirm-status" data-href="{{ route('user.booking.status',['id1' => $hotel->id, 'id2' => 2]) }}" class="btn btn-reject">
                                                            <i class="fas fa-trash me-1"></i>
                                                            @lang('Reject')
                                                        </a>
                                                    @endif
                                                    <a href="{{ route('user.booking.conversation',$hotel->id) }}" class="btn btn-message"><i class="fas fa-envelope me-1"></i>@lang('Message')</a>
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

            <!-- footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3">
                        @php
                            echo $gs->copyright;
                        @endphp
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ======================= dashboard Detail End ======================== -->

    <div class="modal modal-blur fade" id="confirm-status" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
              <h3>{{__('Are you sure')}}?</h3>
              <div class="text-muted">{{__("You are about to change the status")}}</div>
            </div>
            <div class="modal-footer">
              <div class="w-100">
                <div class="d-flex justify-content-center gap-10px">
                  <a href="#" class="btn btn-outline-secondary w-100" data-bs-dismiss="modal">
                      {{__('Cancel')}}
                    </a>

                    <a href="javascript:;" class="btn btn-success w-100 btn-ok text-white">
                      {{__('Apply')}}
                    </a>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection

@push('js')
    <script type="text/javascript">
        'use strict';

        $('#confirm-status').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
@endpush
