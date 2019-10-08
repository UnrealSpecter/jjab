<template>

    <div class="w-full rounded-jjab shadow-md bg-jjab-blue p-16 text-white text-2.5rem w-1/2 mb-16 flex flex-col justify-center items-center">
        <h1 class="text-white anton text-6rem mb-5 text-center">{{ title }}</h1>
        <p class="w-full lower-case leading-normal text-white roboto text-2rem text-left ">{{ description }}</p>
    </div>

</template>

<script>
    export default {
        props: [
            'title', 'description'
        ]
    }
</script>
