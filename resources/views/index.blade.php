@extends('layouts.main')

@section('app')

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xxl-6 mb-md-5 mb-xl-10">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-md-6 col-xl-6 mb-xxl-10">
                                <!--begin::Card widget 8-->
                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <!--begin::Statistics-->
                                        <div class="mb-4 px-9">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Currency-->
                                                <span class="fs-4 fw-semibold text-gray-400 align-self-start me-1&gt;">$</span>
                                                <!--end::Currency-->
                                                <!--begin::Value-->
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">69,700</span>
                                                <!--end::Value-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-semibold text-gray-400">Total Online Sales</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_8_chart" class="min-h-auto" style="height: 125px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 8-->
                                <!--begin::Card widget 5-->
                                <div class="card card-flush h-md-50 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                                                <!--end::Amount-->
                                                <!--begin::Badge-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>2.2%</span>
                                                <!--end::Badge-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-semibold fs-6">Total Sales</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end pt-0">
                                        <!--begin::Progress-->
                                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                <span class="fw-bolder fs-6 text-dark">1,048 to Goal</span>
                                                <span class="fw-bold fs-6 text-gray-400">62%</span>
                                            </div>
                                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                                <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 5-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 col-xl-6 mb-xxl-10">
                                <!--begin::Card widget 9-->
                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                        <!--begin::Statistics-->
                                        <div class="mb-4 px-9">
                                            <!--begin::Statistics-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Value-->
                                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">29,420</span>
                                                <!--end::Value-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-semibold text-gray-400">Total Online Visitors</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_9_chart" class="min-h-auto" style="height: 125px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 9-->
                                <!--begin::Card widget 7-->
                                <div class="card card-flush h-md-50 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3k</span>
                                            <!--end::Amount-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-semibold fs-6">Total New Customers</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                        <!--end::Title-->
                                        <!--begin::Users group-->
                                        <div class="symbol-group symbol-hover flex-nowrap">
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                <img alt="Pic" src="{{url('media/avatars/300-11.jpg')}}" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                <img alt="Pic" src="{{url('media/avatars/300-2.jpg')}}" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                <img alt="Pic" src="{{url('media/avatars/300-12.jpg')}}" />
                                            </div>
                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                            </a>
                                        </div>
                                        <!--end::Users group-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 7-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6 mb-5 mb-xl-10">
                        <!--begin::Maps widget 1-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">World Sales</span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">Top Selling Countries</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                <i class="ki-outline ki-information fs-6"></i>
                                            </span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-center">
                                <!--begin::Map container-->
                                <div id="kt_maps_widget_1_map" class="w-100 h-350px"></div>
                                <!--end::Map container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Maps widget 1-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Engage widget 1-->
                        <div class="card h-md-100" dir="ltr">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column flex-center">
                                <!--begin::Heading-->
                                <div class="mb-2">
                                    <!--begin::Title-->
                                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
                                    <br />new
                                    <span class="fw-bolder">Invoice Manager ?</span></h1>
                                    <!--end::Title-->
                                    <!--begin::Illustration-->
                                    <div class="py-10 text-center">
                                        <img src="{{url('media/svg/illustrations/easy/2.svg')}}" class="theme-light-show w-200px" alt="" />
                                        <img src="{{url('media/svg/illustrations/easy/2-dark.svg')}}" class="theme-dark-show w-200px" alt="" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Links-->
                                <div class="text-center mb-1">
                                    <!--begin::Link-->
                                    <a class="btn btn-sm btn-primary me-2" href="../../demo38/dist/apps/ecommerce/customers/listing.html">Try now</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a class="btn btn-sm btn-light" href="../../demo38/dist/apps/invoices/view/invoice-1.html">Learn more</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 1-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Chart widget 5-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header flex-nowrap pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Top Selling Categories</span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5 ps-6">
                                <div id="kt_charts_widget_5" class="min-h-auto"></div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">
                        <!--begin::List widget 6-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Top Selling Products</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="../../demo38/dist/apps/ecommerce/catalog/categories.html" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 w-50px pb-1">ITEM</th>
                                                <th class="ps-0 min-w-140px"></th>
                                                <th class="text-end min-w-140px p-0 pb-1">TOTAL PRICE</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{url('media/stock/ecommerce/210.png')}}" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{url('media/stock/ecommerce/215.png')}}" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$45.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{url('media/stock/ecommerce/209.png')}}" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$168.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{url('media/stock/ecommerce/214.png')}}" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Yellow Stone</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 6-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xxl-4 mb-xxl-10">
                        <!--begin::List widget 7-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header py-7">
                                <!--begin::Statistics-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0.37%</span>
                                        <!--end::Title-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-danger fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-danger ms-n1"></i>8.02%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-400">Online store convertion rate</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Items-->
                                <div class="mb-0">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-magnifier fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Search Retargeting</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.24%</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.4%</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-tiktok fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Retargeting</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.94%</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>9.4%</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-sms fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Retargeting</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3">1.23%</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-icon fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals Customers</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.08%</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-outline ki-abstract-25 fs-3 text-gray-600"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.46%</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-center">
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 7-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-8 mb-5 mb-xl-10">
                        <!--begin::Chart widget 13-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Sales Statistics</span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">Top Selling Products</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Remove</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Mute</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
                                <!--end::Chart container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 13-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::List widget 8-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7 mb-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Visits by Country</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">20 countries share 97% visits</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="../../demo38/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Items-->
                                <div class="m-0">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="{{url('media/flags/united-states.svg')}}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">United States</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="{{url('media/flags/brazil.svg')}}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="{{url('media/flags/turkey.svg')}}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="{{url('media/flags/france.svg')}}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="{{url('media/flags/india.svg')}}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>8.3%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="{{url('media/flags/sweden.svg')}}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 8-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::List widget 9-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header py-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Social Network Visits</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{url('media/svg/brand-logos/dribbble-icon-1.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{url('media/svg/brand-logos/linkedin-1.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{url('media/svg/brand-logos/slack-icon.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{url('media/svg/brand-logos/youtube-3.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{url('media/svg/brand-logos/instagram-2-1.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{url('media/svg/brand-logos/facebook-3.svg')}}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 9-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">
                        <!--begin::Chart widget 14-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Departments</span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">Performance & achievements</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                <i class="ki-outline ki-information fs-6"></i>
                                            </span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_14_chart" class="w-100 h-350px"></div>
                                <!--end::Chart container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 14-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List widget 12-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Visits by Source</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">29.4k visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-rocket fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct Source</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-tiktok fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Networks</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-sms fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Newsletter</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-icon fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-abstract-25 fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Link-->
                                    <div class="text-center pt-8 d-1">
                                        <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-primary opacity-75-hover fs-6 fw-bold">View Store Analytics
                                        <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 12-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Chart widget 15-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Author Sales</span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">Statistics by Countries</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Remove</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Mute</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-350px"></div>
                                <!--end::Chart container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 15-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end:::Main-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
