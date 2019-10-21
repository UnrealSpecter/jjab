<template>

    <div :id="`${ id }`" class="wrapper py-10 tablet-portrait:py-20 bg-white relative w-screen flex flex-col justify-center items-center">
        <slot></slot>
    </div>

</template>

<script>
    export default {
        props: ['id']
    }
</script>
