<template>

    <div class="w-full wrapper flex flex-col mb-10">

        <div class="w-full h-600px flex flex-row flex-no-wrap">
            <p class="p-24 w-full h-full flex-center text-2rem roboto text-jjab-purple">{{ employee.description }}</p>
            <img class="w-auto h-full object-fit" :src="`storage/${ employee.photo }`">
        </div>

        <div class="flex flex-col rounded-jjab shadow-md bg-jjab-purple w-full p-10 justify-center items-center">
            <h1 class="text-6rem text-white anton">{{ employee.name }}</h1>
            <h2 class="roboto text-3rem text-white">{{ employee.title }}</h2>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['employee']
    }
</script>
