<template>

    <a
        class="
        h-16 text-1rem transition-all-250ms whitespace-no-wrap cursor-pointer tracking-wide flex flex-row items-center justify-center  text-white shadow-md aller-display tracking-wide uppercase
        tablet-portrait:h-16
        desktop:text-1.25rem desktop:py-5 desktop:px-10"
        :class="{ 'bg-formi-yellow hover:bg-yellow-500': isYellow, 'bg-formi-blue hover:bg-blue-500': !isYellow }"
        v-bind:href="page">{{ text }}
    </a>

</template>

<script>
    export default {
        props: {
            text: {
                default: 'button-text',
                type: String
            },
            page: {
                default: null,
                type: String
            },
            isYellow: {
                default: false,
                type: Boolean
            }
        }
    }
</script>
