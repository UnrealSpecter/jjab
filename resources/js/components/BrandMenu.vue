<template>

    <header data-emergence="hidden" data-animation="animated fadeInDown" class="px-10 shadow-md absolute top-0 mt-10 text-white anton w-full rounded-full flex flex-row justify-between bg-jjab-purple">

        <!-- mobile -->
        <div class="flex flex-row justify-between px-5 hidden">
            <a href="#" class="tracking-2px h-20 flex-center text-3rem px-10">JJAB</a>
            <button type="button" class="tracking-2px h-20 flex-center text-3rem px-10">x</button>
        </div>

        <!-- mobile content -->
        <div class="mobile flex flex-col hidden">
            <a href="#" class="tracking-2px h-20 flex-center text-3rem px-10">JJAB</a>
        </div>

        <!-- non-mobile -->
        <div class="flex flex-row justify-between flex-grow leading-none py-2">
            <a href="#" class="tracking-2px h-20 flex-center text-3rem px-10">JJAB</a>
            <a href="#kennisbank" class="tracking-2px h-20 flex-center text-2rem ">Kennisbank</a>
            <a href="#wie-zijn-wij" class="tracking-2px h-20 flex-center text-2rem ">Wie zijn wij?</a>
            <a href="#contact" class="transition-all-250ms hover:bg-jjab-orange-hover tracking-2px h-20 flex-center text-2rem bg-jjab-orange rounded-full px-10 shadow-md">ik heb een vraag</a>
            <a href="#contact" class="transition-all-250ms hover:bg-jjab-orange-hover tracking-2px h-20 flex-center text-2rem bg-jjab-orange rounded-full px-10 shadow-md">contact</a>
        </div>

    </header>

</template>

<script>
    export default {
        data: function(){
            return {

            }
        }
    }
</script>
