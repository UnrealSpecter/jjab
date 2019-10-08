<template>

    <button type="button"
            class="outline-none anton w-1/2 p-5 text-white rounded-jjab shadow-md bg-jjab-orange leading-none">
            <slot></slot>
    </button>

</template>

<script>
    export default {
        props: [
            'text'
        ]
    }
</script>
