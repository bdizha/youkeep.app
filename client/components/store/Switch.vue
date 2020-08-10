<template>
    <a-button block @click="onStoreTray" class="r-btn-bordered-grey">
        <a-icon type="shop"/>
        {{ store.name == null ? 'Switch Store' : store.name }}
    </a-button>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
      name: 'r-store-switch',
        props: {
            css: {type: String, required: false, default: ''}
        },
        data() {
            return {};
        },
        computed: mapGetters({
            store: 'shop/store',
            hasStoreTray: 'base/hasStoreTray'
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
            },
            onStoreTray() {
                let modal = {};
                modal.isVisible = !this.hasStoreTray;
                modal.current = 'store';

                this.$store.dispatch('base/onModal', modal);
            }
        },
        watch: {},
    };
</script>
