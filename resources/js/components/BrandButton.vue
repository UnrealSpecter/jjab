<template>

    <a  :href="`#${ href }`"
        class="outline-none anton w-1/2 p-5 text-white text-center rounded-jjab shadow-md bg-jjab-orange leading-none">
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
