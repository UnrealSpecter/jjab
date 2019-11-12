<template>

    <div class="w-4/5 tablet-landscape:w-3/4 laptop:w-full">

        <div data-emergence="hidden" data-animation="animated fadeInUp" class="invisible rounded-jjab w-full my-16 bg-jjab-orange text-white laptop:w-full p-10 flex flex-col justify-center items-center roboto text-1.25rem tablet-portrait:text-1.5rem tablet-landscape:text-1.75rem text-left desktop:text-2.5rem text-center tracking-loose">
            <h2 class="anton">{{ subtitle }}</h2>
            <p class="explanation-description roboto">{{ description }}</p>
        </div>

    </div>


</template>

<script>
    export default {

        props: ['subtitle', 'description']

    }
</script>
