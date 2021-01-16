<template>
    <r-modal-template :mask-closable="true"
                      :closable="true"
                      current="timeline">
        <a-row type="flex" justify="center">
            <a-col class="r-text-left" :xs="{ span: 24 }">
                <h3 class="r-heading">
                    Your shopping timeline
                </h3>
            </a-col>
        </a-row>
        <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, 24]" class="r-product-cards" type="flex" justify="start" align="middle">
            <a-col class="r-p-24" v-for="(product, index) in products" :key="index"
                   :xs="{span: 12}"
                   :sm="{span: 12}" :md="{span: 6}" :lg="{span: 4}">
                <r-product-item :product="product"></r-product-item>
            </a-col>
        </a-row>
    </r-modal-template>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        props: {
            name: 'r-product-modal-timeline'
        },
        data() {
            return {};
        },
        created() {
            this.payload();
        },
        computed: mapGetters({
            modal: 'base/modal',
            hasProducts: 'product/hasProducts',
            products: 'product/products',
        }),
        methods: {
            async payload() {
            },
        },
    };
</script>
