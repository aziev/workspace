<template>
    <div class="desk align-items-center justify-content-center">
        <div v-if="user">
            <img :src="user.avatar ? user.avatar : 'img/placeholder.jpg'" alt="">
            <div class="status-bar" :class="user.payed ? 'status-bar--payed' : 'status-bar--waiting'">{{ user.name }}</div>
        </div>
        <div v-else>Свободно</div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
    }
</script>