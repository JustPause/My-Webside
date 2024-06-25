<script setup>
import Menu from './TopBar/Menu.vue'
import UserTheme from './TopBar/UserTheme.vue'
</script>

<template>
    <div class="menu-container">
        <Menu />

        <UserTheme />

    </div>
</template>

<style>
.menu-container {
    width: 100%;
    max-width: 120rem;
    grid-column-gap: .5rem;
    grid-row-gap: .5rem;
    justify-content: flex-end;
    margin-left: auto;
    margin-right: auto;
    padding-top: 2rem;
    padding-right: 2rem;
    display: flex;
    position: relative;
}

header {
    line-height: 1.5;
    display: inline;
}

@media (min-width: 1024px) {
    header {
        display: flex;
        place-items: center;
        padding-right: calc(var(--section-gap) / 2);
    }

    .logo {
        margin: 0 2rem 0 0;
    }

    header .wrapper {
        display: flex;
        place-items: flex-start;
        flex-wrap: wrap;
    }
}
</style>