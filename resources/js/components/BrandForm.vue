<template>

    <div>

        <!-- STEL JE VRAAG -->
        <brand-title id="mail">Stel je vraag!</brand-title>

        <!-- MAIL TEXT -->
        <div class="wrapper w-full text-center my-10 text-6rem text-jjab-purple tracking-10px anton">
            Waar kunnen we je bij helpen?
        </div>

        <form action="" method="post" class="flex flex-col justify-center items-end">

            <!-- CSRF TOKEN -->
            <input type="hidden" name="_token" :value="csrf">

            <!-- FIELDS -->
            <input type="email" class="placeholder-jjab-purple-placeholder outline-none w-full mb-10 tracking-5px shadow-md p-10 text-2.5rem text-jjab-purple leading-none bg-white anton rounded-jjab overflow-hidden" placeholder="email">
            <textarea class="placeholder-jjab-purple-placeholder outline-none w-full mb-10 tracking-5px shadow-md p-10 text-2.5rem text-jjab-purple bg-white leading-none anton rounded-jjab overflow-hidden" placeholder="stel je vraag!"></textarea>
            <input class="transition-all-250ms hover:bg-jjab-purple-hover hover:shadow-xl placeholder-jjab-purple outline-none w-1/4 cursor-pointer mb-10 tracking-5px shadow-md p-10 text-4rem tracking-wide leading-none text-white bg-jjab-purple anton rounded-jjab overflow-hidden" type="submit" value="help!">

        </form>

    </div>

</template>

<script>
    export default {
        data: function(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        }
    }
</script>
