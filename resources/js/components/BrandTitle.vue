<template>

    <h1 :id="`${ id }`" data-emergence="hidden" data-animation="animated fadeInUp" class="anton brand-title">
        <slot></slot>
    </h1>

</template>

<script>
    export default {
        props: ['id']
    }
</script>
