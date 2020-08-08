<template>
    <r-modal :mask-closable="maskClosable"
             :closable="closable"
             :current="current"
             style="position: relative;">
        <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                class="ant-form ant-form-vertical"
                @submit="onSave"
                :form="formCredit">
            <a-form-item>
                <a-row type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                        <h2 class="r-heading">
                            Add credit to your account
                        </h2>
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
                                 size="large"
                                 placeholder="Amount"
                                 v-decorator="['amount', { rules: [{ required: true, message: 'Please enter amount' }] }]">
                            <a-icon slot="prefix" type="lock"/>
                        </a-input>
                    </a-form-item>
                </a-col>
            </a-row>
            <a-row class="r-margin-top-24" gutter="12" type="flex" justify="end">
                <a-col class="gutter-row" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <a-form-item :wrapper-col="{ span: 24 }">
                        <a-button block @click="onCancel"
                                  size="large"
                                  type="secondary"
                                  html-type="button"
                                  class="r-btn-bordered-red">
                            Cancel
                        </a-button>
                    </a-form-item>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                    <a-form-item :wrapper-col="{ span: 24 }">
                        <a-button block @click="onSave"
                                  size="large"
                                  type="primary"
                                  html-type="submit"
                                  class="ant-btn-secondary r-btn-red">
                            Top up
                        </a-button>
                    </a-form-item>
                </a-col>
            </a-row>
        </a-form>
        <r-notice v-if="isSuccessful" :message="message"></r-notice>
        <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
    </r-modal>
</template>
<script>
    export default {
      name: 'r-account-modal-credit',
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                formCredit: this.$form.createForm(this, {name: 'form_account_credit'}),
                isSuccessful: false,
                isProcessing: false,
                current: 'account-credit',
                modal: {
                    isVisible: false,
                    current: null
                },
                hasError: false,
                errors: []
            };
        },
        mounted() {
        },
        methods: {
            onSave(event) {
                event.preventDefault();

                this.hasError = false;

                this.formCredit.validateFields((err, values) => {
                    if (!err) {
                        console.log('Making request...', values);

                        let params = Object.assign({}, values);
                        let $this = this;

                        let path = '/account/credit';
                        HTTP.post(path, params)
                            .then(response => {
                                console.log('Response');
                                $this.isSuccessful = true;

                                setTimeout(function () {
                                    $this.isProcessing = false;
                                }, 2400);
                            })
                            .catch(e => {
                                $this.isProcessing = false;
                                $this.hasError = true;
                                console.log('Errors', e);
                            });
                    } else {
                        this.hasError = true;
                        console.error(err);
                    }
                });
            },
            onCancel() {
                this.modal.isVisible = false;
                this.modal.current = null;
                this.$store.dispatch('app/onModal', modal);
            }
        },
    };
</script>
