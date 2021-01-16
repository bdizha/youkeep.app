<template>
    <r-store-template v-if="hasData" :category="category">
        <a-row :gutter="16" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }">
                <r-store-products :category="category"
                                  :colums="6"
                                  :store="store"
                                  :products="products"></r-store-products>
            </a-col>
        </a-row>
    </r-store-template>
</template>
<script>
    export default {
        components: {},
        props: {},
        data() {
            return {
                category: {},
                products: [],
                categories: [],
                store: {slug: null},
                hasData: false,
                breadcrumbs: [],
                hasProducts: false,
                hasCategories: false,
                sort: 0
            }
        },
        mounted() {
            this.payload();
            let $this = this;

            this.$store.subscribe((mutation, state) => {
                if (mutation.type == 'onSort') {
                    $this.sort = mutation.payload.key;
                    $this.payload();
                }
            });
        },
        methods: {
            payload() {
                this.store = this.$store.state.store;
                let params = {
                    category_id: this.category.id,
                    sort: this.sort
                };

                let path = this.$route.path;
                let $this = this;

                axios.post(path, params)
                    .then(response => {
                        $this.category = response.data.category;

                        // set the breadcrumbs
                        $this.breadcrumbs = $this.category.breadcrumbs;

                        if ($this.category.categories.length > 0) {
                            $this.hasCategories = true;
                            $this.categories = $this.category.categories;
                        } else {
                            $this.products = $this.category.products;
                            $this.hasCategories = false;
                        }

                        setTimeout(function () {
                            $this.$store.commit('onSpin', false);
                        }, 1500);

                        $this.hasData = true;
                        console.log("setting category data >> after");
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }
        }
    };
</script>
