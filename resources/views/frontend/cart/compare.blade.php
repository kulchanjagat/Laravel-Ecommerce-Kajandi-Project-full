@extends('frontend.front_view.front_master')
@section('page-title','Compare Product')
@section('main_content')
    <header class="page-header">
        <h1 class="page-title">Compare Box</h1>
    </header>
    <div class="row">


        <div class="col-md-12">
            <div class="compare-wrap">
                <div class="compare-items-header">

                    <div class="compare-items-header-inner">
                        <strong>Compare Results</strong>

                        <label class="view-label">
                            <span>View:</span>
                            <select data-role="view" name="view">
                                <option value="all">All Features</option>
                                <option value="product">Product Features</option>
                                <option value="supplier">Supplier Features</option>
                            </select>
                        </label>

                        <label class="hide-same-label hide-label ui2-checkbox-customize-label">
                            <input class="ui2-checkbox-customize-val" type="checkbox"><span>Hide the Same</span>
                        </label>

                        <label class="hide-label ui2-checkbox-customize-label">
                            <input class="ui2-checkbox-customize-val" type="checkbox"><span>Highlight the Difference</span>
                        </label>

                        <label class="print-label float-right">
                            <i class="fa fa-print"></i> Print Current
                        </label>
                    </div>

                </div>
                <!-- End of Compare Header -->

                <table class="compare-items-table">
                    <tbody>
                    <tr>
                        <th class="params-title pagination-icon">
                            <div class="product-cell">
                                <i class="fa fa-angle-left"></i>
                            </div>
                        </th>
                        <th class="product-item product-item-content">
                            <div class="product-cell">
                                <div class="remove-area">
                                    <a class="button remove-item" href="#" title="Remove item"><span><span><i class="fa fa-times-circle"></i></span></span></a>
                                </div>
                                <div class="product-introduction">
                                    <a href="#" class="product-img">
                                        <img title="Product Name" src="{{asset('public/frontend/img/')}}/products/1499634563.png">
                                    </a>
                                    <div class="title-wrapper">
                                        <a class="product-name" href="#">
                                            Custom Logo Breathable and Durable
                                        </a>
                                        <a class="contact-item-btn" href="#"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                                    </div>
                                </div>

                                <ul class="product-tags">
                                    <li><i class="fa fa-star"></i>60+</li>
                                    <li><i class="fa fa-star"></i>10+</li>
                                    <li><i class="fa fa-clock-o"></i>24h</li>
                                </ul>
                            </div>
                        </th>
                        <th class="product-item product-item-content">
                            <div class="product-cell">
                                <div class="remove-area">
                                    <a class="button remove-item" href="#" title="Remove item"><span><span><i class="fa fa-times-circle"></i></span></span></a>
                                </div>
                                <div class="product-introduction">
                                    <a href="#" class="product-img">
                                        <img title="Product Name" src="{{asset('public/frontend/img/')}}/products/1499634563.png">
                                    </a>
                                    <div class="title-wrapper">
                                        <a class="product-name" href="#">
                                            Custom Logo Breathable and Durable
                                        </a>
                                        <a class="contact-item-btn" href="#"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                                    </div>
                                </div>

                                <ul class="product-tags">
                                    <li><i class="fa fa-star"></i>60+</li>
                                    <li><i class="fa fa-star"></i>10+</li>
                                    <li><i class="fa fa-clock-o"></i>24h</li>
                                </ul>
                            </div>
                        </th>
                        <th class="product-item product-item-content">
                            <div class="product-cell">
                                <div class="remove-area">
                                    <a class="button remove-item" href="#" title="Remove item"><span><span><i class="fa fa-times-circle"></i></span></span></a>
                                </div>
                                <div class="product-introduction">
                                    <a href="#" class="product-img">
                                        <img title="Product Name" src="{{asset('public/frontend/img/')}}/products/1499634563.png">
                                    </a>
                                    <div class="title-wrapper">
                                        <a class="product-name" href="#">
                                            Custom Logo Breathable and Durable
                                        </a>
                                        <a class="contact-item-btn" href="#"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                                    </div>
                                </div>

                                <ul class="product-tags">
                                    <li><i class="fa fa-star"></i>60+</li>
                                    <li><i class="fa fa-star"></i>10+</li>
                                    <li><i class="fa fa-clock-o"></i>24h</li>
                                </ul>
                            </div>
                        </th>
                        <th class="product-item product-item-content">
                            <div class="product-cell">
                                <div class="remove-area">
                                    <a class="button remove-item" href="#" title="Remove item"><span><span><i class="fa fa-times-circle"></i></span></span></a>
                                </div>
                                <div class="product-introduction">
                                    <a href="#" class="product-img">
                                        <img title="Product Name" src="{{asset('public/frontend/img/')}}/products/1499634563.png">
                                    </a>
                                    <div class="title-wrapper">
                                        <a class="product-name" href="#">
                                            Custom Logo Breathable and Durable
                                        </a>
                                        <a class="contact-item-btn" href="#"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                                    </div>
                                </div>

                                <ul class="product-tags">
                                    <li><i class="fa fa-star"></i>60+</li>
                                    <li><i class="fa fa-star"></i>10+</li>
                                    <li><i class="fa fa-clock-o"></i>24h</li>
                                </ul>
                            </div>
                        </th>
                        <th class="pagination-icon">
                            <div class="product-cell">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </th>
                    </tr>
                    </tbody>
                </table>



                <table class="compare-product-details">
                    <tbody>
                    <tr data-type="compareProductView" class="detail-head">
                        <th class="params-title"><div class="product-cell">Product Features</div></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content  hide"></th>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareProductView" data-key="minOrderQuanity">
                        <td class="params-title"><div class="product-cell">Min.Order Quantity</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                50 Pieces
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                3 Pieces
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                3 Pieces
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                5 Pieces
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                5 Pieces
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareProductView" data-key="fobPrice">
                        <td class="params-title"><div class="product-cell">FOB Price</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                US $ 5-7/Piece
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                /
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                /
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                US $ /Piece
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                US $ /Piece
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Port</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Shanghai or Ningbo
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr class="sub-detail-head quick-detail">
                        <td class="params-title"><div class="product-cell">Quick Details<br>
                            </div>
                        </td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content  hide"></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Brand Name</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                SIER
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Nikon
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Nikon
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Canon
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                Canon
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr>
                        <td class="params-title"><div class="product-cell">Model Number</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                S-264
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                D5300 18-55mm
                            </div>
                        </td>
                        <td class="product-item product-item-content  highlight-cell">
                            <div class="product-cell">
                                D5300
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                5D Mark III
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                EF 70-200mm f2.8L IS USM II
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr>
                        <td class="params-title"><div class="product-cell">Color</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Black ,  Cyan
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Black
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Black
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Black
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr>
                        <td class="params-title"><div class="product-cell">Type</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                DSLR
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                DSLR
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                DSLR
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                Zoom Lens
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr>
                        <td class="params-title"><div class="product-cell">Battery Type</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Rechargeable Battery Pack
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Rechargeable Battery Pack
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Rechargeable Battery Pack
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr>
                        <td class="params-title"><div class="product-cell">Image Stabilization</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Yes
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Yes
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                No
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr class="fold">
                        <td class="params-title"><div class="product-cell">Memory Card Type</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                SD Card
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                SD Card
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                SD Card
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr class="fold">
                        <td class="params-title"><div class="product-cell">Place of Origin</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                CN;ZHE
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                JP
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                JP
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr class="fold">
                        <td class="params-title"><div class="product-cell">Screen Size</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                &gt; 3"
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                &gt; 3"
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                2" - 3"
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr class="fold">
                        <td class="params-title"><div class="product-cell">Video Capture</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Yes
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Yes
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                Yes
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                -
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" class="detail-head">
                        <th class="params-title"><div class="product-cell">Supplier Features</div></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content "></th>
                        <th class="product-item product-item-content  hide"></th>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="companyName">
                        <td class="params-title"><div class="product-cell">Company Name</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <a href="#">
                                    <i class="ui2-icon ui2-icon-checkmark"></i>Yiwu Wan Sheng Trading Co., Ltd.
                                </a>
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <a href="#">
                                    <i class="ui2-icon ui2-icon-checkmark"></i>ROCK ENTERPRISE CO., LIMITED
                                </a>
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <a href="#">
                                    <i class="ui2-icon ui2-icon-checkmark"></i>ROCK ENTERPRISE CO., LIMITED
                                </a>
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <a href="#">
                                    <i class="ui2-icon ui2-icon-checkmark"></i>ROCK ENTERPRISE CO., LIMITED
                                </a>
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                <a href="#">
                                    <i class="ui2-icon ui2-icon-checkmark"></i>ROCK ENTERPRISE CO., LIMITED
                                </a>
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="bussinessType">
                        <td class="params-title"><div class="product-cell">Business Type</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">Trading Company</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">Trading Company</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">Trading Company</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">Trading Company</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">Trading Company</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="paymentTerms">
                        <td class="params-title"><div class="product-cell">Payment Terms</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                L/C<br>T/T<br>Western Union
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                T/T
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                T/T
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                T/T
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                T/T
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="yearEstablished">
                        <td class="params-title"><div class="product-cell">Year Established</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                                2017
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                                2013
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                                2013
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                                2013
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">

                                2013
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="supplierLocation">
                        <td class="params-title"><div class="product-cell">Supplier Location</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <i class="ui2-icon ui2-icon-checkmark"></i>
                                <i class="ui2-icon-flag-cn ui2-icon-flag-s"></i>
                                China (Mainland)
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <i class="ui2-icon ui2-icon-checkmark"></i>
                                <i class="ui2-icon-flag-hk ui2-icon-flag-s"></i>
                                Hong Kong
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <i class="ui2-icon ui2-icon-checkmark"></i>
                                <i class="ui2-icon-flag-hk ui2-icon-flag-s"></i>
                                Hong Kong
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                <i class="ui2-icon ui2-icon-checkmark"></i>
                                <i class="ui2-icon-flag-hk ui2-icon-flag-s"></i>
                                Hong Kong
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                <i class="ui2-icon ui2-icon-checkmark"></i>
                                <i class="ui2-icon-flag-hk ui2-icon-flag-s"></i>
                                Hong Kong
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Main Products</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">Yoga Wear<br>Gym Wear<br>Sports Wear</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">DIGITAL CAMERAS<br>LENSES<br>FLASH</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">DIGITAL CAMERAS<br>LENSES<br>FLASH</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">DIGITAL CAMERAS<br>LENSES<br>FLASH</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">DIGITAL CAMERAS<br>LENSES<br>FLASH</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Total Annual Sales Volume</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Number of Employees</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">51 - 100 People</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">11 - 50 People</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">11 - 50 People</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">11 - 50 People</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">11 - 50 People</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Online Performance</div></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content  hide"></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">No. of years with Alibaba.com</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                1
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                5
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                5
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">
                                5
                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">
                                5
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="joinedYears">
                        <td class="params-title"><div class="product-cell">Response Rate</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell">

                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr>
                        <td class="params-title"><div class="product-cell">Transaction History</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView">
                        <td class="params-title"><div class="product-cell">Supplier Types</div></td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell va-supplier">
                                <i class="fa fa-star"></i> Gold Supplier <br>
                                <i class="fa fa-star"></i> Onsite Checked <br>
                                <i class="fa fa-star"></i> Trade Assurance <br>
                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell va-supplier">
                                <i class="fa fa-star"></i> Gold Supplier <br>
                                <i class="fa fa-star"></i> Onsite Checked <br>



                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell va-supplier">
                                <i class="fa fa-star"></i> Gold Supplier <br>
                                <i class="fa fa-star"></i> Onsite Checked <br>



                            </div>
                        </td>
                        <td class="product-item product-item-content ">
                            <div class="product-cell va-supplier">
                                <i class="fa fa-star"></i> Gold Supplier <br>
                                <i class="fa fa-star"></i> Onsite Checked <br>



                            </div>
                        </td>
                        <td class="product-item product-item-content  hide">
                            <div class="product-cell va-supplier">
                                <i class="fa fa-star"></i> Gold Supplier <br>
                                <i class="fa fa-star"></i> Onsite Checked <br>
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" class="sub-detail-head">
                        <td class="params-title"><div class="product-cell">Trade Capability</div></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content  hide"></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView">
                        <td class="params-title"><div class="product-cell">Main Customers</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView">
                        <td class="params-title"><div class="product-cell">Year start exporting</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView">
                        <td class="params-title"><div class="product-cell">Export Markets</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" class="sub-detail-head">
                        <td class="params-title"><div class="product-cell">Production Capability</div></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content "></td>
                        <td class="product-item product-item-content  hide"></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="productLines">
                        <td class="params-title"><div class="product-cell">No. of Production Lines</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="factorySize">
                        <td class="params-title"><div class="product-cell">Factory Size</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>

                    <tr data-type="compareCompanyView" data-key="contractManufacturing">
                        <td class="params-title"><div class="product-cell">Contract Manufacturing</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content "><div class="product-cell">-</div></td>
                        <td class="product-item product-item-content  hide"><div class="product-cell">-</div></td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr></tr>
                    <tr class="contact contact-item">
                        <td class="params-title"><div class="product-cell">Select to contact</div></td>
                        <td class="product-item product-item-content">
                            <div class="product-cell">
                                <label class="">
                                    <input type="checkbox" checked="checked">
                                </label>
                            </div>
                        </td>
                        <td class="product-item product-item-content">
                            <div class="product-cell">
                                <label class="">
                                    <input type="checkbox" checked="checked">
                                </label>
                            </div>
                        </td>
                        <td class="product-item product-item-content">
                            <div class="product-cell">
                                <label class="">
                                    <input type="checkbox" checked="checked">
                                </label>
                            </div>
                        </td>
                        <td class="product-item product-item-content">
                            <div class="product-cell">
                                <label class="">
                                    <input type="checkbox" checked="checked">
                                </label>
                            </div>
                        </td>
                        <td class="operate-area"></td>
                    </tr>
                    <tr class="contact contact-all">
                        <td class="params-title">
                            <div class="product-cell">
                                <label class="ui2-checkbox-customize-label select-all">
                                    <input type="checkbox" checked="checked"><span>Select All</span>
                                </label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="product-cell">
                                <a href="#" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="operate-area"></td>
                    </tr>
                    </tbody>
                </table>



            </div>
        </div>
    </div>
    @endsection