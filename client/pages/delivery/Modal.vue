<template>
    <r-modal :mask-closable="maskClosable"
             :closable="closable"
             :current="current"
             style="position: relative;">
        <r-delivery-form :has-title="true"></r-delivery-form>
        <a-row v-if="address">
            <a-col :xs="{span: 24}" :lg="{span: 24}">
                <div class="r-address-line r-mv-24">
                    <div class="r-address-icon">
                        <a-icon type="environment"/>
                    </div>
                    <div class="r-address-content">
                        <div class="r-address-main">
                            {{ address.main_text }}
                        </div>
                        <div class="r-address-secondary">
                            {{ address.secondary_text }}
                        </div>
                    </div>
                </div>
            </a-col>
        </a-row>
        <div v-if="modal.message" class="r-abs-spinner">
            <div class="r-status-update">
                <a-icon type="check-circle"/>&nbsp;
                {{ modal.message }}
            </div>
        </div>
    </r-modal>
</template>
<script>


    export default {
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                isSuccessful: false,
                isShowing: false,
                addresses: [],
                address: null,
                current: 'delivery',
                modal: {
                    isVisible: false,
                    current: null
                }
            };
        },
        mounted() {
            this.onModal();
        },
        methods: {
            onModal() {
            },
        },
    };
</script>
