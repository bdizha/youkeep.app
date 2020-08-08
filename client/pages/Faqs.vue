<template>
    <div>
        <r-page>
            <a-row type="flex" justify="center" align="middle">
                <a-col :span="8">
                    <h1>Help</h1>
                </a-col>
                <a-col :span="16">
                    <div class="r-page-header-photo r-page-art-red"
                         style="background-image: url(https://www.picnic.app/static/amsterdam_city-91274d6b3d80a4960533a108ac070a89.jpg);">
                    </div>
                </a-col>
            </a-row>
            <a-row>
                <a-col :lg="{span: 16}">
                   <r-faqs></r-faqs>
                </a-col>
            </a-row>
        </r-page>
    </div>
</template>
<script>
    export default {
        props: {},
        data() {
            return {
                modal: {
                    current: null,
                    message: null,
                },
            }
        },
        mounted() {
            this.modal = this.$store.state.modal;
        },
        methods: {},
    };
</script>