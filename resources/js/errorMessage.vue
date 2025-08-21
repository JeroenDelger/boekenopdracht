<template>
    <!-- TODO: .value kan weg want in template wordt dit automatisch ge-unwrapt -->
    <div v-if="getMessage.value">
        <b>{{ getMessage.value }}</b>
    </div>
</template>

<script setup lang="ts">
import { getMessage } from './services/error';
</script>

<!-- TODO: dit bestand zou ik in de services/error map verwachten -->
 <!-- TODO: filename moet denk ik ErrorMessage zijn? -->

