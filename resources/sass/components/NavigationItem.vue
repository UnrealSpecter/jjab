
<template>

    <li class="pl-0 invisible tablet-landscape:visible tablet-landscape:flex text-formi-yellow whitespace-no-wrap mt-5 text-1.5rem tablet-landscape:text-1rem laptop:text-1.25rem desktop:text-1.5rem antialiased subpixel-antialiased px-5 tablet-landscape:px-2 laptop:px-5 tablet:flex flex-row justify-center items-end leading-none">
        <a :href="`${ href }`">
            <slot></slot>
        </a>
    </li>

</template>

<script>
    export default {
        props: [ 'href', 'description' ]
    }
</script>
