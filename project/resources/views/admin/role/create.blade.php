@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Add New Role') }} <a class="btn btn-primary btn-rounded btn-sm" href="{{route('admin.role.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
    <ol class="breadcrumb py-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">{{ __('Roles') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.role.index') }}">{{ __('Manage Roles') }}</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.role.create')}}">{{ __('Add New Role') }}</a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Add Role Form') }}</h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="{{route('admin.role.store')}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}

          <div class="form-group">
              <label for="inp-name">{{ __('Role Name') }}</label>
              <input type="text" class="form-control" id="inp-name" name="name"  placeholder="{{ __('Enter Role Name') }}" value="" required>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Menu Builder" class="custom-control-input" id="menu_builder">
                  <label class="custom-control-label" for="menu_builder">{{__('Menu Builder')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Manage Plan" class="custom-control-input" id="manage_plann">
                  <label class="custom-control-label" for="manage_plann">{{__('Manage Plan')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Categories" class="custom-control-input" id="Categories">
                    <label class="custom-control-label" for="Categories">{{__('Categories')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Amenities" class="custom-control-input" id="Amenities">
                    <label class="custom-control-label" for="Amenities">{{__('Amenities')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Locations" class="custom-control-input" id="Locations">
                    <label class="custom-control-label" for="Locations">{{__('Locations')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Directory Restaurant" class="custom-control-input" id="Directory Restaurant">
                    <label class="custom-control-label" for="Directory Restaurant">{{__('Directory Restaurant')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Directory Reviews" class="custom-control-input" id="Directory Reviews">
                    <label class="custom-control-label" for="Directory Reviews">{{__('Directory Reviews')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Booking Request" class="custom-control-input" id="Booking Request">
                    <label class="custom-control-label" for="Booking Request">{{__('Booking Request')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Directory Enquiry" class="custom-control-input" id="Directory Enquiry">
                    <label class="custom-control-label" for="Directory Enquiry">{{__('Directory Enquiry')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Manage Customers" class="custom-control-input" id="manage_customers">
                  <label class="custom-control-label" for="manage_customers">{{__('Manage Customers')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Transactions" class="custom-control-input" id="transactions">
                  <label class="custom-control-label" for="transactions">{{__('Transactions')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Manage Blog" class="custom-control-input" id="manage_blog">
                  <label class="custom-control-label" for="manage_blog">{{__('Manage Blog')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="General Settings" class="custom-control-input" id="general_setting">
                  <label class="custom-control-label" for="general_setting">{{__('General Settings')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Home Page Manage" class="custom-control-input" id="homepage_manage">
                  <label class="custom-control-label" for="homepage_manage">{{__('Home Page Manage')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Email Settings" class="custom-control-input" id="email_setting">
                  <label class="custom-control-label" for="email_setting">{{__('Email Settings')}}</label>
                  </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Message" class="custom-control-input" id="Message">
                  <label class="custom-control-label" for="Message">{{__('Message')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Payment Settings" class="custom-control-input" id="payment_setting">
                  <label class="custom-control-label" for="payment_setting">{{__('Payment Settings')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Manage Roles" class="custom-control-input" id="manage_roles">
                  <label class="custom-control-label" for="manage_roles">{{__('Manage Roles')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Manage Staff" class="custom-control-input" id="manage_staff">
                  <label class="custom-control-label" for="manage_staff">{{__('Manage Staff')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Language Manage" class="custom-control-input" id="language_setting">
                  <label class="custom-control-label" for="language_setting">{{__('Language Manage')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" name="section[]" value="Fonts" class="custom-control-input" id="font">
                    <label class="custom-control-label" for="font">{{__('Fonts')}}</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Menu Page Settings" class="custom-control-input" id="menupage_setting">
                  <label class="custom-control-label" for="menupage_setting">{{__('Menu Page Settings')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Seo Tools" class="custom-control-input" id="seo_tools">
                  <label class="custom-control-label" for="seo_tools">{{__('Seo Tools')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Sitemaps" class="custom-control-input" id="Sitemaps">
                  <label class="custom-control-label" for="Sitemaps">{{__('Sitemaps')}}</label>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" value="Subscribers" class="custom-control-input" id="subscribers">
                  <label class="custom-control-label" for="subscribers">{{__('Subscribers')}}</label>
                  </div>
              </div>
            </div>

          </div>
          <hr>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100">{{ __('Submit') }}</button>

        </form>
      </div>
    </div>

    <!-- Form Sizing -->

    <!-- Horizontal Form -->

  </div>

</div>
<!--Row-->

@endsection
