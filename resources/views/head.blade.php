<link rel="manifest" href="{{ $manifestUrl }}">
<meta name="theme-color" content="{{ $themeColor }}">
@foreach ($appleLinks as $link)
    <link rel="{{ $link['rel'] }}"@if (! empty($link['sizes'])) sizes="{{ $link['sizes'] }}"@endif @if (! empty($link['media'])) media="{{ $link['media'] }}"@endif href="{{ $link['href'] }}">
@endforeach
