<template>
    <div>
        <header-look/>
        <router-view ></router-view>
        <footer-look />
    </div>
</template>

<script>
import HeaderLook from "./components/HeaderLook.vue";
import FooterLook from "./components/FooterLook.vue";
export default {
    data() {
        let APP_NAME = process.env.MIX_APP_NAME;
        let APP_AUTHOR = process.env.MIX_APP_AUTHOR;
        let APP_URL = process.env.MIX_APP_URL;
        return {
            APP_NAME: APP_NAME,
            APP_AUTHOR: APP_AUTHOR,
            Logo_Svg: "/assets/LOGO.svg",
            APP_URL: APP_URL,
        };
    },
};
</script>
