@php
    $base = $project['image'] ?? null;
    $image = null;

    if ($base) {
        $stem = preg_replace('/\.(webp|png|jpe?g)$/i', '', $base);

        foreach (['webp', 'png', 'jpg', 'jpeg'] as $extension) {
            if (file_exists(public_path("{$stem}.{$extension}"))) {
                $image = "{$stem}.{$extension}";
                break;
            }
        }
    }

    $variant = ($variant ?? 0) % 5;
@endphp

@if ($image)
    <img
        src="{{ asset($image) }}"
        alt="{{ $project['name'] }} interface preview"
        loading="lazy"
        class="h-full w-full object-cover object-top"
    >
@else
    <div class="mock" aria-hidden="true">
        <div class="mock-bar">
            <span class="mock-dot"></span>
            <span class="mock-dot"></span>
            <span class="mock-dot"></span>
            <div class="mock-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="mock-body">
            @if (in_array($variant, [0, 2, 4], true))
                <div class="mock-side">
                    @foreach ([72, 90, 58, 80, 46, 66, 54] as $width)
                        <span style="width: {{ $width }}%"></span>
                    @endforeach
                </div>
            @endif

            <div class="mock-main">
                <div class="mock-hero mock-hero-v{{ $variant }}">
                    <span style="width: {{ [62, 80, 48, 70, 58][$variant] }}%"></span>
                    <span class="mt-1.5" style="width: {{ [38, 52, 30, 44, 34][$variant] }}%"></span>
                </div>

                @switch($variant)
                    @case(0)
                        <div class="mock-cards">
                            @foreach ([70, 52, 64] as $width)
                                <div class="mock-card">
                                    <span style="width: {{ $width }}%"></span>
                                    <span class="mt-1.5" style="width: 42%"></span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mock-chart">
                            @foreach ([42, 68, 50, 86, 58, 74, 38, 80] as $height)
                                <i style="height: {{ $height }}%"></i>
                            @endforeach
                        </div>

                        <div class="mock-rows">
                            @foreach ([64, 82, 56] as $width)
                                <div class="mock-row">
                                    <b></b>
                                    <span style="width: {{ $width }}%"></span>
                                </div>
                            @endforeach
                        </div>
                        @break

                    @case(1)
                        <div class="mock-cards">
                            @foreach ([58, 72] as $width)
                                <div class="mock-card">
                                    <span style="width: {{ $width }}%"></span>
                                    <span class="mt-1.5" style="width: 36%"></span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mock-rows">
                            @foreach ([76, 62, 84, 50, 70] as $width)
                                <div class="mock-row">
                                    <b></b>
                                    <span style="width: {{ $width }}%"></span>
                                    <span style="width: 18%; margin-left: auto"></span>
                                </div>
                            @endforeach
                        </div>
                        @break

                    @case(2)
                        <div class="mock-rows">
                            @foreach ([68, 82, 54, 76, 62, 88] as $width)
                                <div class="mock-row">
                                    <b></b>
                                    <span style="width: {{ $width }}%"></span>
                                </div>
                            @endforeach
                        </div>
                        @break

                    @case(3)
                        <div class="mock-cards">
                            @foreach ([70, 52, 64, 58, 66, 48] as $width)
                                <div class="mock-card">
                                    <span style="width: {{ $width }}%"></span>
                                    <span class="mt-1.5" style="width: 40%"></span>
                                </div>
                            @endforeach
                        </div>
                        @break

                    @case(4)
                        <div class="mock-chart">
                            @foreach ([30, 55, 44, 72, 60, 90, 48, 66, 38] as $height)
                                <i style="height: {{ $height }}%"></i>
                            @endforeach
                        </div>

                        <div class="mock-cards">
                            @foreach ([66, 54] as $width)
                                <div class="mock-card">
                                    <span style="width: {{ $width }}%"></span>
                                    <span class="mt-1.5" style="width: 38%"></span>
                                </div>
                            @endforeach
                        </div>
                        @break
                @endswitch
            </div>
        </div>
    </div>
@endif
