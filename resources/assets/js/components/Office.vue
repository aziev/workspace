<template>
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <table>
                <tr>
                    <td>
                        <desk :user="userByPosition(1)"></desk>
                    </td>
                    <td>
                        <desk :user="userByPosition(4)"></desk>
                    </td>
                </tr>
                <tr>
                    <td>
                        <desk :user="userByPosition(2)"></desk>
                    </td>
                    <td>
                        <desk :user="userByPosition(5)"></desk>
                    </td>
                </tr>
                <tr>
                    <td>
                        <desk :user="userByPosition(3)"></desk>
                    </td>
                    <td>
                        <desk :user="userByPosition(6)"></desk>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6 text-center">
            <table>
                <tr>
                    <td>
                        <desk :user="userByPosition(7)"></desk>
                    </td>
                    <td>
                        <desk :user="userByPosition(10)"></desk>
                    </td>
                </tr>
                <tr>
                    <td>
                        <desk :user="userByPosition(8)"></desk>
                    </td>
                    <td>
                        <desk :user="userByPosition(11)"></desk>
                    </td>
                </tr>
                <tr>
                    <td>
                        <desk :user="userByPosition(9)"></desk>
                    </td>
                    <td>
                        <desk :user="userByPosition(12)"></desk>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: [],
            };
        },
        methods: {
            userByPosition(position) {
                return _.find(this.users, u => u.position === position);
            },
        },
        mounted() {
            if (!this.users.length) {
                axios.get('api/users').then(response => {
                    this.users = response.data;
                });
            }
        }
    }
</script>