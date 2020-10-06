<template>
    <r-account>
        <a-row type="flex" justify="start" align="middle">
            <a-col class="gutter-row" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-card title="INVITE A FRIEND" style="width: 100%; margin-bottom: 20px;">
                    <a-row type="flex" justify="start" align="start">
                        <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
                               :sm="{ span: 24 }" :lg="{ span: 12 }">
                            <h4 class="r-heading-light">
                                Bring 1 friend, get R100!
                            </h4>
                        </a-col>
                    </a-row>
                </a-card>
            </a-col>
        </a-row>
        <a-row class="r-mt-24" :gutter="24" type="flex" justify="end">
            <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 18 }" :lg="{ span: 18 }">

            </a-col>
            <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 6 }">
                <a-button block type="secondary"
                          :class="'r-btn-black'"
                          size="large"
                          html-type="button">
                    Invite
                </a-button>
            </a-col>
        </a-row>
    </r-account>
</template>
<script>
    export default {
      name: 'r-account-invite',
        components: {},
        data() {
            return {
                formLayout: 'horizontal',
                formInvite: this.$form.createForm(this, {name: 'form_invite'}),
                modal: {
                    current: null,
                    isVisible: false
                }
            };
        },
        methods: {},
    };
</script>
