<template>
    <a-row type="flex" justify="center" align="middle">
        <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row type="flex" justify="center" align="middle">
                <a-col class="gutter-row"
                       :xs="{ span: 24 }"
                       :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <a-layout>
                        <a-layout-content class="r-min-height-256 r-layout-column">
                            <slot/>
                        </a-layout-content>
                    </a-layout>
                </a-col>
            </a-row>
        </a-col>
    </a-row>
</template>
<script>
    export default {
        components: {},
        props: {
            article: {type: Object, required: false, default: null},
        },
        data() {
            return {
            }
        },
        mounted() {
            this.payload();
        },
        methods: {
            payload() {
            }
        }
    };
</script>