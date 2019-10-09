<template>

    <form action="" method="post" class="flex flex-col justify-center items-end">

        <!-- CSRF TOKEN -->
        <input type="hidden" name="_token" :value="csrf">

        <!-- FIELDS -->
        <input type="email" class="placeholder-jjab-purple outline-none w-full mb-10 tracking-5px shadow-md p-10 text-2.5rem text-jjab-purple leading-none bg-white anton rounded-jjab overflow-hidden" placeholder="email">
        <textarea class="placeholder-jjab-purple outline-none w-full mb-10 tracking-5px shadow-md p-10 text-2.5rem text-jjab-purple bg-white leading-none anton rounded-jjab overflow-hidden" placeholder="stel je vraag!"></textarea>
        <input class="placeholder-jjab-purple outline-none w-1/4 cursor-pointer mb-10 tracking-5px shadow-md p-10 text-4rem tracking-wide leading-none text-white bg-jjab-purple anton rounded-jjab overflow-hidden" type="submit" value="help!">

    </form>

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