<div class="card shadow-none border-0 rounded-0">
<!--begin::Header-->
<div class="card-header" id="kt_activities_header">
<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
<div class="card-toolbar">
    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
        <i class="ki-outline ki-cross fs-1"></i>
    </button>
</div>
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body position-relative" id="kt_activities_body">
<!--begin::Content-->
<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
    <!--begin::Timeline items-->
    <div class="timeline">
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                            <img src="{{url('media/avatars/300-14.jpg')}}" alt="img" />
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                    <!--begin::Record-->
                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                        <!--begin::Title-->
                        <a href="../../demo38/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                        <!--end::Title-->
                        <!--begin::Label-->
                        <div class="min-w-175px pe-2">
                            <span class="badge badge-light text-muted">Application Design</span>
                        </div>
                        <!--end::Label-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px">
                                <img src="{{url('media/avatars/300-2.jpg')}}" alt="img" />
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px">
                                <img src="{{url('media/avatars/300-14.jpg')}}" alt="img" />
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px">
                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Users-->
                        <!--begin::Progress-->
                        <div class="min-w-125px pe-2">
                            <span class="badge badge-light-primary">In Progress</span>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Action-->
                        <a href="../../demo38/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Record-->
                    <!--begin::Record-->
                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                        <!--begin::Title-->
                        <a href="../../demo38/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                        <!--end::Title-->
                        <!--begin::Label-->
                        <div class="min-w-175px">
                            <span class="badge badge-light text-muted">CRM System Development</span>
                        </div>
                        <!--end::Label-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px">
                                <img src="{{url('media/avatars/300-20.jpg')}}" alt="img" />
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px">
                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Users-->
                        <!--begin::Progress-->
                        <div class="min-w-125px">
                            <span class="badge badge-light-success">Completed</span>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Action-->
                        <a href="../../demo38/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Record-->
                </div>
                <!--end::Timeline details-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n2">
                <!--begin::Timeline heading-->
                <div class="overflow-auto pe-3">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                            <img src="{{url('media/avatars/300-1.jpg')}}" alt="img" />
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="mb-5 pe-3">
                    <!--begin::Title-->
                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                            <img src="{{url('media/avatars/300-23.jpg')}}" alt="img" />
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                            <!--begin::Icon-->
                            <img alt="" class="w-30px me-3" src="{{url('media/svg/files/pdf.svg')}}" />
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="../../demo38/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">1.9mb</div>
                                <!--end::Number-->
                            </div>
                            <!--begin::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                            <!--begin::Icon-->
                            <img alt="../../demo38/dist/apps/projects/project.html" class="w-30px me-3" src="{{url('media/svg/files/doc.svg')}}" />
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">18kb</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-aligns-center">
                            <!--begin::Icon-->
                            <img alt="../../demo38/dist/apps/projects/project.html" class="w-30px me-3" src="{{url('media/svg/files/css.svg')}}" />
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">20mb</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Timeline details-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">Task
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                            <img src="{{url('media/avatars/300-14.jpg" alt="img')}}" />
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                            <img src="{{url('media/avatars/300-2.jpg')}}" alt="img" />
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                        <!--begin::Item-->
                        <div class="overlay me-10">
                            <!--begin::Image-->
                            <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{url('media/stock/600x400/img-29.jpg')}}" />
                            </div>
                            <!--end::Image-->
                            <!--begin::Link-->
                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="overlay me-10">
                            <!--begin::Image-->
                            <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{url('media/stock/600x400/img-31.jpg')}}" />
                            </div>
                            <!--end::Image-->
                            <!--begin::Link-->
                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="overlay">
                            <!--begin::Image-->
                            <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{url('media/stock/600x400/img-40.jpg')}}" />
                            </div>
                            <!--end::Image-->
                            <!--begin::Link-->
                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Timeline details-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">New case
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="overflow-auto pb-5">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                            <!--end::User-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                            <img src="{{url('media/avatars/300-4.jpg" alt="img')}}" />
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Timeline details-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
        <!--begin::Timeline item-->
        <div class="timeline-item">
            <!--begin::Timeline line-->
            <div class="timeline-line w-40px"></div>
            <!--end::Timeline line-->
            <!--begin::Timeline icon-->
            <div class="timeline-icon symbol symbol-circle symbol-40px">
                <div class="symbol-label bg-light">
                    <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                </div>
            </div>
            <!--end::Timeline icon-->
            <!--begin::Timeline content-->
            <div class="timeline-content mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-semibold mb-2">New order
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                        <!--end::User-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
            </div>
            <!--end::Timeline content-->
        </div>
        <!--end::Timeline item-->
    </div>
    <!--end::Timeline items-->
