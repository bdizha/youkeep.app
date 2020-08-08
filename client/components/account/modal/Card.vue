<template>
    <r-modal :mask-closable="maskClosable"
             :closable="closable"
             :current="current"
             style="position: relative;">
        <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                class="ant-form ant-form-vertical"
                @submit="onSave"
                :form="formCard">
            <a-form-item>
                <a-row type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                        <h2 class="r-heading">
                            {{ card != null ? 'Edit' : 'Add' }}
                            card card
                        </h2>
                        <p class="r-text-normal">
                            Your card details are always secured by a two-step authentication.
                        </p>
                    </a-col>
                </a-row>
            </a-form-item>
            <a-row :gutter="12" type="flex" justify="center">
                <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                    <a-form-item label="Card number">
                        <a-input type="text"
                                 size="large"
                                 placeholder="1234 1234 1234 1234"
                                 v-decorator="['card_number', { rules: [{ required: true, message: 'Please enter card number' }] }]">
                            <a-icon slot="prefix" type="lock"/>
                        </a-input>
                    </a-form-item>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 8 }" :sm="{ span: 8 }" :md="{ span: 8 }" :lg="{ span: 8 }">
                    <a-form-item label="Expiration">
                        <a-input type="text"
                                 size="large"
                                 placeholder="MM / YY"
                                 v-decorator="['expire_at', { rules: [{ required: true, message: 'Please enter expiration' }] }]">
                            <a-icon slot="prefix" type="clock-circle"/>
                        </a-input>
                    </a-form-item>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 4 }" :sm="{ span: 4 }" :md="{ span: 4 }" :lg="{ span: 4 }">
                    <a-form-item label="CVC">
                        <a-input type="text"
                                 size="large"
                                 placeholder="CVC"
                                 v-decorator="['cvc', { rules: [{ required: true, message: 'Please enter CVC' }] }]">
                        </a-input>
                    </a-form-item>
                </a-col>
            </a-row>
            <a-form-item class="r-margin-top-48">
                <a-row :gutter="24" type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-button block @click="onCancel" :size="'large'" class="r-btn-bordered-red">
                            Cancel
                        </a-button>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-button block @click="onSave" :size="'large'" type="primary" html-type="submit"
                                  class="ant-btn-secondary r-btn-red">
                            Save
                        </a-button>
                    </a-col>
                </a-row>
            </a-form-item>
        </a-form>
        <r-notice v-if="isSuccessful" :message="message"></r-notice>
        <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
    </r-modal>
</template>
<script>
    export default {
      name: 'r-account-modal-card',
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                fields: ['card_number', 'expire_at', 'csv'],
                formCard: this.$form.createForm(this, {name: 'form_account_card'}),
                isSuccessful: false,
                isProcessing: false,
                current: 'account-card',
                card: {id: null},
                cards: [],
                modal: {
                    isVisible: false,
                    current: null
                },
                hasError: false,
                errors: []
            };
        },
        mounted() {
            this.card = this.$store.state.card;
            this.cards = this.$store.state.cards;

            let $this = this;
            $this.setForm();

            this.$store.subscribe((mutation, state) => {
                if (mutation.type == 'onModal') {
                    $this.modal = mutation.payload;
                    $this.card = $this.modal.card;
                    $this.setForm();
                }
            });
        },
        methods: {
            setForm() {
                let mapFields = {};
                let $this = this;

                if (this.card != null) {
                    this.isDefault = Boolean(this.card.is_default);
                    this.fields.forEach(function (field) {
                        mapFields[field] = $this.$form.createFormField({
                            value: $this.card[field],
                        });
                    });

                    this.formCard = this.$form.createForm(this, {
                        name: 'form_account_card',
                        mapPropsToFields: () => {
                            return mapFields;
                        },
                    });
                }
            },
            onSave(event) {
                event.preventDefault();

                this.hasError = false;

                this.formCard.validateFields((error, values) => {
                    if (!error) {
                        this.isProcessing = true;
                        console.log('Making request...', values);

                        let params = Object.assign({}, values);
                        let $this = this;

                        if (this.card != null) {
                            params['id'] = this.card.id;
                        }

                        if (this.isDefault) {
                            params['is_default'] = this.isDefault;
                        }
                        this.message = 'Your card card has been successfully saved.';

                        let path = '/account/card/store';
                        HTTP.post(path, params)
                            .then(response => {
                                if (response.status = 422 && response.data.errors != undefined) {
                                    $this.onError(response, $this);
                                } else {
                                    $this.onResponse(response, $this);
                                }
                            })
                            .catch(e => {
                                $this.isProcessing = false;
                                $this.hasError = true;
                                console.log('Errors', e);
                            });
                    } else {
                        this.hasError = true;
                        console.error(error);
                    }
                });
            },
            onResponse(response, $this) {
                $this.isSuccessful = true;
                setTimeout(function () {
                    $this.isProcessing = false;
                    $this.isSuccessful = false;

                    if (response.data.card != null) {
                        $this.card = response.data.card;
                    }

                    $this.cards = response.data.cards;

                    $this.onCancel();
                    $this.onCard();
                    $this.onCards();
                }, 3000);
            },
            onError(response, $this) {
                let errors = response.data.errors;

                this.fields.forEach(function (field) {
                    if (errors[field] != undefined) {
                        let value = $this.formCard.getFieldValue(field);
                        let fields = {};
                        fields[field] = {
                            'value': value,
                            "errors": [
                                {
                                    "message": errors[field][0],
                                    "field": field
                                }
                            ]
                        };
                        $this.formCard.setFields(fields);
                        console.log('what is this :: ' + field, errors[field][0]);
                    }
                });

                setTimeout(function () {
                    this.isProcessing = false;
                    this.isSuccessful = false;
                }, 3000);
            },
            onCard() {
                this.$store.commit('onCard', this.card);
            },
            onCards() {
                this.$store.commit('onCards', this.cards);
                this.$router.push(this.redirectTo);
            },
            onCancel() {
                this.modal.isVisible = false;
                this.modal.current = null;
                this.$store.dispatch('app/onModal', modal);
            },
            onDelete() {
                let $this = this;
                this.message = 'Your card has been successfully deleted.';

                let params = {
                    card_id: this.card.id
                };

                let path = '/account/card/delete';
                HTTP.post(path, params)
                    .then(response => {
                        if (response.status = 422 && response.data.errors != undefined) {
                            $this.onError(response, $this);
                        } else {
                            $this.onResponse(response, $this);
                        }
                    })
                    .catch(e => {
                        $this.isProcessing = false;
                        $this.hasError = true;
                        console.log('Errors', e);
                    });
            }
        },
    };
</script>
