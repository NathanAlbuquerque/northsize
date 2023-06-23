@props(['name', 'icon'])

<section class="gadget-button {{$name}}">
    <a {{$attributes}}>
        <i class="{{$icon}}"></i>
    </a>
</section>