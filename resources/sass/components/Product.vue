<template>

    <section data-emergence="hidden" class="mt-10 tablet-landscape:mt-20 relative mr-5 h-full flex flex-col items-end justify-center p-5 min-h-400px">

        <!-- PRODUCT IMAGE -->
        <div data-emergence="hidden" data-animation="fadeIn" class="relative tablet-landscape:flex z-40 pointer-events-none invisible w-full tablet-landscape:w-2/5 h-full tablet-landscape:absolute top-0 left-0 tablet-landscape:py-10 flex justify-center items-center">
            <img class="w-1/2 tablet-portrait:w-1/3 tablet-landscape:w-4/5 h-auto" src="/assets/paint-bucket.png">
        </div>

        <!-- VISUAL BACKGROUND -->
        <div class="w-full tablet-landscape:w-4/5 bg-white shadow-md absolute h-full right-0 top-0"></div>

        <!-- INFORMATION -->
        <div class="information-wrapper w-full tablet-landscape:w-3/5 relative right-0 h-full top-0 tablet-landscape:p-10 mt-5 flex flex-col items-center justify-between tablet-landscape:justify-center" style="border-color: #2a65af;">

            <!-- TITEL AND DESCRIPTION -->
            <div class="flex-center flex-wrap">
                <h2 class="whitespace-no-wrap w-full aller-display text-formi-blue text-center text-2rem tablet-landscape:text-2.5rem uppercase font-bold tracking-5px mb-2">{{ title }}</h2>
                <p class="w-full source-sans text-formi-blue text-center text-1.25rem mb-2 leading-none">{{ description }}</p>
            </div>

            <div class="flex-center flex-wrap mt-5">
                <h1 class="border-2 border-formi-yellow p-5 w-full aller-display text-formi-yellow text-center text-3rem whitespace-no-wrap tracking-2px">{{ cost }} {{ currency }}</h1>
                <slot></slot>
            </div>

        </div>

    </section>

</template>

<script>
    export default {
        props: [ 'description', 'cost', 'currency', 'title']
    }
</script>
