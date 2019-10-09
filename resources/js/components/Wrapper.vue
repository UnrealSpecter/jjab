<template>

    <div :id="`${ id }`" class="wrapper bg-white flex-center relative">
        <slot></slot>
    </div>

</template>

<script>
    export default {
        props: ['id', 'title']
    }
</script>
