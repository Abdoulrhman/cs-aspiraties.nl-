@include('includes.tmp_header')

<section class="maininner" style="background-image: url({{asset('assets/img/bg-image-4.jpg')}});">
    <div class="container text-center">
        <div class="mm-breadcrumbs">

            <h4 class="page-title">{{la('hosting_s')}}</h4>
            <div class="breadcrumbs_items">


                <div class="breadcrumbs_item"><a href="{!! url('/') !!}" class="breadcrumbs_item-link is-home" rel="home" title="Home">{{la('home')}}</a></div>
                <div class="breadcrumbs_item"><div class="breadcrumbs_item-sep">/</div></div>
                <div class="breadcrumbs_item">
                    <span class="breadcrumbs_item-target">{{la('hosting_s')}}</span>
                </div>
            </div>



        </div>
    </div>
</section>
<div class="clear"></div>
<main>

@if('$services')
    @foreach($services as $service)
    <div id="services" class="post-201 ">
        <div class="container">
            <div class="row reset-gutter">
                <div class="col-md-6">
                    <div class="service-item-img">
                        <img  style="border-radius: 10px" class="img-responsive" src="{{asset('')}}{{$service->photo ? $service->photo->file : 'http://placehold.it/400x400'}}" alt="02 1">
                    </div>
                </div><div class="col-md-6">
                    <div class="service-item-content ">
                        <h2>
                            <span style="color: red">{{$service->main_title}}</span>Plan
                        </h2>
                        <div class="row">
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      {{$service->title1}}</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      {{$service->title2}}</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      {{$service->title3}}</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      {{$service->title4}}</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      {{$service->title5}}</p>
                            </div>
                            <div class="col-md-6 service-feature-item">
                                <p><i class="fa fa-check"></i>
                                      {{$service->title6}}</p>
                            </div>

                        </div>



                        <div class="price">
                            <p>
                                starting form
                                <span>
                                                      {{$service->price}}<em>
                                                            /month
                                                        </em>
                                                    </span>
                            </p>
                            <a href="{!! url('/reseller_plan') !!}" class="btn btn-lg btn-custom ">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endforeach
    @endif



    <div id="features" class="post-1850 ">
        <div class="container">
            <div class="section-title"><h2>WHY CHOOSE US</h2></div>
            <div class="row text-center">
            </div>
        </div>
    </div>
    <div class="clear"></div>


    <div id="vpsPricing" class="post-1795  bg--img" style="background-image: url({{asset('assets/img/slider-bg-1.jpg')}});">
        <div class="container">
            <div class="section-title"><h2>{{la('choose_vps')}}</h2></div>
            <div class="vps-slider-holder">
                <div class="vps-ruler" data-bg-src="{{asset('assets/img/ruler.png')}}"></div>
                <div id="vpsSlider"></div>
            </div>


            <!-- VPS Slider Item Start -->
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">DISK SPACE</span>
                <span class="vps-item-feature-value vps-item-cpu"></span>
            </div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">DOMAIN TRANS.</span>
                <span class="vps-item-feature-value vps-item-cpu"></span></div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">DOMIN NO.</span>
                <span class="vps-item-feature-value vps-item-cpu"></span></div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">BANDWIDTH</span>
                <span class="vps-item-feature-value vps-item-cpu"></span>
            </div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">EMAIL NO.</span>
                <span class="vps-item-feature-value vps-item-cpu"></span></div>
            <div class="col-sm-2 col-xs-6 vps-item-feature">
                <span class="vps-item-feature-name">ADS OFFERS</span>
                <span class="vps-item-feature-value vps-item-cpu">
            </span>
            </div>

            <!-- VPS Slider Price Tag Start -->
            <div class="vps-total-price"><span>$</span><em></em></div>
            <!-- VPS Slider Price Tag End -->
            <div class="action">

                <a href="{!! url('/reseller_plan') !!}" class="">{{la('r_u_reseller')}}</a>
                <a href="{!! url('/budget_plan') !!}" class="">{{la('view_details')}}</a>

            </div>
        </div>
    </div>


</main>

<script>


    $('#ajax-loader').hide();


    ;
</script>

<script>

    var nameInput = document.getElementById('DomainName');  //declare the element(input) in a variable
    var nameExtention = document.getElementById('tld'); //declare the element(select) in a variable

    document.querySelector('form.pure-form').addEventListener('submit', function (e) {
        valDomainName =nameInput.value  //declare the element(input) value  in a variable
        valDomainExtention =nameExtention.value  //declare the element(select) value  in a variable
        //prevent the normal submission of the form
        e.preventDefault();
        $('#ajax-loader').show();

//
//        alert(valDomainName)

        jQuery.ajax({
            url: '{{asset('')}}/domainAvailableRequest', // Change path depending on file location
            data: {
                domainRequest: valDomainName,
                domainExtention: valDomainExtention,
                type: 'get',
//                dataType: "json",
            },
        })
            .done(function(output1) {
                console.log (output1)
                LastTable = "<table class='table'>";
                LastTable += "<thead>";
                LastTable += "<tr>";
                LastTable += "<td>";
                LastTable += "radio"
                LastTable += "</td>";
                LastTable += "<td>";
                LastTable += "Extension"
                LastTable += "</td>";

                LastTable += "<td>";
                LastTable += "Availability"
                LastTable += "</td>";
                LastTable += "</tr>";
                LastTable += "</thead>";
                seletedOrNot=0;
                chechedStatemen="";
                for (i = 0; i < output1.length; i++) {

                    if(seletedOrNot== 0 && output1[i][1]== 'available'){
                        seletedOrNot=1;
                        chechedStatemen = "checked";
                    }
                    LastTable += "<tr>";
                    LastTable += "<td>";
                    LastTable += '<input type="radio" name="seletedRadio" value="'+output1[i][0]+'" '+chechedStatemen+'> ';
                    LastTable += "</td>";
                    LastTable += "<td>";
                    LastTable += output1[i][0];
                    LastTable += "</td>";

                    LastTable += "<td class='"+output1[i][1]+"'>";
                    LastTable +=output1[i][1];
                    LastTable += "</td>";

                    LastTable += "</tr>";
                    chechedStatemen='';
                }
                LastTable += "</table>";
                $("#tableResultDomainAvailability").html(LastTable);
                $('#ajax-loader').hide();
            });
//        $('#ajax-loader').hide();
    });
</script>

@include('includes.tmp_footer')