<template>

    <div class="w-full rounded-lg bg-jjab-blue p-16 text-white text-2.5rem w-1/3 mb-10 flex flex-col justify-center items-center">
        <h1 class="text-white anton text-4rem mb-5 text-center">{{ title }}</h1>
        <p class="w-2/3 leading-tight text-white roboto text-2rem text-center ">{{ description }}</p>
    </div>

</template>

<script>
    export default {
        props: [
            'title', 'description'
        ]
    }
</script>
