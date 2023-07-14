@props(['banners'])

<section class="bannermain">
    <div class="bannermain-carousel">

        @foreach ($banners as $banner)
        <div>
            <a href="#" class="bannermain-link">
                <img src="{{ asset('uploads/banner/'.$banner->image) }}" class="bannermain-imagem" width="1920" height="500" alt="#">
            </a>
        </div>
        @endforeach
        {{-- <div>
            <a href="#" class="bannermain-link">
                <img src="{{ Vite::asset('resources/images/1920x500.png') }}" class="bannermain-imagem" width="1920" height="500" alt="#">
            </a>
        </div> --}}
    </div>
</section>
