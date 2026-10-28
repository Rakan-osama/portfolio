<section class="bg-white pb-16 pt-10 md:pb-24 md:pt-14">
    <div class="mx-auto max-w-[1320px] px-4 md:px-10">
        <div class="reveal reveal-scale work-panel overflow-hidden rounded-[1.6rem] p-3 md:rounded-[2rem] md:p-5" data-delay="0">
            <div class="grid auto-rows-[6rem] grid-cols-2 gap-3 md:auto-rows-[8.5rem] md:grid-cols-4 md:gap-4">
                @foreach ($portfolio['projects'] as $index => $project)
                    <div @class([
                        'reveal reveal-up work-tile',
                        'col-span-2 row-span-3 md:row-span-4' => $index === 0,
                        'col-span-1 row-span-2' => $index !== 0,
                    ]) data-delay="{{ 120 + $index * 90 }}">
                        @include('portfolio.partials.project-thumb', ['project' => $project, 'variant' => $index])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
