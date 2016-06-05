<section class="cta-section" id="section8">
    <div class="color-overlay">

        <div class="container">

            <h4>Acquista Online</h4>
            <div id="cta-4">

                @foreach ($shops as $shop)
                    <a href="{{ $shop['url'] }}" class="btn standard-button">
                        <span class="glyphicon {{ $shop['icon'] }}" aria-hidden="true"></span>
                        {{ $shop['name'] }}
                    </a>
                @endforeach

            </div>

        </div>  <!-- /END CONTAINER -->
    </div>  <!-- /END COLOR OVERLAY -->

</section>
