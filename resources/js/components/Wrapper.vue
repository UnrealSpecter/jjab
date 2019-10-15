<template>

    <div :id="`${ id }`" class="wrapper bg-white relative">
        <slot></slot>
    </div>

</template>

<script>
    export default {
        props: ['id', 'title']
    }
</script>
