<template>
    <r-modal-template :mask-closable="maskClosable"
             :closable="closable"
             :current="formName"
             style="position: relative;">
        <a-form v-show="hasForm"
                class="ant-form ant-form-vertical"
                @submit="onPost"
                :form="formCredit">
            <a-form-item>
                <a-row type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                        <h3 class="r-heading">
                            Add credit to your account
                        </h3>
                        <p class="r-text-normal">
                            Your credit balance is always communicated to you with each transaction.
                        </p>
                    </a-col>
                </a-row>
            </a-form-item>
            <a-row type="flex" justify="center">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
                    <a-form-item label="Amount">
                        <a-input type="text"
                                size="default"
                                 placeholder="Amount"
                                 v-decorator="['amount', { rules: [{ required: true, message: 'Please enter amount' }] }]">
                            <a-icon slot="prefix" type="lock"/>
                        </a-input>
                    </a-form-item>
                </a-col>
            </a-row>
            <a-row class="r-margin-top-24" :gutter="12" type="flex" justify="end">
                <a-col class="gutter-row" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <a-form-item :wrapper-col="{ span: 24 }">
                        <a-button block @click="onReturn"
                                 size="default"
                                  type="secondary"
                                  html-type="button"
                                  class="r-btn-bordered-grey">
                            Back
                        </a-button>
                    </a-form-item>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <a-form-item :wrapper-col="{ span: 24 }">
                        <a-button block @click="onPost"
                                 size="default"
                                  type="primary"
                                  html-type="submit"
                                  class="ant-btn-secondary r-btn-primary">
                            Top up
                        </a-button>
                    </a-form-item>
                </a-col>
            </a-row>
        </a-form>
        <r-notice  process="isSuccess"></r-notice>
        <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    </r-modal-template>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-account-credit',
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                formName: 'account-credit',
                formCredit: this.$form.createForm(this, {name: 'form_account_credit'})
            };
        },
        computed: mapGetters({
            modal: 'base/modal',
            user: 'auth/user',
            processes: 'base/processes',
            hasForm: 'base/hasForm',
            isValid: "form/isValid",
        }),
        methods: {
            onPost(event) {
                event.preventDefault();

                this.form.validateFields((errors, values) => {
                    if (!errors) {
                        let params = Object.assign({}, values);
                        let payload = {
                            params: params,
                            route: '/account/credit',
                            current: this.formName,
                            message: this.message,
                            hasUser: true,
                        };

                        this.$store.dispatch('auth/onPost', payload);
                    }
                });
            },
            onReturn() {
                let modal = {};
                modal.isVisible = false;
                modal.current = null;

                this.$store.dispatch('base/onModal', modal);
            }
        },
    };
</script>