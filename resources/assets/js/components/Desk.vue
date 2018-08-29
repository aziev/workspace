<template>
    <div class="desk align-items-center justify-content-center">
        <div v-if="user">
            <img :src="user.avatar ? user.avatar : 'img/placeholder.jpg'" alt="">
            <div class="status-bar" :class="user.payed ? 'status-bar--payed' : 'status-bar--waiting'">{{ user.name }}</div>
        </div>
        <div v-else>Свободно</div>
        <div v-if="auth_user && auth_user.is_admin && user">
            <button v-if="user.payed" class="action-button btn btn-danger"
                    @click="changePaymentStatus(false)">×</button>
            <button v-else class="action-button btn btn-success"
                    @click="changePaymentStatus(true)">✓</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        computed: {
            auth_user() {
                return this.$root._data.user;
            }
        },
        methods: {
            changePaymentStatus(status) {
                axios.put('api/users/' + this.user.id, {
                    status: status,
                }).then(response => {
                    this.$emit('userPaymentStatusChanged', {
                        user_id: this.user.id,
                        payed: status,
                    });
                });
            },
        },
    }
</script>