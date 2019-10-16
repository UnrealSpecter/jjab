<template>

    <a  :href="`#${ href }`"
        class="button">
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
