<template>
    <r-modal-template :css-class="'r-modal-product'"
                      :mask-closable="true"
                      :closable="true"
                      current="category"
                      style="position: relative;">
        <r-category-breadcrumbs :category="category"></r-category-breadcrumbs>
        <a-card class="r-margin-top-24" title="Filter By" style="width: 100%;">
            <r-category-filters></r-category-filters>
        </a-card>
    </r-modal-template>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-category-modal',
        data() {
            return {};
        },
        computed: mapGetters({
            category: 'shop/category',
            modal: 'base/modal'
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
            }
        },
    }
</script>