<template>
    <r-modal-template :mask-closable="maskClosable"
             :closable="closable"
             :current="formName"
             style="position: relative;">
        <a-form v-if="hasForm"
                class="ant-form ant-form-vertical"
                @submit="onPost"
                :form="form">
            <a-form-item>
                <a-row type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                        <h3 class="r-heading">
                            Reset password
                        </h3>
                        <p class="r-text-sm">
                            Enter the email address associated with your Kshopit Account and we will send you
                            instructions to reset your password.
                        </p>
                    </a-col>
                </a-row>
            </a-form-item>
            <a-form-item label="Email address">
                <a-input
                        size="large"
                        placeholder="Your email address"
                        v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"/>
            </a-form-item>
            <a-form-item :wrapper-col="{ span: 24 }">
                <a-button block @click="onPost" :size="'large'" type="primary" html-type="submit"
                          class="ant-btn-secondary r-btn-primary">
                    Send password
                </a-button>
            </a-form-item>
        </a-form>
        <r-notice :process="process"></r-notice>
        <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    </r-modal-template>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                process: 'isSuccess',
                formName: 'password-request',
                form: this.$form.createForm(this, {name: 'form_password_request'}),
                message: "We have sent you an email with instructions on how to reset your password."
            };
        },
        computed: mapGetters({
            current: "auth/current",
            processes: "base/processes",
            isValid: "form/isValid",
            hasForm: "base/hasForm",
        }),
        created() {
        },
        methods: {
            isRunning() {
                return this.processes[this.process] !== undefined &&
                    this.processes[this.process];
            },
            onPost(event) {
                event.preventDefault();

                this.form.validateFields((errors, values) => {
                    if (!errors) {
                        let params = Object.assign({}, values);
                        this.onRequest(params);
                    }
                });
            },
            async onRequest(params) {
                let $this = this;
                let payload = {
                    params: params,
                    route: '/password/email',
                    current: this.formName,
                    message: this.message,
                    hasUser: true,
                };

                await this.$store.dispatch('auth/onPost', payload).catch(error => {
                    try{
                        let data = error.response.data;
                        if (data.errors !== undefined) {
                            $this.setErrors(data.errors, $this);
                        }
                    }catch (e) {}
                }).then(response => {
                    setTimeout(() => {
                        if ($this.isValid) {
                            $this.$message.success('Thank you. Enjoy your shopping with Kshopit.');
                        } else {
                            $this.$message.error('Oops, the submitted form was invalid.');
                        }
                    }, 600);
                });
            },
            setErrors(errors, $this) {
                $this.errors = errors;
                $this.fields.forEach(function (field) {
                    if ($this.errors[field] !== undefined) {
                        let value = $this.form.getFieldValue(field);
                        let fields = {};
                        fields[field] = {
                            'value': value,
                            "errors": [
                                {
                                    "message": $this.errors[field][0],
                                    "field": field
                                }
                            ]
                        };
                        $this.form.setFields(fields);
                    }
                });
            }
        },
    };
</script>