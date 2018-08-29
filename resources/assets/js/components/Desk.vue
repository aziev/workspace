<template>
    <div>
        <div v-if="user">
            <img :src="user.avatar ? user.avatar : 'img/placeholder.jpg'" alt="">
            <div class="status" :class="user.payed ? 'status-payed' : 'status-waiting'">{{ user.name }}</div>
        </div>
        <div v-else>Свободно</div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
    }
</script>