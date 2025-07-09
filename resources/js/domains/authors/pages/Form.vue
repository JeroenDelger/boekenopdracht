<template>
    <ErrorMessage />
    <form @submit.prevent="handleSubmit">
        <label>Schermnaam:</label>
        <input v-model="form.name" type="text" required />
        <label>Voornaam:</label>
        <input v-model="form.first" type="text" required />
        <label>Achternaam:</label>
        <input v-model="form.last" type="text" required />
        <label>Email:</label>
        <input v-model="form.email" type="text" required />
        <label>Wachtwoord:</label>
        <input v-model="form.password" type="text" required />
        <button type="submit">Opslaan</button>
        <br />
        <FormError name="title" />
    </form>
</template>

<script setup>
import { ref } from 'vue';
import FormError from '../../../FormError.vue';
import ErrorMessage from '../../../errorMessage.vue';

const props = defineProps({ author: Object });

const emit = defineEmits(['submit']);

const form = ref({ ...props.author });

const handleSubmit = () => emit('submit', form.value);
</script>
