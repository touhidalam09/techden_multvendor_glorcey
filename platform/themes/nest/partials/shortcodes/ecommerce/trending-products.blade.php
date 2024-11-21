@if ((int) $shortcode->limit)
    @php
        $products = get_trending_products([
            'take'      => (int) $shortcode->limit,
            'with'      => ['slugable'],
        ] + EcommerceHelper::withReviewsParams());
    @endphp
    @if ($products->isNotEmpty())
        <section class="bg-grey-1 section-padding pt-60 pb-80">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <div class="title">
                        <h3>{!! BaseHelper::clean($shortcode->title) !!}</h3>
                    </div>
                </div>

                @include(Theme::getThemeNamespace() . '::views.ecommerce.includes.product-items-loop', ['products' => $products, 'perRow' => (int)$shortcode->per_row > 0 ? (int)$shortcode->per_row : 4])
            </div>
        </section>
    @endif
@endif
