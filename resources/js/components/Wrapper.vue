<template>

    <div :id="`${ id }`" class="wrapper bg-white flex-center relative min-h-screen" style="padding-top: 100px;">

        <div class="w-4/5 rounded-lg flex-center absolute top-0 h-200px bg-jjab-purple text-white text-5rem anton" style="top: -100px; margin-bottom: 100px;">
            {{ title }}
        </div>

        <slot></slot>
    </div>

</template>

<script>
    export default {
        props: ['id', 'title']
    }
</script>
