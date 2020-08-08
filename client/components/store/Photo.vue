<template>
    <div class="r-store-photo-holder">
        <div v-if="store.photo !== 'undefined'" slot="cover"
             class="r-store-photo"
             :style="'background-image: url(/assets/icon_default.png)'">
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            store: {type: Object, required: true},
        },
        data() {
            return {};
        },
        created() {
            // console.log('Store photo', this.store);
        },
        methods: {},
        watch: {
            openKeys(val) {
            },
        },
    };
</script>