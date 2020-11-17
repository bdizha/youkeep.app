<template>
    <r-account>
        <a-row type="flex" justify="center">
            <a-col class="r-text-left" :xs="{ span: 24 }">
                <h3 class="r-heading">
                    Your stores history
                </h3>
                <p class="r-text-normal">
                    Find your entire stores history below
                </p>
            </a-col>
        </a-row>
    </r-account>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-account-stores',
        props: {},
        data() {
            return {};
        },
        computed: mapGetters({}),
        created() {
            this.onModal();
        },
        methods: {
            onModal() {
                let modal = {};
                modal.isVisible = true;
modal.isClosable = true;
                modal.address = null;
                modal.current = 'account-stores';

                this.$store.dispatch('base/onModal', modal);
            }
        },
    };
</script>
