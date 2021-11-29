<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <router-link :to="{ name: 'skills' }" class="nav-link"
                        >Skills</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'portfolio' }" class="nav-link"
                        >Portfolio</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'contact' }" class="nav-link"
                        >Something</router-link
                    >
                </li>
            </ul>
        </div>

        <div class="mx-auto">
            <div class="mx-auto">
                <router-link
                    class="navbar-brand logo-navbar"
                    :to="{ name: 'welcome' }"
                    >
                    <img :src="this.$parent.Logo_Svg" width="35px" alt="">
                    <!-- {{ this.$parent.APP_NAME }} -->
                    </router-link
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <router-link :to="{ name: 'skills' }" class="nav-link"
                        >Something</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'contact' }" class="nav-link"
                        >Contact</router-link
                    >
                </li>
                <li class="nav-item">
                   <a class="nav-link">DARK/LIGHT</a>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script></script>
