<template>

    <nav class="shadow-md z-50 animated fadeIn w-full h-20 flex flex-row fixed top-0 left-0">
        <a href="#" class="antialiased subpixel-antialiased text-2rem aller-display px-10 h-full flex flex-row justify-center items-center text-white">FormiPROTECT</a>
        <ul class="flex-grow text-white text-xl source-sans-regular flex flex-row px-5">
            <slot></slot>
        </ul>
        <a href="#nu-kopen" class="antialiased subpixel-antialiased text-2rem aller-display px-10 h-full flex flex-row justify-center items-center text-white">BUY NOW</a>
    </nav>

</template>

<script>
    export default {
    }
</script>