</div>
<!--end::Content-->
</div>
<!--end::Body-->
<!--begin::Footer-->
<div class="card-footer py-5 text-center" id="kt_activities_footer">
<a href="../../demo38/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
<i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
</div>
<!--end::Footer-->
</div>
</div>
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
<!--begin::Messenger-->
<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
<!--begin::Card header-->
<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
<!--begin::Title-->
<div class="card-title">
    <!--begin::User-->
    <div class="d-flex justify-content-center flex-column me-3">
        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
        <!--begin::Info-->
        <div class="mb-0 lh-1">
            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
            <span class="fs-7 fw-semibold text-muted">Active</span>
        </div>
        <!--end::Info-->
    </div>
    <!--end::User-->
</div>
<!--end::Title-->
<!--begin::Card toolbar-->
<div class="card-toolbar">
    <!--begin::Menu-->
    <div class="me-0">
        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-dots-square fs-2"></i>
        </button>
        <!--begin::Menu 3-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
            <!--begin::Heading-->
            <div class="menu-item px-3">
                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
            </div>
            <!--end::Heading-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                    <i class="ki-outline ki-information fs-7"></i>
                </span></a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                <a href="#" class="menu-link px-3">
                    <span class="menu-title">Groups</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-1">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu 3-->
    </div>
    <!--end::Menu-->
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
        <i class="ki-outline ki-cross-square fs-2"></i>
    </div>
    <!--end::Close-->
