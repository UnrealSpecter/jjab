<template>

    <div data-emergence="hidden" data-animation="animated fadeInUp" class="shadow-md rounded-jjab flex flex-col justify-center items-center w-full bg-jjab-purple p-16 mb-16">
        <h2 class="text-6rem anton tracking-2px text-white mb-10">Juridische Kennis Opdoen?</h2>
        <!-- <p class="text-2rem roboto lowercase text-white mb-10">Kies uit een van de onderstaande onderwerpen</p> -->

        <div class="tag-wrapper w-full flex flex-row flex-wrap justify-center">
            <brand-button class="m-2" :href="tag" v-for="(tag, index) in tags" :key="`tag-${index}`">{{ tag }}</brand-button>
        </div>
    </div>

</template>

<script>
    export default {
        props: [ 'tags'],
    }
</script>
