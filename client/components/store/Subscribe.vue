<template>
    <a-row type="flex" :justify="justify" align="middle">
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: span}">
            <a-button @click="onModal" class="r-btn-bordered-primary"
                      block
                      type="primary"
                      :size="size">
                <a-icon type="check-circle"></a-icon>
                Subscribe
            </a-button>
        </a-col>
    </a-row>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-store-subscribe',
        props: {
            span: {type: Number, required: false, default: 24},
            justify: {type: String, required: false, default: 'start'},
            size: {type: String, required: false, default: 'default'},
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
            onModal() {
                let modal = {};
                modal.isVisible = !this.hasStoreTray;
                modal.current = 'store';

                this.$store.dispatch('base/onModal', modal);
            }
        },
        watch: {},
    };
</script>
