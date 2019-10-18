<template>

    <div data-emergence="hidden" data-animation="animated fadeInUp" class="w-4/5 tablet-landscape:w-3/4 laptop:w-full wrapper flex flex-col mb-16">

        <div class="w-full flex laptop:flex-row flex-col justify-center items-center flex-no-wrap">
            <div class="flex flex-col justify-center items-start w-full h-full">
                <h2 class="text-center laptop:text-left w-full px-4 laptop:px-12 text-2.5rem laptop:text-4rem tablet-portrait:text-5rem mb-5 text-jjab-purple anton">{{ employee.title }}</h2>
                <p class="text-center tablet-portrait:text-left capitalized px-4 laptop:px-12 flex-center text-1rem laptop:text-1.5rem desktop:text-2rem tablet-portrait:text-1.5rem roboto text-jjab-purple">{{ employee.description }}</p>
            </div>
            <img class="w-auto w-full tablet-portrait:w-1/2 tablet-landscape:w-1/3 object-fit" :src="`storage/${ employee.photo }`">
        </div>

        <div class="flex flex-col rounded-jjab shadow-md bg-jjab-orange w-full px-10 py-16 justify-center items-center">
            <h1 class="text-2.5rem whitespace-no-wrap tablet-portrait:text-5rem laptop:text-6rem text-white anton">{{ employee.name }}</h1>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['employee']
    }
</script>
