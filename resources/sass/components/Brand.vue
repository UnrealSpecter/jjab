<template>

    <li class="
        bg-white w-full h-20 aller-display text-formi-yellow antialiased subpixel-antialiased flex flex-row justify-center items-center
        tablet-portrait:h-24 tablet-portrait:text-2.5rem
        tablet-landscape:h-full tablet-landscape:w-auto tablet-landscape:px-5
        ">
        <a class="h-full leading-none bg-white tablet-landscape:bg-transparent w-full flex flex-col justify-center items-center" href="#">
            <img class="object-contain h-full" src="assets/formiprotect-logo.png">
            <h1 class="leading-none w-full text-2rem tablet-landscape:text-white tablet-portrait:text-2.5rem tablet-landscape:text-1.5rem text-center tablet-landscape:hidden">Menu</h1>
            <h1 class="leading-none w-full text-2rem tablet-landscape:text-white tablet-portrait:text-2.5rem tablet-landscape:text-1.5rem hidden tablet-landscape:hidden">Formiprotect</h1>
        </a>
    </li>

</template>

<script>
    export default {
        props: ['name', 'logo'],
        data() {
            return {
                logo: '',
                brand: ''
            }
        },
    }
</script>
