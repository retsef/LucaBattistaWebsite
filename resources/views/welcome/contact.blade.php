<section class="contact-us" id="section9">
    <div class="container" id="contact_container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="heading">Contattaci</h3>
            </div>
        </div>

        @foreach ($contacts as $contact)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if ($contact['type'] == "email" )
                        <a href="mailto: {{ $contact['contact'] }}" class="contact-link">
                            <span class="icon_mail_alt"></span>Mail</a>
                    @else
                        <a href="#section9" class="contact-link"><span class="glyphicon glyphicon-earphone">
                            </span>{{ $contact['contact'] }}</a>
                    @endif
                </div>
            </div>
        @endforeach

    </div>

</section>