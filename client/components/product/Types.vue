<template>
    <a-row class="r-margin-bottom-24" type="flex" justify="start">
        <a-col class="gutter-row" :span="24">
            <template v-for="productType in product.types"
                      v-if="productType.has_variants">
                <a-row :key="productType.label"
                       class="r-filter-item" type="flex" justify="start">
                    <a-col class="gutter-row" :span="24">
                        <div class="r-text-capitalize">
                            {{ productType.label }}
                        </div>
                    </a-col>
                </a-row>
                <a-row :gutter="[12,12]" class="r-filter-item" type="flex" justify="start">
                    <a-col v-for="variant in productType.variants"
                           :key="variant.id" class="gutter-row" :span="6">
                        <div class="r-product-type">
                            {{ variant.label }}
                        </div>
                    </a-col>
                </a-row>
            </template>
        </a-col>
    </a-row>
</template>
<script>
    export default {
      name: 'r-product-types',
        props: {
            isShowing: {type: Boolean, required: false, default: false},
            product: {type: Object, required: false, default: null},
        },
        data() {
            return {
                currentColor: null,
                currentSize: null,
                colors: [
                    {'label': 'Red', 'id': 1},
                    {'label': 'White', 'id': 2},
                ],
                size: null,
                sizes: [
                    {'label': 'S', 'id': 1},
                    {'label': 'M', 'id': 2},
                ],
            };
        },
        created() {
        },
        computed: {},
        methods: {},
    };
</script>
