<template>

    <div data-emergence="hidden" data-animation="animated fadeInUp" class="w-full wrapper flex flex-col mb-16">

        <div class="w-full h-600px flex flex-row flex-no-wrap">
            <div class="flex flex-col justify-center items-start w-full h-full">
                <h2 class="px-12 text-4rem mb-5 text-jjab-orange anton">{{ employee.title }}</h2>
                <p class="px-12 flex-center text-2rem roboto lowercase text-jjab-orange">{{ employee.description }}</p>
            </div>
            <img class="w-auto h-full object-fit" :src="`storage/${ employee.photo }`">
        </div>

        <div class="flex flex-col rounded-jjab shadow-md bg-jjab-purple w-full px-10 py-16 justify-center items-center">
            <h1 class="text-6rem text-white anton">{{ employee.name }}</h1>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['employee']
    }
</script>
