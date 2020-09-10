<template>
    <r-empty></r-empty>
</template>
<script>
    export default {
        props: {},
        data() {
            return {
                modal: {
                    isVisible: false,
                    current: null,
                    message: 'Welcome back. It\'s shopping time!',
                }
            };
        },
        mounted() {
            this.store = this.$store.state.store;
            this.payload();
        },
        methods: {
            payload() {
                this.modal.isVisible = true;
                this.modal.current = 'login';
                this.$store.dispatch('app/onModal', modal);
            }
        },
    };
</script>