</div>
<!--end::Card toolbar-->
</div>
<!--end::Card header-->
<!--begin::Card body-->
<div class="card-body" id="kt_drawer_chat_messenger_body">
<!--begin::Messages-->
<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">5 mins</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                </div>
                <!--end::Avatar-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                </div>
                <!--end::Avatar-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
            <a href="https://keenthemes.com">Keenthemes.com</a></div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                </div>
                <!--end::Avatar-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">Just now</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                </div>
                <!--end::Avatar-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->
    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">Just now</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
</div>
<!--end::Messages-->
</div>
<!--end::Card body-->
<!--begin::Card footer-->
<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
<!--begin::Input-->
<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
<!--end::Input-->
<!--begin:Toolbar-->
<div class="d-flex flex-stack">
    <!--begin::Actions-->
    <div class="d-flex align-items-center me-2">
        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
            <i class="ki-outline ki-paper-clip fs-3"></i>
        </button>
        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
            <i class="ki-outline ki-cloud-add fs-3"></i>
        </button>
    </div>
    <!--end::Actions-->
    <!--begin::Send-->
    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
    <!--end::Send-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Card footer-->
</div>
<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--begin::Chat drawer-->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
<!--begin::Messenger-->
<div class="card card-flush w-100 rounded-0">
<!--begin::Card header-->
<div class="card-header">
<!--begin::Title-->
<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
<!--end::Title-->
<!--begin::Card toolbar-->
<div class="card-toolbar">
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
        <i class="ki-outline ki-cross fs-2"></i>
    </div>
    <!--end::Close-->
</div>
<!--end::Card toolbar-->
</div>
<!--end::Card header-->
<!--begin::Card body-->
<div class="card-body hover-scroll-overlay-y h-400px pt-5">
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-1.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-3.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-8.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-26.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-21.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-34.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column me-3">
        <!--begin::Section-->
        <div class="mb-3">
            <a href="../../demo38/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="d-flex align-items-center">
            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
            <span class="text-muted mx-2">for</span>
            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
            </a>
            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
            </a>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Pic-->
    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
        <img src="{{url('media/stock/600x400/img-27.jpg')}}" alt="" />
    </div>
    <!--end::Pic-->
</div>
<!--end::Item-->
</div>
<!--end::Card body-->
<!--begin::Card footer-->
<div class="card-footer">
<!--begin::Item-->
<div class="d-flex flex-stack">
    <span class="fw-bold text-gray-600">Total</span>
    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
</div>
<!--end::Item-->
<!--begin::Item-->
<div class="d-flex flex-stack">
    <span class="fw-bold text-gray-600">Sub total</span>
    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
</div>
<!--end::Item-->
<!--end::Action-->
<div class="d-flex justify-content-end mt-9">
    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
