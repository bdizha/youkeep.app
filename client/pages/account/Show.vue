<template>
    <r-account>
        <a-row type="flex" justify="center" align="middle">
            <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-card title="ACCOUNT INFORMATION" style="width: 100%; margin-bottom: 20px;">
                    <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">Email:</label>
                        </a-col>
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">{{ user.email }}</label>
                        </a-col>
                        <a-col :xs="{ span: 4 }"
                               :sm="{ span: 4 }" :lg="{ span: 4 }">
                            <a-button v-on:click="onModal('account-details', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-black">
                                Change
                            </a-button>
                        </a-col>
                    </a-row>
                    <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">Password:</label>
                        </a-col>
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">***********</label>
                        </a-col>
                        <a-col :xs="{ span: 4 }"
                               :sm="{ span: 4 }" :lg="{ span: 4 }">
                            <a-button v-on:click="onModal('account-password', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-black">
                                Change
                            </a-button>
                        </a-col>
                    </a-row>
                </a-card>
            </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 24 }">
                <a-card title="PERSONAL INFORMATIN" style="width: 100%; margin-bottom: 20px;">
                    <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">Full name:</label>
                        </a-col>
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">{{ user.name }}</label>
                        </a-col>
                        <a-col :xs="{ span: 4 }"
                               :sm="{ span: 4 }" :lg="{ span: 4 }">
                            <a-button v-on:click="onModal('account-details', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-black">
                                Change
                            </a-button>
                        </a-col>
                    </a-row>
                    <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">Mobile:</label>
                        </a-col>
                        <a-col :xs="{ span: 10 }"
                               :sm="{ span: 10 }" :lg="{ span: 10 }">
                            <label class="r-heading-light">{{ user.phone_number }}</label>
                        </a-col>
                        <a-col :xs="{ span: 4 }"
                               :sm="{ span: 4 }" :lg="{ span: 4 }">
                            <a-button v-on:click="onModal('account-details', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-black">
                                Change
                            </a-button>
                        </a-col>
                    </a-row>
                </a-card>
            </a-col>
        </a-row>
    </r-account>
</template>
<script>
    export default {
      name: 'r-account-show',
        components: {},
        data() {
            return {
                modal: {
                    current: null,
                    isVisible: false
                }
            };
        },
        computed: {
            user() {
                return this.$store.state.user;
            },
        },
        mounted() {
        },
        methods: {
            payload() {
                // onUser
            },
            onModal(current) {
                this.modal.isVisible = true;
                this.modal.current = current;
                this.$store.dispatch('app/onModal', modal);
            },
        },
    };
</script>
