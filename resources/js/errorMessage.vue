<template>
    <div v-if="getMessage.value">
        <b>{{ getMessage.value }}</b>
    </div>
</template>

<script setup lang="ts">
import { getMessage } from './services/error';
</script>
