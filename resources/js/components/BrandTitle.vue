<template>

    <h2 :id="`${ id }`" data-emergence="hidden" data-animation="animated fadeInUp" class="invisible anton brand-title">
        <slot></slot>
    </h2>

</template>

<script>
    export default {
        props: ['id']
    }
</script>
