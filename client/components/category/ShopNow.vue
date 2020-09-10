<template>
    <a-row type="flex" justify="start">
        <a-col v-if="category" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <nuxt-link @click.native="onCategory(category)" class="r-same-height r-text-view-more"
                         :to="category.route">
                <a-button class="r-hide-sm r-btn-bordered-secondary"
                          block
                          type="secondary"
                          :size="size">
                    View all
                    <a-icon type="right"/>
                </a-button>
                <a-avatar class="r-hide-lg" shape="square" icon="right"/>
            </nuxt-link>
        </a-col>
    </a-row>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-category-shop-now',
        props: {
            category: {type: Object, required: true, default: null},
            justify: {type: String, required: false, default: 'start'},
            size: {type: String, required: false, default: 'default'},
        },
        data() {
            return {};
        },
        computed: mapGetters({
            store: 'shop/store',
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
            },
            onCategory(category) {
                this.$store.dispatch('shop/onCategory', category.route);
            }
        },
        watch: {},
    };
</script>