</div>
<!--end::Action-->
</div>
<!--end::Card footer-->
</div>
<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
<i class="ki-outline ki-arrow-up"></i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-xl">
<!--begin::Modal content-->
<div class="modal-content rounded">
<!--begin::Modal header-->
<div class="modal-header justify-content-end border-0 pb-0">
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <i class="ki-outline ki-cross fs-1"></i>
    </div>
    <!--end::Close-->
</div>
<!--end::Modal header-->
<!--begin::Modal body-->
<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
    <!--begin::Heading-->
    <div class="mb-13 text-center">
        <h1 class="mb-3">Upgrade a Plan</h1>
        <div class="text-muted fw-semibold fs-5">If you need more info, please check
        <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
    </div>
    <!--end::Heading-->
    <!--begin::Plans-->
    <div class="d-flex flex-column">
        <!--begin::Nav group-->
        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
        </div>
        <!--end::Nav group-->
        <!--begin::Row-->
        <div class="row mt-10">
            <!--begin::Col-->
            <div class="col-lg-6 mb-10 mb-lg-0">
                <!--begin::Tabs-->
                <div class="nav flex-column">
                    <!--begin::Tab link-->
                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                            </div>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
                                <div class="fw-semibold opacity-75">Best for startups</div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->
                        <!--begin::Price-->
                        <div class="ms-5">
                            <span class="mb-2">$</span>
                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                            <span class="fs-7 opacity-50">/
                            <span data-kt-element="period">Mon</span></span>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                <input class="form-check-input" type="radio" name="plan" value="advanced" />
                            </div>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
                                <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->
                        <!--begin::Price-->
                        <div class="ms-5">
                            <span class="mb-2">$</span>
                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                            <span class="fs-7 opacity-50">/
                            <span data-kt-element="period">Mon</span></span>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                            </div>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
                                <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
                                <div class="fw-semibold opacity-75">Best value for 1000+ team</div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->
                        <!--begin::Price-->
                        <div class="ms-5">
                            <span class="mb-2">$</span>
                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                            <span class="fs-7 opacity-50">/
                            <span data-kt-element="period">Mon</span></span>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                <input class="form-check-input" type="radio" name="plan" value="custom" />
                            </div>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
                                <div class="fw-semibold opacity-75">Requet a custom license</div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->
                        <!--begin::Price-->
                        <div class="ms-5">
                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Tab link-->
                </div>
                <!--end::Tabs-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Tab content-->
                <div class="tab-content rounded h-100 bg-light p-10">
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                        <!--begin::Heading-->
                        <div class="pb-5">
                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                            <div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div class="pt-1">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
                                <i class="ki-outline ki-cross-circle fs-1"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
                                <i class="ki-outline ki-cross-circle fs-1"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                                <i class="ki-outline ki-cross-circle fs-1"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                <i class="ki-outline ki-cross-circle fs-1"></i>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                        <!--begin::Heading-->
                        <div class="pb-5">
                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                            <div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div class="pt-1">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                                <i class="ki-outline ki-cross-circle fs-1"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                <i class="ki-outline ki-cross-circle fs-1"></i>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                        <!--begin::Heading-->
                        <div class="pb-5">
                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                            <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div class="pt-1">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                        <!--begin::Heading-->
                        <div class="pb-5">
                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                            <div class="text-muted fw-semibold">Optimal for corporations</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div class="pt-1">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Plans-->
    <!--begin::Actions-->
    <div class="d-flex flex-center flex-row-fluid pt-12">
        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
            <!--begin::Indicator label-->
            <span class="indicator-label">Upgrade Plan</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Actions-->
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog mw-650px">
<!--begin::Modal content-->
<div class="modal-content">
<!--begin::Modal header-->
<div class="modal-header pb-0 border-0 justify-content-end">
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <i class="ki-outline ki-cross fs-1"></i>
    </div>
    <!--end::Close-->
