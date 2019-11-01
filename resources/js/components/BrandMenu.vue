<template>

    <header id="nav" class="invisible mx-2 px-4 desktop:px-10 shadow-md absolute top-0 mt-10 text-white anton w-4/5 laptop:w-full rounded-full flex flex-row justify-between bg-jjab-purple z-50">

        <!-- mobile -->
        <div class="tablet-portrait:hidden w-full flex flex-row flex-grow justify-between px-1 py-3 h-20">

            <a href="#mail" class="w-9/12 whitespace-no-wrap mx-3 transition-all-250ms hover:bg-jjab-orange-hover tracking-2px flex-center px-3 text-0.75rem bg-jjab-orange rounded-full px-5 shadow-md">ik heb een vraag!</a>

            <!-- MENU BUTTON -->
            <div id="menu-button" class="flex flex-col justify-center items-center py-2 w-3/12">
                <span class="w-full h-3 mb-2 bg-jjab-orange rounded-jjab"></span>
                <span class="w-full h-3 mb-2 bg-jjab-orange rounded-jjab"></span>
                <span class="w-full h-3 bg-jjab-orange rounded-jjab"></span>
            </div>

        </div>

        <!-- non-mobile -->
        <div id="menu-wrapper" class="invisible pointer-events-none tablet-portrait:visible tablet-portrait:pointer-events-auto fixed tablet-portrait:relative tablet-portrait:visible bg-jjab-purple tablet-portrait:bg-transparent px-10 tablet-portrait:px-2 top-0 left-0 h-screen w-screen tablet-portrait:h-auto tablet-portrait:w-full tablet-portrait:flex flex-row justify-between flex-grow leading-none tablet-portrait:py-3 laptop:py-2">
            <span id="close-button" class="absolute h-24 top-0 right-0 flex-center text-3rem tablet-portrait:hidden mr-5">x</span>
            <a href="#" class="whitespace-no-wrap tracking-2px h-24 tablet-portrait:h-20 flex-center text-3rem tablet-portrait:text-1.25rem tablet-landscape:text-1.75rem laptop:text-2.5rem px-3 tablet-landscape:px-10">JJAB</a>
            <a href="#kennisbank" class="whitespace-no-wrap tracking-2px h-16 tablet-portrait:h-20 flex-center tablet-portrait:text-1rem text-1.75rem tablet-landscape:text-1rem laptop:text-1.75rem  ">Kennisbank</a>
            <a href="#wie-zijn-wij" class="whitespace-no-wrap tracking-2px h-16 tablet-portrait:h-20 flex-center text-1.75rem tablet-portrait:text-1rem tablet-landscape:text-1rem laptop:text-1.75rem  ">Wie zijn wij?</a>
            <a href="#mail" class="whitespace-no-wrap hover:bg-jjab-orange-hover tracking-2px h-16 tablet-portrait:h-20 flex-center text-1.75rem tablet-portrait:text-1rem tablet-landscape:text-1rem laptop:text-1.75rem  bg-jjab-orange rounded-full px-5 tablet-landscape:px-10 shadow-md">ik heb een vraag!</a>
            <a href="#app-ons" class="whitespace-no-wrap tracking-2px h-16 tablet-portrait:h-20 flex-center text-1.75rem tablet-portrait:text-1rem tablet-landscape:text-1rem laptop:text-1.75rem ">contact</a>
        </div>

    </header>

</template>

<script>
    export default {}
</script>
