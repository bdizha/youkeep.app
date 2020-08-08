<template>
    <r-account>
        <a-row type="flex" justify="center" align="middle">
            <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-card class="r-margin-bottom-24" title="ACCOUNT INFORMATION" style="width: 100%;">
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
                            <a-button v-on:click="onModal('account-profile', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-secondary">
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
                                      type="secondary" class="r-btn-bordered-secondary">
                                Change
                            </a-button>
                        </a-col>
                    </a-row>
                </a-card>
            </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 24 }">
                <a-card class="r-margin-bottom-24" title="PERSONAL INFORMATIN" style="width: 100%;">
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
                            <a-button v-on:click="onModal('account-profile', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-secondary">
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
                            <a-button v-on:click="onModal('account-profile', $event)" block size="small"
                                      type="secondary" class="r-btn-bordered-secondary">
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
    import {mapGetters} from "vuex";
    export default {
        components: {},
        data() {
            return {};
        },
        computed: mapGetters({
            user: 'auth/user',
        }),
        created() {
        },
        methods: {
            payload() {
                // onUser
            },
            onModal(current) {
                let modal = {};
                modal.isVisible = true;
modal.isClosable = true;
                modal.current = current;

                this.$store.dispatch('base/onModal', modal);
            },
        },
    };
</script>