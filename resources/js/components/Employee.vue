<template>

    <div class="w-4/5 tablet-landscape:w-3/4 laptop:w-full wrapper flex flex-col mb-16">

        <!-- NAME -->
        <h1 data-emergence="hidden" data-animation="animated fadeInUp" class="invisible text-2.5rem whitespace-no-wrap tablet-portrait:text-5rem laptop:text-6rem text-jjab-purple text-center anton">{{ employee.name }}</h1>

        <div data-emergence="hidden" data-animation="animated fadeInUp" class="invisible">

            <!-- EMPLOYEE -->
            <div class="w-full desktop:w-full flex laptop:flex-row flex-col justify-center items-center flex-no-wrap">
                <img class="w-1/2 laptop:w-1/3 object-fit" :src="`storage/${ employee.photo }`">
            </div>

            <!-- DESCRIPTION -->
            <div class="flex flex-col rounded-jjab shadow-md bg-jjab-orange text-white w-full px-3 py-5 tablet-portrait:px-5 tablet-portrait:py-7 desktop:px-10 desktop:py-16 justify-center items-center">
                <p class="text-center tablet-portrait:text-left capitalized px-4 laptop:px-12 flex-center text-1rem laptop:text-1.5rem desktop:text-2rem tablet-portrait:text-1.5rem roboto">{{ employee.description }}</p>
            </div>

        </div>

    </div>

</template>

<script>
    export default {
        props: ['employee']
    }
</script>
