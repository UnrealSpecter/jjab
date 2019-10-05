<!--

        TRANSITION COMPONENT.
        POSITIONED IN BETWEEN PAGES AND FASCILITATES SCROLLING FROM ONE SECTION TO THE OTHER.
        MAX CHARACTERS 15 CHARACTERS.

-->

<template>

    <div class="absolute bottom-0 bg-jjab-purple text-white text-4rem p-10 text-no-wrap">
        <slot></slot>
    </div>

</template>

<script>
    export default {
        props: [
        ]
    }
</script>
