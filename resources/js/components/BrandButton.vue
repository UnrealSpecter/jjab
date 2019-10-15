<template>

    <a  :href="`#${ href }`"
        class="text-1.5rem tablet-landscape:text-2rem hover:bg-jjab-orange-hover transition-all-250ms hover:shadow-xl w-full tablet-landscape:w-300px outline-none anton p-5 text-white text-center rounded-jjab shadow-md bg-jjab-orange leading-none">
            <slot></slot>
    </a>

</template>

<script>
    export default {
        props: [
            'text', 'href'
        ]
    }
</script>
