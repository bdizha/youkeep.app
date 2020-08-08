<template>
    <a-layout-sider
            breakpoint="lg"
            collapsedWidth="0"
            @collapse="onCollapse"
            @breakpoint="onBreakpoint"
            class="r-slider-left" width="312">
        <a-row class="r-stickyss r-sticky-138" id="r-slider-left" type="flex" justify="start">
            <a-col class="gutter-row" :span="24">
                <r-store-shop-now :category="category" v-if="!hasProducts"></r-store-shop-now>
                <a-row v-if="hasProducts" class="r-filter-item" type="flex" justify="start">
                    <a-col class="gutter-row" :span="12">
                        <div class="r-text-capitalize">
                            <a-icon type="control"/>
                            Filters
                        </div>
                    </a-col>
                    <a-col class="gutter-row" :span="12" style="text-align: right">
                        <a-button
                                size="small"
                                @click="onClear"
                                class="r-btn-bordered">CLEAR
                        </a-button>
                    </a-col>
                </a-row>
                <r-category-filters v-if="hasCategories"></r-category-filters>
                <template v-if="hasBrands && hasProducts">
                    <a-row type="flex" justify="start">
                        <a-col class="gutter-row" :span="24">
                            <a-row type="flex" justify="start">
                                <a-col class="gutter-row" :span="24">
                                    <div class="r-text-capitalize r-filter-item">
                                        <a-icon type="project"/>
                                        Brands
                                    </div>
                                </a-col>
                            </a-row>
                            <a-row class="r-margin-vertical-12" type="flex" justify="start">
                                <a-col class="gutter-row" :span="24">
                                    <a-checkbox-group v-model="filters.discounts" @change="onFilter">
                                        <a-row type="flex" justify="center">
                                            <a-col v-for="(discount, d) in discounts" :key="d + 1" :span="24">
                                                <a-checkbox :value="discount/100">More Than {{
                                                    discount }}%
                                                </a-checkbox>
                                            </a-col>
                                        </a-row>
                                    </a-checkbox-group>
                                </a-col>
                            </a-row>
                        </a-col>
                    </a-row>
                    <a-row v-if="hasDiscounts" type="flex" justify="start">
                        <a-col class="gutter-row" :span="24">
                            <a-row type="flex" justify="start">
                                <a-col class="gutter-row" :span="24">
                                    <div class="r-text-capitalize r-filter-item">
                                        <a-icon type="star"/>
                                        Discount
                                    </div>
                                </a-col>
                            </a-row>
                            <a-row class="r-margin-vertical-12" type="flex" justify="start">
                                <a-col class="gutter-row" :span="24">
                                    <a-checkbox-group v-model="filters.discounts" @change="onFilter">
                                        <a-row type="flex" justify="center">
                                            <a-col v-for="(discount, d) in discounts" :key="d + 1" :span="24">
                                                <a-checkbox :value="discount/100">More Than {{
                                                    discount }}%
                                                </a-checkbox>
                                            </a-col>
                                        </a-row>
                                    </a-checkbox-group>
                                </a-col>
                            </a-row>
                        </a-col>
                    </a-row>
                </template>
            </a-col>
        </a-row>
    </a-layout-sider>
</template>
<script>
    import {mapGetters} from "vuex";

    const DISCOUNTS = [10, 15, 20, 25, 30];
    const BRANDS = [10, 15, 20, 25, 30];
    const FILTERS = {
        discounts: [],
        brands: []
    };
    export default {
        name: 'r-category-filters',
        props: {},
        data() {
            return {
                hasData: true,
                hasBrands: true,
                hasDiscounts: true,
                discounts: DISCOUNTS,
                brands: BRANDS
            };
        },
        computed: mapGetters({
            store: 'shop/store',
            filters: 'shop/filters',
            hasCategories: 'shop/hasCategories',
            hasProducts: 'shop/hasProducts',
            category: 'shop/category'
        }),
        created() {
        },
        methods: {
            payload(category) {

            },
            onSlot() {
                console.log('onSlot');
            },
            onFilter() {
                this.$store.commit('onFilter', this.filters);
            },
            onCollapse() {
                console.log('onCollapse');
            },
            onBreakpoint() {
                console.log('onCollapse');
            },
            onClear() {
                this.filterDiscounts = [];
                this.filterBrands = [];

                console.log('onClear : filterDiscounts', this.filterDiscounts);
                console.log('onClear : filterBrands', this.filterBrands);
            }
        },
        watch: {},
    };
</script>
