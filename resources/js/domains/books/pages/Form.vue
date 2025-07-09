<template>
    <ErrorMessage />
    <div v-if="getMessage.value">
        {{ getMessage.value }}
    </div>
    <form @submit.prevent="handleSubmit">
        <label>Titel:</label>
        <input v-model="form.title" type="text" />

        <label>Samenvatting:</label>
        <textarea v-model="form.summary" required></textarea>

        <label>Auteur:</label>
        <select v-model="form.author_id" required>
            <option v-for="author in getAllAuthors" :key="author.id" :value="author.id">
                {{ author.name }}
            </option>
        </select>
        <br />
        <FormError name="title" />

        <button type="submit">Opslaan</button>
    </form>
</template>

<script setup>
import { ref } from 'vue';
import FormError from '../../../FormError.vue';
import ErrorMessage from '../../../errorMessage.vue';
import { getMessage } from '../../../services/error';
import { authorStore } from '../../authors/store';

const getAllAuthors = authorStore.getters.all;

const props = defineProps({ book: Object });

const emit = defineEmits(['submit']);

const form = ref({ ...props.book });

const handleSubmit = () => emit('submit', form.value);
</script>
