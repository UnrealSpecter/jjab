<template>

    <div class="w-full flex flex-col justify-center items-center">

        <h1 v-if="title" class="
            w-full dinpro-black uppercase leading-none tracking-2px text-formi-yellow text-left text-1.5rem
            tablet-portrait:text-left
            desktop:text-3rem text-left">
            {{ title }}
        </h1>

        <p v-if="body" class="
            w-full source-sans text-formi-blue mt-2 tablet-portrait:mt-5 mb-3 text-1rem
            desktop:text-1.5rem text-left">
            {{ body }}
        </p>

        <slot></slot>

    </div>

</template>

<script>
    export default {
        props: [ 'title', 'body' ]
    }
</script>
