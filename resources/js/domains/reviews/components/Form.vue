<template>
    <ErrorMessage />
    <form @submit.prevent="handleSubmit">
        <label><b>Review</b></label>
        <br />
        <textarea v-model="form.review" type="text" required />
        <br />
        <label><b>Auteur:</b></label>
        <br />
        <select v-model="form.author_id" required>
            <option v-for="author in getAllAuthors" :key="author.id" :value="author.id">
                {{ author.name }}
            </option>
        </select>
        <br />
        <FormError name="title" />

        <button type="submit"><b>Opslaan</b></button>
    </form>
</template>

<script setup>
import { ref } from 'vue';
import FormError from '../../../FormError.vue';
import ErrorMessage from '../../../errorMessage.vue';
import { authorStore } from '../../authors/store';

const getAllAuthors = authorStore.getters.all;

const props = defineProps({ review: Object });

const emit = defineEmits(['submit']);

const form = ref({ ...props.review });

const handleSubmit = () => emit('submit', form.value);
</script>
