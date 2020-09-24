<template>
    <a-row :gutter="24" type="flex"
           justify="center">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :lg="{ span: 24 }">
            <a-form class="ant-form ant-form-vertical"
                    @submit="onStep"
                    :form="form">
                <a-form-item label="Notes">
                    <a-input type="textarea"
                             size="large"
                             placeholder="Your delivery instructions"
                             v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your delivery instructions.' }] }]">
                    </a-input>
                </a-form-item>
                <a-form-item label="What if you're not around?">
                    By selecting this option you accept full responsibility for your
                    order after it has been delivered unattended, including any loss due
                    to theft or damage due to temperature sensitivity.
                </a-form-item>
                <a-row class="r-margin-vertical-24" :gutter="24" type="flex"
                       justify="start">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :md="{ span: 18 }" :lg="{ span: 18 }">
                        <a-button size="default"
                                  type="primary"
                                  html-type="button"
                                  class="r-btn-bordered-secondary">
                            Skip
                        </a-button>
                    </a-col>
                    <a-col class="gutter-row r-text-right" :xs="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :md="{ span: 6 }" :lg="{ span: 6 }">
                        <a-button block type="primary" html-type="submit"
                                  class="ant-btn-secondary r-btn-primary">
                            Proceed
                        </a-button>
                    </a-col>
                </a-row>
            </a-form>
            <r-spinner process="isProcessing"></r-spinner>
        </a-col>
    </a-row>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        props: {
            name: 'r-checkout-instructions'
        },
        data() {
            return {
                form: this.$form.createForm(this, {name: 'form_instructions'}),
            };
        },
        computed: mapGetters({
            cart: 'cart/cart'
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
            },
            onStep() {
                this.$store.dispatch('base/onModal', modal);
            }
        },
    }
</script>