<template>
    <r-modal-template :css-class="'r-modal-store-tray'"
                      :mask-closable="false"
                      :closable="true"
                      current="store"
                      style="position: relative;">
        <a-row type="flex" justify="center">
            <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                <h3 class="r-heading">
                    Shop at your favourite store
                </h3>
                <p class="r-text-sm">
                    Simply choose Paise at checkout
                </p>
            </a-col>
        </a-row>
        <r-store-list></r-store-list>
    </r-modal-template>
</template>
<script>
    import {mapGetters} from 'vuex'

    export default {
        name: 'r-store-modal',
        components: {},
        props: {},
        data() {
            return {}
        },
        computed: mapGetters({
            stores: 'base/stores',
            categories: 'base/categories',
            hasStores: 'base/hasStores',
            processes: 'base/processes',
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
                // this.fetchCategories();
            },
        }
    };
</script>
