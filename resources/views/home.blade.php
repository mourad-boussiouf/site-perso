<x-app-layout>
    <x-hero></x-hero>
    <x-call-to-action>
        <x-slot:title>
            <span class="text-white text-base font-semibold mb-2">
                Check my PHP Developer Roadmap
            </span>
            <h2
                class=" text-white font-bold text-3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-0 "
            >
                Start Learning <br class="hidden xs:block"/>
                PHP For FREE
            </h2>
            </x-slot>
            <a
                href="javascript:void(0)"
                class=" inline-block py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded text-base font-medium bg-white bg-opacity-[15%] text-white hover:bg-opacity-100 hover:text-primary mr-4 my-1 transition "
            >

                View on Github
            </a>
            <a
                href="javascript:void(0)"
                class=" inline-block py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded text-base font-medium bg-[#13C296] transition hover:bg-opacity-90 text-white my-1 "
            >
                Watch on YouTube
            </a>
    </x-call-to-action>
    <x-quisuisje-section></x-quisuisje-section>
    <x-portfolio-section></x-portfolio-section>
    <x-video-tutorials></x-video-tutorials>
    <x-testimonials></x-testimonials>
    <x-section.contact></x-section.contact>
    <x-footer></x-footer>
</x-app-layout>
