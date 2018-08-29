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
                        <!--<img src="{{ asset('img/ahmed_chergizov.jpg') }}" alt="">-->
                        <!--<div class="status status-waiting">Ч. Ахмед</div>-->
                    </td>
                    <td>
                        <!--<img src="{{ asset('img/placeholder.jpg') }}" alt="">-->
                        <!--<div class="status status-waiting">Яхья</div>-->
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--<img src="{{ asset('img/khavazh_archakov.jpg') }}" alt="">-->
                        <!--<div class="status status-waiting">А. Хаваж</div>-->
                    </td>
                    <td>Свободно</td>
                </tr>
            </table>
        </div>
        <div class="col-6 text-center">
            <table>
                <tr>
                    <td>Свободно</td>
                    <td>
                        <!--<img src="{{ asset('img/berd_aziev.jpg') }}" alt="">-->
                        <!--<div class="status status-payed">А. Берд</div>-->
                    </td>
                </tr>
                <tr>
                    <td>Свободно</td>
                    <td>
                        <!--<img src="{{ asset('img/mikail_aziev.jpg') }}" alt="">-->
                        <!--<div class="status status-waiting">А. Микаил</div>-->
                    </td>
                </tr>
                <tr>
                    <td>Свободно</td>
                    <td>
                        <!--<img src="{{ asset('img/placeholder.jpg') }}" alt="">-->
                        <!--<div class="status status-waiting">Д. Абдулла</div>-->
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
                users: [{
                    name: 'А. Ибрагим',
                    avatar: 'img/ibragim_aziev.jpg',
                    position: 1,
                    payed: true,
                }, {
                    name: 'Т. Ахмед',
                    avatar: 'img/ahmed_timurziev.jpg',
                    position: 4,
                    payed: false,
                }],
            };
        },
        methods: {
            userByPosition(position) {
                return _.find(this.users, u => u.position === position);
            },
        },
    }
</script>