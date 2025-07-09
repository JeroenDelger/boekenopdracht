<template>
    <div>
        <h2>Auteur bewerken</h2>
        <Form v-if="author" :author="author" @submit="handleSubmit" />
    </div>
</template>

<script setup>
import { useRoute, useRouter } from 'vue-router';
import { authorStore } from '../store';
import Form from './Form.vue';

const route = useRoute();
const router = useRouter();

const author = authorStore.getters.getById(route.params.id);

const handleSubmit = async (data) => {
    await authorStore.actions.update(route.params.id, data);
    router.push({ name: 'authors.overview' });
};
</script>
