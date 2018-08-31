<template>
    <div>
        <div class="row justify-content-center mb-4">
            <div class="col-6 text-center" v-for="table_index in 2">
                <table>
                    <tr v-for="row_index in 3">
                        <td v-for="cell_index in 2">
                            <desk :user="userByPosition(row_index + (3 * (cell_index-1)) + (6 * (table_index-1)))"
                                  @userPaymentStatusChanged="updateUser"></desk>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <template v-if="unassigned_users.length">
            <div class="row">
                <h4>За бортом:</h4>
            </div>
            <div class="row justify-content-start">
                <div class="unassigned-user mr-3" v-for="user in unassigned_users">
                    <img :src="user.avatar ? user.avatar : 'img/placeholder.jpg'" alt="">
                    <span>{{ user.name }}</span>
                </div>
            </div>
        </template>
    </div>
</template>

<script>
    export default {
        props: ['auth_user'],
        data() {
            return {
                users: [],
            };
        },
        methods: {
            userByPosition(position) {
                return _.find(this.users, u => u.position === position);
            },
            updateUser(event) {
                let user = _.find(this.users, u => u.id === event.user_id);
                user.payed = event.payed;
            },
        },
        created() {
            if (!this.users.length) {
                axios.get('api/users').then(response => {
                    this.users = response.data;
                });
            }
        },
        computed: {
            unassigned_users() {
                return _.filter(this.users, u => !u.position);
            },
        },
    }
</script>