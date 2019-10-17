<template>

    <div data-emergence="hidden" data-animation="animated fadeInUp" class="box bg-jjab-purple">
        <h2 class="box-title anton">Juridische Kennis Opdoen?</h2>
        <!-- <p class="text-2rem roboto lowercase text-white mb-10">Kies uit een van de onderstaande onderwerpen</p> -->

        <div class="tag-wrapper w-full flex flex-row flex-wrap justify-center">
            <brand-button class="button orange anton w-full mb-3 tablet-landscape:mx-5 tablet-landscape:mb-5" :href="tag" v-for="(tag, index) in tags" :key="`tag-${index}`">{{ tag }}</brand-button>
        </div>
    </div>

</template>

<script>
    export default {
        props: [ 'tags'],
    }
</script>