</div>
<!--begin::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
    <!--begin::Heading-->
    <div class="text-center mb-13">
        <!--begin::Title-->
        <h1 class="mb-3">Browse Users</h1>
        <!--end::Title-->
        <!--begin::Description-->
        <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
        <a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
        <!--end::Description-->
    </div>
    <!--end::Heading-->
    <!--begin::Users-->
    <div class="mb-15">
        <!--begin::List-->
        <div class="mh-375px scroll-y me-n7 pe-7">
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-6.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$50,500</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">max@kt.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$75,900</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-5.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$10,500</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
                        <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$20,000</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">mik@pex.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$9,300</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-9.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$15,000</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
                        <span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$45,800</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-23.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$90,500</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$5,000</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-12.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$70,000</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-5">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-6">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
                        <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="fw-semibold text-muted">robert@benko.com</div>
                        <!--end::Email-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                    <!--begin::Sales-->
                    <div class="text-end">
                        <div class="fs-5 fw-bold text-dark">$45,500</div>
                        <div class="fs-7 text-muted">Sales</div>
                    </div>
                    <!--end::Sales-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::User-->
        </div>
        <!--end::List-->
    </div>
    <!--end::Users-->
    <!--begin::Notice-->
    <div class="d-flex justify-content-between">
        <!--begin::Label-->
        <div class="fw-semibold">
            <label class="fs-6">Adding Users by Team Members</label>
            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
        </div>
        <!--end::Label-->
        <!--begin::Switch-->
        <label class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="" checked="checked" />
            <span class="form-check-label fw-semibold text-muted">Allowed</span>
        </label>
        <!--end::Switch-->
    </div>
    <!--end::Notice-->
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px">
<!--begin::Modal content-->
<div class="modal-content">
<!--begin::Modal header-->
<div class="modal-header pb-0 border-0 justify-content-end">
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <i class="ki-outline ki-cross fs-1"></i>
    </div>
    <!--end::Close-->
