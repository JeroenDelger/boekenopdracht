<template>
    <table>
        <thead>
            <ErrorMessage />

            <tr>
                <td><b>Author</b></td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="author in getAllAuthors" :key="author.id">
                <td>{{ author.name }}</td>
                <td>
                    <RouterLink :to="{ name: 'authors.edit', params: { id: author.id } }">Bewerk</RouterLink>
                </td>
                <td><button @click="deleteAuthor(author.id)">Verwijder</button></td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
import ErrorMessage from '../../../errorMessage.vue';
import { authorStore } from '../store';

const deleteAuthor = authorStore.actions.delete;
const getAllAuthors = authorStore.getters.all;
</script>

<style>
td {
    text-align: left;
    padding-left: 25px;
    padding-bottom: 5px;
}
</style>
