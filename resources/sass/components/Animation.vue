<template>

    <div
        :id="`${ id }`"
        data-has-animated="false"
        class="animation lottie w-full px-8 py-8 laptop:px-16 laptop:px-10">
    </div>

</template>

<script>
    export default {
        props: [ 'id' ]
    }
</script>
