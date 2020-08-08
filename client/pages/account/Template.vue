<template>
    <a-row class="r-stickyss r-sticky-138" id="r-slider-left" :gutter="16" type="flex" justify="center">
        <a-col class="gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 18 }" :lg="{ span: 18 }">
            <a-layout>
                <r-account-left-menu></r-account-left-menu>
                <a-layout-content class="r-min-height-256 r-layout-column">
                    <div class="r-padding-horizontal-24">
                        <slot/>
                    </div>
                </a-layout-content>
            </a-layout>
        </a-col>
    </a-row>
</template>
<script>
    export default {
        components: {},
        props: {},
        data() {
            return {}
        },
        created() {
            this.payload();
        },
        methods: {
            payload() {
            },
        }
    };
</script>