<template>
    <div>
        <h2>Nieuwe review toevoegen</h2>
        <Form :review="review" @submit="handleSubmit" />
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import Form from '../components/Form.vue';
import { reviewStore } from '../store';

const router = useRouter();
const route = useRoute();

const review = ref({
    review: '',
    author_id: '',
    book_id: route.params.id,
});

const handleSubmit = async (data) => {
    await reviewStore.actions.create(data);
    router.push({ name: 'books.showbook' });
};
</script>
