<template>

    <section class="
        w-full h-full flex flex-col justify-center items-center p-0
        tablet-portrait:w-1/2 tablet-portrait:h-400px tablet-portrait:px-5
        tablet-landscape:h-400px
        laptop:min-h-500px
        desktop:h-600px desktop:min-h-600px">
        <slot></slot>
    </section>

</template>

<script>
    export default {
        props: [ 'title', 'body']
    }
</script>
