<section class="teamrange">
    <div class="container">
        <div class="teamrange-carousel">

            @for ($i = 0; $i < 30; $i++)
            <div>
                <a href="#">
                    <img src="{{ Vite::asset('resources/images/palmeiras.svg') }}" class="teamrange-image" width="55" height="55" alt="#">
                </a>
            </div>
            @endfor

        </div>
    </div>
</section>
