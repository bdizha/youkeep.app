<template>
    <a-modal :class="cssClass"
             :mask-closable="maskClosable"
             :after-close="onClose"
             :closable="closable"
             v-model="hasModal">
        <template slot="footer">
            <a-row type="flex" justify="center" align="middle">
                <a-col class="gutter-row" :span="24">
                    <h4 class="r-heading r-text-secondary r-text-center">
                        <a-icon type="gift"/>
                        <span>FREE Deliveries For 1 Week with Shopple <br></span>
                    </h4>
                </a-col>
            </a-row>
        </template>
        <slot/>
        <r-spinner v-if="isSpinning" :is-absolute="true"></r-spinner>
    </a-modal>
</template>
<script>
    export default {
        props: {
            hasFooter: {type: Boolean, required: false, default: false},
            maskClosable: {type: Boolean, required: false, default: true},
            closable: {type: Boolean, required: false, default: true},
            current: {type: String, required: false, default: null},
            cssClass: {type: String, required: false, default: null},
        },
        data() {
            return {
                hasModal: false,
                hasProduct: false,
                isSpinning: true,
                modal: {
                    isVisible: false,
                    current: null,
                    product: null,
                }
            };
        },
        mounted() {
            this.payload();
        },
        computed: {},
        methods: {
            onProduct() {
            },
            payload() {
                let $this = this;
                $this.setSpinning(false);
            },
            setSpinning(isSpinning) {
                let $this = this;
                setTimeout(function () {
                    $this.isSpinning = isSpinning;
                }, 1500);
            },
            setHasModal() {
            },
            setHasProduct() {
                this.hasProduct = this.modal.product != null;
            }
        },
    };
</script>
