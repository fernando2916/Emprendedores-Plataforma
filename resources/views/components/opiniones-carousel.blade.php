@props(['opiniones']) {{-- Recibe la colección de opiniones --}}

<div class="swiper mySwiper relative">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @forelse ($opiniones as $opinion )

        <div class="swiper-slide mt-5 flex flex-col justify-center">
            <p class="flex p-5 gap-2 items-center justify-center md:text-3xl font-semibold">
                <i class="fa-solid fa-quote-left text-5xl font-bold text-link-100"></i>
                {{ $opinion->opinion}}
                <i class="fa-solid fa-quote-right text-5xl font-bold text-link-100"></i>
            </p>
            <p class="text-xl">{{ $opinion->autor }}</p>
            <p class="text-link-300">{{ $opinion->red_social }}</p>
        </div>
        @empty
        <div class="">
            <p class="">No hay Opiniones todavía.</p>
        </div>
        @endforelse

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination absolute -bottom-8 w-full text-center z-10"></div>
</div>
