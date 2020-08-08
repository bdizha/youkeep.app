<template>
    <div class="r-banner ant-avatar ant-avatar-square ant-avatar-image">
        <img :src="'/storage/banner/' + banner.src" :alt="banner.name">
    </div>
</template>
<script>
    export default {
        components: {},
        props: {
            banner: {type: Object, required: false},
        },
        data() {
            return {}
        },
        mounted() {
            this.payload();
        },
        methods: {
            payload() {
            }
        }
    };
</script>