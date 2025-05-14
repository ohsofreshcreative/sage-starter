<div class="hero-block" style="background-color: {{ $background_color }}; padding: 40px 20px; text-align: center;">
  @if($title)
    <h2 style="color: #333;">{{ $title }}</h2>
  @endif
  @if($subtitle)
    <p style="color: #555;">{{ $subtitle }}</p>
  @endif

  {{-- Możesz dodać podgląd dla edytora Gutenberga --}}
  @if($is_preview)
    <p><em><small>Hero Block Preview (Content entered will display here)</small></em></p>
  @endif
</div>

{{-- 
  $is_preview jest automatycznie dostępne w widoku, gdy blok jest renderowany w edytorze.
  Zmienne $title, $subtitle, $background_color pochodzą z metody with() w klasie bloku.
--}}