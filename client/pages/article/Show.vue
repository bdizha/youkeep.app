<template>
    <r-article-template v-if="hasData" :article="null">
        <a-row :gutter="0">
            <a-col class="gutter-row r-padding-24">
                <a-row :gutter="[24,24]" class="r-product-cards">
                    <a-col class="gutter-row" v-if="articles.length > 0"
                           v-for="(article, index) in articles"
                           :key="index" :xs="{span:24}" :sm="{span:12}" :md="{span:8}"
                           :lg="{span:6}">
                        <r-article-item :size="24" v-if="hasData" :article="article"></r-article-item>
                    </a-col>
                </a-row>
            </a-col>
        </a-row>
    </r-article-template>
</template>
<script>
    export default {
        components: {},
        props: {},
        data() {
            return {
                articles: [],
                store: {slug: null},
                hasData: false,
                hasSpin: false,
            }
        },
        mounted() {
            this.payload();
        },
        methods: {
            payload() {
                this.hasSpin = true;

                setTimeout(function () {
                    $this.$store.commit('onSpin', false);
                }, 900);

                let params = {};
                let path = this.$route.path;
                let $this = this;

                axios.get(path, params)
                    .then(response => {
                        console.log("setting store data >> before");
                        console.log(response.data);

                        $this.articles = response.data.articles;
                        $this.hasData = true;
                        console.log("setting article data >> after");

                        setTimeout(function () {
                            $this.hasSpin = false;
                        }, 900);
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }
        }
    };
</script>