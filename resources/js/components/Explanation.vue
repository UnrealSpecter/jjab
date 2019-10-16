<template>

    <div data-emergence="hidden" data-animation="animated fadeInUp" class="box bg-jjab-blue">
        <h1 class="box-title anton">{{ subtitle }}</h1>
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
