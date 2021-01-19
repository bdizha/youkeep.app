<template>
    <r-modal-template :mask-closable="maskClosable"
             :closable="closable"
             :current="formName"
             style="position: relative;">
        <a-form v-if="hasForm"
                class="ant-form ant-form-vertical"
                @submit="onPost"
                :form="form">
            <a-row>
                <a-col :xs="{ span: 24 }">
                    <a-form-item>
                        <a-row type="flex" justify="center">
                            <a-col class="r-text-left" :xs="{ span: 24 }">
                                <h3 v-if="user" class="r-heading ">
                                    <span class="r-text-secondary">Welcome, </span>{{ user.name }}!
                                </h3>
                                <p class="r-text-small">
                                    Enter and confirm new credentials to secure your Shopple account.
                                </p>
                            </a-col>
                        </a-row>
                    </a-form-item>
                    <a-form-item label="Account password">
                        <a-input type="password"
                                 size="default"
                                 placeholder="Your account password"
                                 v-decorator="['password', { rules: [{ required: true, message: 'Please enter your account password' }] }]">
                            <a-icon slot="prefix" type="lock"/>
                        </a-input>
                    </a-form-item>
                    <a-form-item label="Confirm password">
                        <a-input type="password"
                                 size="default"
                                 placeholder="Confirm password"
                                 v-decorator="['password_confirmation', { rules: [{ required: true, message: 'Please confirm account password' }] }]">
                            <a-icon slot="prefix" type="lock"/>
                        </a-input>
                    </a-form-item>
                    <a-form-item :wrapper-col="{ span: 24 }">
                        <a-button block :size="'default'" type="secondary" html-type="submit"
                                  class="r-btn-secondary">
                            Secure me
                        </a-button>
                    </a-form-item>
                </a-col>
            </a-row>
        </a-form>
        <r-notice :process="process"></r-notice>
        <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
    </r-modal-template>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-auth-secure',
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                process: 'isSuccess',
                formName: 'secure',
                fields: ['password', 'password_confirmation'],
                form: this.$form.createForm(this, {name: 'form_secure'}),
                message: "Thank you for successfully securing your Shopple account! Please wait while we setup your account.",
                userType: 1,
            };
        },
        computed: mapGetters({
            current: "auth/current",
            user: "auth/user",
            hasAddress: "account/hasAddress",
            processes: "base/processes",
            redirectTo: "auth/redirectTo",
            isValid: "form/isValid",
            hasForm: "base/hasForm",
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
            },
            isRunning() {
                return this.processes[this.process] !== undefined &&
                    this.processes[this.process];
            },
            onPost(event) {
                event.preventDefault();

                this.form.validateFields((errors, values) => {
                    if (!errors) {
                        let params = Object.assign({}, values);
                        this.onSecure(params);
                    }
                });
            },
            async onSecure(params) {
                params.id = this.user.id;
                params.activated = true;
                let payload = {
                    params: params,
                    route: '/secure',
                    current: this.formName,
                    message: this.message,
                    form: this.form,
                    fields: this.fields,
                    hasUser: true,
                    canRedirect: true,
                };
                let $this = this;

                await this.$store.dispatch('auth/onPost', payload).catch(error => {
                    try {
                        let data = error.response.data;
                        if (data.errors !== undefined) {
                            $this.setErrors(data.errors, $this);
                        }
                    } catch (e) {
                    }
                }).then(response => {
                    setTimeout(() => {
                        if ($this.isValid) {
                            $this.$message.success('Thank you, your account is now secured. Enjoy your shopping with Shopple.');
                        } else {
                            $this.$message.error('Oops, the submitted form was invalid.');
                        }
                    }, 600);
                });
            },
            onModal(current, event) {
                event.preventDefault();

                let modal = {};
                modal.isVisible = true;
modal.isClosable = true;
                modal.current = current;
                this.$store.dispatch('base/onModal', modal);
            },
            onUserType(e) {
                this.userType = e.target.value;
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
                        console.log('what is this :: ' + field, $this.errors[field][0]);
                    }
                });
            }
        },
    };
</script>
