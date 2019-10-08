<template>

    <div class="shadow-md rounded-jjab flex flex-col justify-center items-center w-full bg-jjab-purple p-16 mb-16">
        <h2 class="text-6rem anton tracking-2px text-white mb-10">Juridische Kennis Opdoen?</h2>
        
        <div class="tag-wrapper w-full flex-center text-2rem">
            <brand-button v-for="(tag, index) in tags" :key="`tag-${index}`">{{ tag }}</brand-button>
        </div>
    </div>

</template>

<script>
    export default {
        props: [ 'tags'],
        data: function(){
            return {

            }
        }
    }
</script>
