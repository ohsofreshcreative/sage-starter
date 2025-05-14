<section class="example-block">
    @if ($image)
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] ?? '' }}" class="mb-4">
    @endif

    <h2 class="text-2xl font-bold">{{ $title }}</h2>

    <div class="mt-2 prose">
        {!! $content !!}
    </div>
</section>
