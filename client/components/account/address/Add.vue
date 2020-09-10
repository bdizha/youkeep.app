<template>
    <a-row type="flex" justify="end">
        <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 8 }" :md="{ span: 6 }" :lg="{ span: 6 }">
            <a-button v-on:click="onModal"
                      block
                     size="default"
                      type="primary"
                      html-type="button"
                      class="r-btn-bordered-secondary">
                Add new
            </a-button>
        </a-col>
    </a-row>
</template>
<script>
    export default {
        props: {},
        data() {
            return {
                isDefault: false,
                modal: {
                    current: null,
                    isVisible: false,
                    category: null,
                    address: null,
                }
            };
        },
        computed: {},
        created() {
        },
        methods: {
            onModal() {
                let modal = {};
                modal.isVisible = true;
modal.isClosable = true;
                modal.current = 'account-address';

                this.$store.dispatch('address/onAddress', null);
                this.$store.dispatch('base/onModal', modal);
            }
        }
    };
</script>