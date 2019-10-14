<template>

    <h1 :id="`${ id }`" data-emergence="hidden" data-animation="animated fadeInUp" class="anton text-center w-full text-jjab-purple text-10rem my-16 leading-none">
        <slot></slot>
    </h1>

</template>

<script>
    export default {
        props: ['id']
    }
</script>
