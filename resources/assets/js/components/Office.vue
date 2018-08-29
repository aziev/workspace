<template>
    <div class="row justify-content-center">
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

    }
</script>