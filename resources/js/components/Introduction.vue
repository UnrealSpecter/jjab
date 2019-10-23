<template>

    <div class="w-4/5 tablet-landscape:w-3/4 laptop:w-full">

        <div data-emergence="hidden" data-animation="animated fadeInUp" class="invisible rounded-jjab w-full mt-16 bg-jjab-orange text-white w-4/5 tablet-landscape:w-3/4 laptop:w-full p-10 flex-center roboto text-1.25rem tablet-portrait:text-1.5rem tablet-landscape:text-1.75rem text-left desktop:text-2.5rem text-center tracking-loose">
            <h1 class="box-title anton">{{ subtitle }}</h1>
        </div>

        <div data-emergence="hidden" data-animation="animated fadeInUp" class="invisible rounded-jjab my-16 w-full bg-jjab-orange text-white p-10 flex-center roboto text-1.25rem tablet-portrait:text-1.5rem tablet-landscape:text-1.75rem text-left desktop:text-2.5rem text-center tracking-loose">
            <p class="explanation-description roboto">{{ description }}</p>
        </div>

    </div>


</template>

<script>
    export default {

        props: ['subtitle', 'description']

    }
</script>
