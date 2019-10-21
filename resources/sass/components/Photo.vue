<template>

    <img
        :src="`${ src }`"
        :alt="`${ alt }`"
        class="h-300px w-full tablet-portrait:h-full object-cover"
        >

</template>

<script>
    export default {
        props: [ 'src', 'alt' ]
    }
</script>
