<template>
    <div class="container">
        <div class="row align-content-center justify-content-center">
            <div class="col-6">
                <h1>Вход на сайт</h1>
                <form>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Введите email"
                            v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Пароль</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Пароль"
                            v-model="password">
                    </div>
                    <button type="submit" class="btn btn-primary" @click.prevent="submitForm">Войти</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: '',
            };
        },
        methods: {
            submitForm() {
                axios.post('api/auth/login', {
                    email: this.email,
                    password: this.password,
                }).then(response => {

                    this.$emit('logged-in', {
                        token: response.data.access_token,
                        user: response.data.user,
                    });

                    this.$router.push('/')
                });
            },
        },
        mounted() {
            if (this.$root.user) {
                this.$router.push('/');
            }
        },
    }
</script>