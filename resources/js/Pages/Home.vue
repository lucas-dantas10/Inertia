<script setup>

defineProps({ users: Object });
</script>

<template>
    <div v-for="(user, i) in users" :key="index">
        <h1>Welcome</h1>
        <p>{{ user.name }}</p>
    </div>
</template>