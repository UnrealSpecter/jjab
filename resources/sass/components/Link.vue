

<template>

    <li class="
        a-link flex-grow whitespace-no-wrap w-full text-1.25rem antialiased subpixel-antialiased flex flex-row justify-center items-center
        tablet-portrait:flex-initial tablet-portrait:h-16  tablet-portrait:text-1.5rem tablet-portrait:shadow-none
        tablet-landscape:bg-transparent
        tablet-landscape:h-auto tablet-landscape:w-auto tablet-landscape:text-0.75rem tablet-landscape:px-5
        laptop:text-1.25rem"
        :class="{ 'font-bold': fontBold }">
        <a class="transition-all-250ms border-formi-blue px-8 py-2 tablet-landscape:py-4" :href="`${ href }`">
            <img src="assets/svg-icons/icon-external-link.svg" class="h-full hidden w-1/3 py-3 stroke-current">
            <slot></slot>
        </a>
    </li>

</template>

<script>
    export default {
        props: {
            href: {
                default: '#',
                type: String
            },
            fontBold: {
                default: false,
                type: Boolean
            },
        }
    }
</script>
