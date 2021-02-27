<!-- PRODUCT SHOWCASE -->
<div class="product-showcase-wrap">
    <section class="product-showcase">
        <h3 class="title">Our Featured Products</h3>
        <!-- SLIDE CONTROLS -->
        <ul class="slide-controls">
            <!-- LEFT CONTROL -->
            <li>
                <a href="#" class="button prev">
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </a>
            </li>
            <!-- /LEFT CONTROL -->

            <!-- RIGHT CONTROL -->
            <li>
                <a href="#" class="button next">
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </a>
            </li>
            <!-- /RIGHT CONTROL -->
        </ul>
        <!-- /SLIDE CONTROLS -->

        <!-- COMPARE MODAL -->
        @include('frontend.widgets.compareProduct')
        <!-- /COMPARE MODAL -->

        <!-- PRODUCT LIST -->
        <ul id="owl-f-products" class="product-list grid owl-carousel" >
            @foreach($ds_sanpham as $ds_sanpham)

            <!-- PRODUCT -->
            <li class="list-item" style="height:570px">
                <!-- ACTIONS -->
                @include('frontend.widgets.quickFeatureProduct', ['ds_sanpham' => $ds_sanpham])
                <!-- /ACTIONS -->
                
                <!-- DESCRIPTION -->
                @include('frontend.widgets.descriptionFeature', ['ds_sanpham' => $ds_sanpham])
                <!-- /DESCRIPTION -->
            </li>
            <!-- /PRODUCT -->
            @endforeach

        </ul>
        <!-- /PRODUCT LIST -->

    </section>
</div>
