<template>
    <table>
        <thead>
            <tr>
                <td><b>Title</b></td>
                <td><b>Auteur</b></td>
                <td><b>Summary</b></td>
                <td><b>Book Overview</b></td>
                <td><b>Edit</b></td>
                <td><b>Delete</b></td>
            </tr>
        </thead>

        <tbody>
            <tr v-for="book in getAllBooks" :key="book.id">
                <td>{{ book.title }}</td>
                <td>{{ book.author.name }}</td>
                <td>{{ book.summary }}</td>
                <td>
                    <RouterLink :to="{ name: 'books.showbook', params: { id: book.id } }">More info</RouterLink>
                </td>
                <td>
                    <RouterLink :to="{ name: 'books.edit', params: { id: book.id } }">Bewerk</RouterLink>
                </td>
                <td><button @click="deleteBook(book.id)">Verwijder</button></td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
import { bookStore } from './store';

const deleteBook = bookStore.actions.delete;
const getAllBooks = bookStore.getters.all;
</script>

<style>
td {
    text-align: left;
    padding-left: 25px;
    padding-bottom: 5px;
}
</style>
