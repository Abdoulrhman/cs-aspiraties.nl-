@include('includes.tmp_header')

<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title"> <span>{{la('budget_plan')}}</span> {{la('hosting')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item"><a href="{!! url('/host_services') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('hosting')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target"> <span>{{la('budget_plan')}}</span> {{la('hosting')}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<main>
    <div id="services" class="post-197 ">
        <div class="container">
            <div class="row reset-gutter">
                <div class="col-md-6">
                    <div class="service-item-content ">
                        <h2>
                            <span>Budget</span> HOSTING
                        </h2>




                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis dolores ducimus pariatur optio sint autem odio, provident quia debitis in.</p>
                        <div class="row">
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      Lorem ipsum dolor sit amet. 1</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p>
                                    <i class="fa fa-check"></i>
                                      Lorem ipsum dolor sit amet. 2</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      Lorem ipsum dolor sit amet. 3</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p>
                                    <i class="fa fa-check"></i>
                                      Lorem ipsum dolor sit amet. 4</p>
                            </div>
                        </div>




                        <div class="price">
                            <p>
                                starting form
                                <span>
                                                $10<em>
                                                    /month
                                                </em>
                                            </span>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item-img">
                        <img class="img-responsive" src="{{asset('assets')}}/Content/articles/2018/1/5/pBugpHOSTNG_570x409.png" alt="01 1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pricingTable">
        <div class="container">
            <div class="row reset-margin">
                <div class="col-md-3 col-sm-6 pricing-table-item mt-md">
                    <div class="pt-body">
                        <div class="pt-features pt2-left-header">
                            <ul class="text-left">
                                <li>CPU</li>
                                <li>RAM</li>
                                <li>DISK SPACE</li>
                                <li>BANDWIDTH</li>
                                <li>SETUP</li>
                                <li>IP</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 pricing-table-item">
                    <div class="pt-body">
                        <div class="pt-plan text-center">STANDARD</div>
                        <div class="pt-features">
                            <ul>
                                <li>2 CORES</li>
                                <li>2 GB</li>
                                <li>200 GB</li>
                                <li>2000 GB</li>
                                <li>FREE</li>
                                <li>UP TO 2</li>

                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer">
                        <a  class="btn btn-custom my_popup20050_open">Buy Now</a>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6 pricing-table-item">
                    <div class="pt-body">
                        <div class="pt-plan text-center">BASIC</div>
                        <div class="pt-features">
                            <ul>
                                <li>1 CORE</li>
                                <li>1 GB</li>
                                <li>100 GB</li>
                                <li>1000 GB</li>
                                <li>FREE</li>
                                <li>UP TO 1</li>

                            </ul>
                        </div>
                    </div><div class="pt-footer">
                        <a  class="btn btn-custom my_popup20049_open">Buy Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>
<div class="clear"></div>

<div id="my_popup20050">

    <h4>Plan Form</h4>
    <input type="hidden" name="type" value="STANDARD " />
    <div class="form-control">
        <input name="name" type="text" placeholder="Your Name" />
    </div>
    <div class="form-control">
        <input name="email" type="email" required placeholder="Email" />
    </div>
    <div class="form-control">
        <input name="phone" type="number" required placeholder="Phone" />
    </div>
    <div class="form-control">
        <input name="country" type="text" required placeholder="Country" />
    </div>
    <div class="form-control subpop">
        <input type="submit" value="Send" />
    </div>
    <button class="my_popup20050_close">Close</button>
    <div class="clear"></div>

    <!-- Add an optional button to close the popup -->


</div>
<div id="my_popup20049">

    <h4>Plan Form</h4>
    <input type="hidden" name="type" value="BASIC " />
    <div class="form-control">
        <input name="name" type="text" placeholder="Your Name" />
    </div>
    <div class="form-control">
        <input name="email" type="email" required placeholder="Email" />
    </div>
    <div class="form-control">
        <input name="phone" type="number" required placeholder="Phone" />
    </div>
    <div class="form-control">
        <input name="country" type="text" required placeholder="Country" />
    </div>
    <div class="form-control subpop">
        <input type="submit" value="Send" />
    </div>
    <button class="my_popup20049_close">Close</button>
    <div class="clear"></div>

    <!-- Add an optional button to close the popup -->


</div>


@include('includes.tmp_footer')
<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>
<script>

    $(document).ready(function () {

        // Initialize the plugin
        $('#my_popup20050').popup();

    });


    $(document).ready(function () {

        // Initialize the plugin
        $('#my_popup20049').popup();

    });


</script>
