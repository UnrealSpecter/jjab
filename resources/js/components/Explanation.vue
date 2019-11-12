<template>

    <div data-emergence="hidden" data-animation="animated fadeInUp" class="invisible box bg-jjab-blue">
        <h3 class="box-title anton">{{ subtitle }}</h3>
        <p class="explanation-description roboto">{{ description }}</p>
    </div>

</template>

<script>
    export default {
        props: [
            'subtitle', 'description'
        ]
    }
</script>
