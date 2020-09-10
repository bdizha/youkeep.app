<template>
    <r-modal-template :mask-closable="maskClosable"
             :closable="closable"
             :current="formName"
             style="position: relative;">
        <r-notice  process="isSuccess"></r-notice>
        <r-spinner process="isRunning" :is-absolute="true"></r-spinner>
        <a-row v-show="hasForm" type="flex" justify="center">
            <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                <h3 class="r-heading">
                    Edit your account settings
                </h3>
                <p class="r-text-normal">
                    Changing your email address will also change your logging credentials.
                </p>
            </a-col>
        </a-row>
        <a-form v-show="hasForm"
                class="ant-form ant-form-vertical"
                @submit="onPost"
                :form="form">
            <a-form-item label="Your full name">
                <a-input
                       size="default"
                        placeholder="Your full name"
                        v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"/>
            </a-form-item>
            <a-form-item label="Email address">
                <a-input
                       size="default"
                        placeholder="Your email address"
                        v-decorator="['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"/>
            </a-form-item>
            <a-row :gutter="24" type="flex" justify="center">
                <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                    <a-form-item label="Mobile number">
                        <a-input
                               size="default"
                                placeholder="Your mobile number"
                                v-decorator="['phone_number', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]">
                            <a-icon slot="prefix" type="mobile"/>
                        </a-input>
                    </a-form-item>
                </a-col>
                <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                    <a-form-item label="Your birth date">
                        <a-date-picker
                               size="default"
                                :format="dateFormat"
                                placeholder="Your birth date"
                                v-decorator="['birth_date', { rules: [{ required: true, message: 'Please enter your birth date' }] }]"/>
                    </a-form-item>
                </a-col>
            </a-row>
            <a-form-item class="r-mt-48">
                <a-row :gutter="24" type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-button block @click="onReturn" size="default" class="r-btn-bordered-grey">
                            Back
                        </a-button>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-button block @click="onPost" size="default" type="primary" html-type="submit"
                                  class="ant-btn-secondary r-btn-primary">
                            Save
                        </a-button>
                    </a-col>
                </a-row>
            </a-form-item>
        </a-form>
    </r-modal-template>
</template>
<script>
    import moment from 'moment';
    import {mapGetters} from "vuex";

    export default {
        name: 'r-account-profile',
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                formName: 'account-profile',
                redirectTo: '/account/profile',
                fields: ['name', 'email', 'phone_number', 'birth_date'],
                form: this.$form.createForm(this, {name: 'form_account_profile'}),
                dateFormat: 'YYYY-MM-DD',
                message: 'Your account details have been successfully updated.'
            };
        },
        computed: mapGetters({
            modal: 'base/modal',
            user: 'auth/user',
            processes: 'base/processes',
            hasForm: 'base/hasForm',
            isValid: "form/isValid",
        }),
        created() {
            this.onForm();
        },
        methods: {
            async onForm() {
                let $this = this;

                let payload = {
                    form: this.$form,
                    fields: this.fields
                };

                await this.$store.dispatch('auth/onForm', payload).then((mapFields) => {
                    console.log('what came back', mapFields);
                    $this.onInit($this, mapFields);
                });
            },
            onInit($this, mapFields) {

                console.log('onInit onInit back', mapFields);

                if ($this.user.birth_date !== null) {
                    mapFields.birth_date = $this.$form.createFormField({
                        value: moment($this.user.birth_date, $this.dateFormat),
                    });
                }

                $this.form = $this.$form.createForm($this, {
                    name: 'form_account_profile',
                    mapPropsToFields: () => {
                        return mapFields;
                    },
                });
            },
            onReturn() {
                let modal = {};
                modal.isVisible = false;
                modal.current = null;

                this.$store.dispatch('base/onModal', modal);
            },
            onPost(event) {
                event.preventDefault();

                this.hasError = false;
                this.isProcessing = true;

                this.form.validateFields((error, values) => {
                    if (!error) {
                        console.log('Making request...', values);
                        let params = Object.assign({}, values);
                        this.onProfile(params);

                    }
                });
            },
            async onProfile(params) {
                let $this = this;
                let payload = {
                    params: params,
                    route: '/account/settings/store',
                    current: this.formName,
                    message: this.message,
                    hasUser: true,
                    canRedirect: false,
                };

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
                            $this.$message.success($this.message);
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
            },
        }
    };
</script>
