@extends('layouts.MasterView')
@section('menu_home', 'active')
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{asset('templete/vendors/images/banner-img.png')}}" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize text-white">
                Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
            </h4>
            <p class="font-18 max-width-600 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0 text-white">2020</div>
                    <div class="weight-600 font-14 text-white">Contact</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart2"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0 text-white">400</div>
                    <div class="weight-600 font-14 text-white">Deals</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart3"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0 text-white">350</div>
                    <div class="weight-600 font-14 text-white">Campaign</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart4"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0 text-white">$6060</div>
                    <div class="weight-600 font-14 text-white">Worth</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8 mb-30">
        <div class="card-box height-100-p pd-20">
            <h2 class="h4 mb-20 text-white">Activity</h2>
            <div id="chart5"></div>
        </div>
    </div>
    <div class="col-xl-4 mb-30">
        <div class="card-box height-100-p pd-20">
            <h2 class="h4 mb-20 text-white">Lead Target</h2>
            <div id="chart6"></div>
        </div>
    </div>
</div>
<div class="card-box mb-30">
    <h2 class="h4 pd-20 text-white">Best Selling Products</h2>
    <table class="data-table table nowrap">
        <thead>
            <tr>
                <th class="table-plus datatable-nosort text-white">Product</th>
                <th class="text-white">Name</th>
                <th class="text-white">Color</th>
                <th class="text-white">Size</th>
                <th class="text-white">Price</th>
                <th class="text-white">Oty</th>
                <th class="datatable-nosort text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="table-plus">
                    <img src="{{asset('templete/vendors/images/product-1.jpg')}}" width="70" height="70" alt="">
                </td>
                <td class="text-white">
                    <h5 class="font-16 text-white">Shirt</h5>
                    by John Doe
                </td>
                <td class="text-white">Black</td>
                <td class="text-white">M</td>
                <td class="text-white">$1000</td>
                <td class="text-white">1</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">
                    <img src="{{asset('templete/vendors/images/product-2.jpg')}}" width="70" height="70" alt="">
                </td>
                <td class="text-white">
                    <h5 class="font-16 text-white">Boots</h5>
                    by Lea R. Frith
                </td>
                <td class="text-white">brown</td>
                <td class="text-white">9UK</td>
                <td class="text-white">$900</td>
                <td class="text-white">1</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">
                    <img src="{{asset('templete/vendors/images/product-3.jpg')}}" width="70" height="70" alt="">
                </td>
                <td class="text-white">
                    <h5 class="font-16 text-white">Hat</h5>
                    by Erik L. Richards
                </td>
                <td class="text-white">Orange</td>
                <td class="text-white">M</td>
                <td class="text-white">$100</td>
                <td class="text-white">4</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">
                    <img src="{{asset('templete/vendors/images/product-4.jpg')}}" width="70" height="70" alt="">
                </td>
                <td class="text-white">
                    <h5 class="font-16 text-white">Long Dress</h5>
                    by Renee I. Hansen
                </td>
                <td class="text-white">Gray</td>
                <td class="text-white">L</td>
                <td class="text-white">$1000</td>
                <td class="text-white">1</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">
                    <img src="{{asset('templete/vendors/images/product-5.jpg')}}" width="70" height="70" alt="">
                </td>
                <td class="text-white">
                    <h5 class="font-16 text-white">Blazer</h5>
                    by Vicki M. Coleman
                </td>
                <td class="text-white">Blue</td>
                <td class="text-white">M</td>
                <td class="text-white">$1000</td>
                <td class="text-white">1</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
