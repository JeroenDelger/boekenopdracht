<template>
    <!-- TODO: stop navigatie in eigen component -->
    <nav>
        <router-link :to="{ name: 'books.overview' }">Boeken Overzicht</router-link> |
        <router-link :to="{ name: 'books.create' }">Nieuw boek toevoegen</router-link>|
        <router-link :to="{ name: 'authors.overview' }">Auteur overview</router-link>|
        <router-link :to="{ name: 'authors.create' }">Meld je aan als auteur</router-link>|
    </nav>
    <br />
    <router-view></router-view>
</template>

<script setup></script>

<style>
nav {
    text-align: left;
    padding-left: 25px;
    padding-bottom: 5px;
}
</style>
