<template>

    <!-- OUTER NAV WRAPPER -->
    <nav id="menu" class="
        transition-all-750ms fixed top-0 left-0 z-50 bg-transparent w-full flex flex-col
        tablet-landscape:h-auto">

        <!-- HAMBURGER -->
        <div class="
            z-50 absolute top-0 left-0 menu-buttons-wrapper w-full h-24 flex flex-row justify-start items-center
            tablet-portrait:h-32
            tablet-landscape:hidden">
            <hamburger></hamburger>
        </div>

        <!-- MENU TEXT -->
        <div class="
        menu-buttons-wrapper z-40 absolute top-0 left-0 w-full h-24 flex flex-row justify-end items-center
        tablet-portrait:h-32
        tablet-landscape:hidden">
            <div class="menu-text bg-white p-5 w-2/3 h-full flex flex-row justify-center items-center text-2.5rem uppercase aller-display tracking-2px invisible no-pointer-events">
                <img class="bg-white h-full w-auto" src="assets/formiprotect-logo.png">
            </div>
        </div>

        <!-- MENU ITEMS -->
        <ul class="
        hidden pt-24 bg-white fixed top-0 left-0 h-screen w-screen flex flex-col justify-start items-center
        tablet-portrait:pt-32 tablet-portrait:bg-white
        tablet-landscape:px-10 tablet-landscape:pt-0 tablet-landscape:flex tablet-landscape:h-20 tablet-landscape:flex-row tablet-landscape:justify-between tablet-landscape:shadow-md">

            <!-- BRAND -->
            <li class="
                hidden bg-white w-full h-20 aller-display text-formi-yellow antialiased subpixel-antialiased flex flex-row justify-center items-center
                tablet-portrait:h-24 tablet-portrait:text-2.5rem
                tablet-landscape:flex tablet-landscape:h-full tablet-landscape:w-auto tablet-landscape:px-5
                ">
                <a class="h-full leading-none bg-white tablet-landscape:bg-transparent w-full flex flex-col justify-center items-center py-2" href="#">
                    <img class="object-contain h-full" src="assets/formiprotect-logo.png">
                    <h1 class="leading-none w-full text-2rem tablet-landscape:text-white tablet-portrait:text-2.5rem tablet-landscape:text-1.5rem text-center tablet-landscape:hidden">Menu</h1>
                    <h1 class="leading-none w-full text-2rem tablet-landscape:text-white tablet-portrait:text-2.5rem tablet-landscape:text-1.5rem hidden tablet-landscape:hidden">Formiprotect</h1>
                </a>
            </li>


            <div class="flex-col flex-grow bg-white w-screen
            tablet-landscape:flex-row tablet-landscape:flex-grow-0 tablet-landscape:w-auto">

                <!-- DROPDOWN -->
                <div class="tablet-landscape:block tablet-portrait:h-full text-1.25rem open-sans text-formi-blue block cursor-pointer relative block">
                    <span class="h-full hidden tablet-landscape:flex flex-row justify-center items-center relative" @click="toggleDropdown()">Explore formiprotect <img class="hidden tablet-landscape:block object-fit h-6 ml-3" src="assets/dropdown-icon.svg"></span>
                    <div @click="toggleDropdown()" :class="[{ 'tablet-landscape:hidden': dropdown }]" class="tablet-landscape:shadow-lg whitespace-no-wrap bg-white dropdown-content relative tablet-landscape:absolute flex flex-col">
                        <a-link
                            v-for="link in dropdowns"
                            :data="link"
                            :key="link.label" :href="link.href">
                            {{ link.label }}
                        </a-link>
                    </div>
                </div>

                <!-- LINKS -->
                <div class="
                    flex flex-col
                    tablet-portrait:flex-row tablet-portrait:w-auto tablet-portrait:h-full">

                    <!-- LINK -->
                    <a-link
                        v-for="link in links"
                        :data="link"
                        :key="link.label" :href="link.href">
                        {{ link.label }}
                    </a-link>

                </div>

            </div>

            <!-- ACTIONS -->
            <div class="
                flex flex-col w-10/12
                tablet-landscape:h-20 tablet-landscape:mt-0 tablet-landscape:flex-row tablet-landscape:h-full tablet-landscape:w-auto tablet-landscape:justify-end">
                <a-link
                    v-for="action in actions"
                    v-bind:data="action"
                    v-bind:key="action.label" :href="action.href"
                    :class="{ 'font-bold': action.isBold }"
                    class="bg-formi-yellow p-4 mb-2 shadow-md dinpro-black tracking-1px uppercase text-white
                        tablet-landscape:text-formi-white tablet-landscape:m-2 tablet-landscape:p-0 tablet-landscape:bg-formi-yellow tablet-landscape:text-white">
                    {{ action.label }}
                </a-link>
            </div>

        </ul>

    </nav>

</template>

<script>
    export default {
        props: {
            links: Array,
            actions: Array,
            dropdowns: Array,
        },
        data() {
            return {
                dropdown: true
            }
        },
        methods: {
            toggleDropdown: function() {
                !this.dropdown ? this.dropdown = true : this.dropdown = false;
            }
        }
    }
</script>
