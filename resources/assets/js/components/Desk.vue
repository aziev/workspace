<template>
    <div>
        <img :src="user.avatar" alt="">
        <div class="status" :class="user.payed ? 'status-payed' : 'status-waiting'">{{ user.name }}</div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>