<template>
    <div class="desk align-items-center justify-content-center">
        <div v-if="user">
            <img :src="user.avatar ? user.avatar : 'img/placeholder.jpg'" alt="">
            <div class="status-bar"
                 :class="{
                    'status-bar--clickable': auth_user && auth_user.is_admin,
                    'status-bar--payed': user.payed,
                    'status-bar--waiting': !user.payed,
                 }"
                 @click="changePaymentStatus(!user.payed)">{{ user.name }}</div>
        </div>
        <div v-else>Свободно</div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        computed: {
            auth_user() {
                return this.$root.user;
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