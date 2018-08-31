<template>
    <div>
        <div class="row justify-content-center mb-4">
            <div class="col-6 text-center" v-for="table_index in 2">
                <table>
                    <tr v-for="row_index in 3">
                        <td v-for="cell_index in 2">
                            <desk :user="userByPosition(row_index + (3 * (cell_index-1)) + (6 * (table_index-1)))"
                                  :position="row_index + (3 * (cell_index-1)) + (6 * (table_index-1))"
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
                <div class="unassigned-user mr-3" v-for="user in unassigned_users" @click="moveUserToDesk(user)"
                     :class="desk_for_adding_user ? 'highlight' : ''">
                    <img :src="user.avatar ? user.avatar : 'img/placeholder.jpg'" alt="">
                    <span>{{ user.name }}</span>
                </div>
            </div>
            <div class="row" v-if="desk_for_adding_user">
                <span class="text-secondary mr-2">Кликните на чувака, которого надо туда
                    посадить</span>
                <a href="" @click.prevent="desk_for_adding_user = null">Отмена</a>
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
                desk_for_adding_user: null,
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
            setDeskForAddingUser(position) {
                this.desk_for_adding_user = position;
            },
            moveUserToDesk(user) {
                if (this.desk_for_adding_user) {
                    axios.put('api/users/' + user.id, {
                        position: this.desk_for_adding_user,
                    }).then(response => {
                        user.position = this.desk_for_adding_user;
                        this.desk_for_adding_user = null;
                    });
                }
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