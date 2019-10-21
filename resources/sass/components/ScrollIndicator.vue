<template>
    <div data-animation="fadeInUp" data-delay="500" class="w-full justify-between h-20 text-formi-blue source-sans-pro text-1.25rem flex flex-row justify-center items-center scroll-indicator-wrapper">
        <a class="flex flex-row items-center justify-center h-full py-5 px-10 bg-formi-blue text-white shadow-md aller-display tracking-wide uppercase" :href="`${ page }`">{{ message }}</a>
        <a class="flex flex-row items-center justify-center h-full py-5 px-10 bg-formi-yellow text-white shadow-md aller-display tracking-wide uppercase" href="#buy-now">Buy Now</a>
    </div>
</template>

<script>
    export default {
        props: [ 'message', 'page']
    }
</script>