</div>
<!--begin::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
    <!--begin::Content-->
    <div class="text-center mb-13">
        <h1 class="mb-3">Search Users</h1>
        <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
    </div>
    <!--end::Content-->
    <!--begin::Search-->
    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
        <!--begin::Form-->
        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
            <!--begin::Hidden input(Added to disable form autocomplete)-->
            <input type="hidden" />
            <!--end::Hidden input-->
            <!--begin::Icon-->
            <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
            <!--end::Icon-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
            <!--end::Input-->
            <!--begin::Spinner-->
            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
            </span>
            <!--end::Spinner-->
            <!--begin::Reset-->
            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
            </span>
            <!--end::Reset-->
        </form>
        <!--end::Form-->
        <!--begin::Wrapper-->
        <div class="py-5">
            <!--begin::Suggestions-->
            <div data-kt-search-element="suggestions">
                <!--begin::Heading-->
                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7">
                    <!--begin::User-->
                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle me-5">
                            <img alt="Pic" src="{{url('media/avatars/300-6.jpg')}}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="fw-semibold">
                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                            <span class="badge badge-light">Art Director</span>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle me-5">
                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="fw-semibold">
                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                            <span class="badge badge-light">Marketing Analytic</span>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle me-5">
                            <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="fw-semibold">
                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                            <span class="badge badge-light">Software Enginer</span>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle me-5">
                            <img alt="Pic" src="{{url('media/avatars/300-5.jpg')}}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="fw-semibold">
                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                            <span class="badge badge-light">Web Developer</span>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::User-->
                    <!--begin::User-->
                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle me-5">
                            <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="fw-semibold">
                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                            <span class="badge badge-light">UI/UX Designer</span>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::User-->
                </div>
                <!--end::Users-->
            </div>
            <!--end::Suggestions-->
            <!--begin::Results(add d-none to below element to hide the users list by default)-->
            <div data-kt-search-element="results" class="d-none">
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7">
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-6.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2" selected="selected">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1" selected="selected">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                <div class="fw-semibold text-muted">max@kt.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-5.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2" selected="selected">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                <div class="fw-semibold text-muted">mik@pex.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2" selected="selected">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-9.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2" selected="selected">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1" selected="selected">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-23.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2" selected="selected">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-12.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1" selected="selected">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                <div class="fw-semibold text-muted">robert@benko.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-13.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2" selected="selected">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-21.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1" selected="selected">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                    <!--begin::Separator-->
                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                    <!--end::Separator-->
                    <!--begin::User-->
                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{url('media/avatars/300-5.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Access menu-->
                        <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                <option value="1">Guest</option>
                                <option value="2">Owner</option>
                                <option value="3" selected="selected">Can Edit</option>
                            </select>
                        </div>
                        <!--end::Access menu-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->
                <!--begin::Actions-->
                <div class="d-flex flex-center mt-15">
                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Results-->
            <!--begin::Empty-->
            <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Message-->
                <div class="fw-semibold py-10">
                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                </div>
                <!--end::Message-->
                <!--begin::Illustration-->
                <div class="text-center px-5">
                    <img src="{{url('media/illustrations/sketchy-1/1.png')}}" alt="" class="w-100 h-200px h-sm-325px" />
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Empty-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Search-->
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog mw-650px">
<!--begin::Modal content-->
<div class="modal-content">
<!--begin::Modal header-->
<div class="modal-header pb-0 border-0 justify-content-end">
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <i class="ki-outline ki-cross fs-1"></i>
    </div>
    <!--end::Close-->
</div>
<!--begin::Modal header-->
<!--begin::Modal body-->
<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
    <!--begin::Heading-->
    <div class="text-center mb-13">
        <!--begin::Title-->
        <h1 class="mb-3">Invite a Friend</h1>
        <!--end::Title-->
        <!--begin::Description-->
        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
        <a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
        <!--end::Description-->
    </div>
    <!--end::Heading-->
    <!--begin::Google Contacts Invite-->
    <div class="btn btn-light-primary fw-bold w-100 mb-8">
    <img alt="Logo" src="{{url('media/svg/brand-logos/google-icon.svg')}}" class="h-20px me-3" />Invite Gmail Contacts</div>
    <!--end::Google Contacts Invite-->
    <!--begin::Separator-->
    <div class="separator d-flex flex-center mb-8">
        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
    </div>
    <!--end::Separator-->
    <!--begin::Textarea-->
    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
    <!--end::Textarea-->
    <!--begin::Users-->
    <div class="mb-10">
        <!--begin::Heading-->
        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
        <!--end::Heading-->
        <!--begin::List-->
        <div class="mh-300px scroll-y me-n7 pe-7">
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-6.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-1.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                        <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-5.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-25.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                        <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-9.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-23.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-12.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                        <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-13.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-21.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
            <!--begin::User-->
            <div class="d-flex flex-stack py-4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="{{url('media/avatars/300-23.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->
        </div>
        <!--end::List-->
    </div>
    <!--end::Users-->
    <!--begin::Notice-->
    <div class="d-flex flex-stack">
        <!--begin::Label-->
        <div class="me-5 fw-semibold">
            <label class="fs-6">Adding Users by Team Members</label>
            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
        </div>
        <!--end::Label-->
        <!--begin::Switch-->
        <label class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
            <span class="form-check-label fw-semibold text-muted">Allowed</span>
        </label>
        <!--end::Switch-->
    </div>
    <!--end::Notice-->
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--end::Modals-->

</body>
<!--end::Body-->
</html>

@endsection

@push('scripts')



<!--begin::Javascript-->
<script>var hostUrl = "public/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{url('plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{url('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{url('plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{url('js/widgets.bundle.js')}}"></script>
<script src="{{url('js/custom/widgets.js')}}"></script>
<script src="{{url('js/custom/apps/chat/chat.js')}}"></script>
<script src="{{url('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{url('js/custom/utilities/modals/users-search.js')}}"></script>


@endpush

