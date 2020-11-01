<template>
    <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
            <label v-show="instruction" for="r-user-register" class="r-text-sm r-text-label">{{ instruction }}</label>
            <a-button id="r-user-register" v-on:click="onModal"
                      block
                      :size="size"
                      type="secondary"
                      class="r-btn-bordered-primary">
                <a-icon type="user"/>
                Sign up
            </a-button>
        </a-col>
    </a-row>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-auth-actions-register',
        props: {
            instruction: {type: String, required: false, default: null},
            size: {type: String, required: false, default: 'default'},
        },
        data() {
            return {};
        },
        computed: mapGetters({}),
        created() {
            this.payload();
        },
        methods: {
            payload() {
            },
            onModal() {
                let modal = {};
                modal.isVisible = true;
modal.isClosable = true;
                modal.current = 'register';

                this.$store.dispatch('base/onModal', modal);
            },
        },
        watch: {},
    };
</script>
