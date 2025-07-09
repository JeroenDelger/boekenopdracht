<template>
    <div>
        <h2>Nieuw boek toevoegen</h2>
        <Form :book="book" @submit="handleSubmit" />
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import Form from './Form.vue';
import { bookStore } from './store';

const router = useRouter();

const book = ref({
    title: '',
    summary: '',
    author_id: null,
});

const handleSubmit = async (data) => {
    await bookStore.actions.create(data);
    router.push({ name: 'books.overview' });
};
</script>
