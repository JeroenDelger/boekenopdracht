<template>
    <div v-for="error in getErrorByProperty(name).value" :key="error">
        <b>{{ error }}</b>
    </div>
</template>

<script setup lang="ts">
import { getErrorByProperty } from './services/error';

defineProps<{ name: string }>();
</script>
