<template>
    <a-modal :class="cssClass"
             :mask-closable="maskClosable"
             :after-close="onClose"
             :closable="closable"
             v-model="hasModal">
        <template slot="footer">
            <a-row type="flex" justify="center" align="middle">
                <a-col class="gutter-row" :span="24">
                    <h4 class="r-heading r-text-primary r-text-center">
                        <a-icon type="gift"/>
                        <span>FREE Deliveries For 1 Week with Owami <br></span>
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

                this.$store.subscribe((mutation, state) => {
                    if (mutation.type == 'onModal') {
                        $this.modal = mutation.payload;
                        $this.setHasModal();
                        $this.setHasProduct();
                        $this.isSpinning = true;

                        $this.setSpinning(false);

                        if ($this.hasModal) {
                            $('body').addClass('r-hide-body');
                        } else {
                            $('body').removeClass('r-hide-body');
                        }
                    }
                });
            },
            setSpinning(isSpinning) {
                let $this = this;
                setTimeout(function () {
                    $this.isSpinning = isSpinning;
                }, 1500);
            },
            setHasModal() {
                this.hasModal = this.modal.isVisible &&
                    this.modal.current == this.current;
            },
            setHasProduct() {
                this.hasProduct = this.modal.product != null;
            },
            onClose(event) {
                this.hasModal = false;

                this.modal.isVisible = false;
                this.modal.current = null;
                $('body').removeClass('r-hide-body');
            }
        },
    };
</script>
