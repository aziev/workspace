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
            <button v-if="auth_user && auth_user.is_admin"
                    class="btn btn-danger action-button" @click="removeUserFromDesk(user.id)">X</button>
        </div>
        <div v-else>
            <div class="free-text">
                Свободно
            </div>
            <button class="free-btn btn btn-success" @click="$parent.setDeskForAddingUser(position)">+</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user', 'position'],
        computed: {
            auth_user() {
                return this.$root.user;
            }
        },
        methods: {
            changePaymentStatus(status) {
                if (this.auth_user && this.auth_user.is_admin) {
                    axios.put('api/users/' + this.user.id, {
                        payed: status,
                    }).then(response => {
                        this.$emit('userPaymentStatusChanged', {
                            user_id: this.user.id,
                            payed: status,
                        });
                    });
                }
            },
            removeUserFromDesk(user_id) {
                if (this.auth_user && this.auth_user.is_admin) {
                    axios.put('api/users/' + this.user.id, {
                        position: null,
                    }).then(response => {
                        this.user.position = null;
                    });
                }
            }
        },
    }
</script>