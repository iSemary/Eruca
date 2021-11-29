<template>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img
                    class="mb-2"
                    :src="this.$parent.Logo_Svg"
                    alt=""
                    width="60"
                />
                <h4 class="footer-logo">{{ this.$parent.APP_NAME }}</h4>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contact</h5>
                <ul class="contact-list d-flex ps-0">
                    <li class="justify-center flex mx-2"><a href="https://www.linkedin.com/in/isemary/"><fa :icon="['fab', 'linkedin']"></fa></a></li>
                    <li class="justify-center flex mx-2"><a href="https://github.com/iSemary"><fa :icon="['fab', 'github']"></fa></a></li>
                    <li class="justify-center flex mx-2"><a href="https://www.behance.net/isemary"><fa :icon="['fab', 'behance-square']"></fa></a></li>
                    <li class="justify-center flex mx-2"><a href="mailto:lesemary123@gmail.com"><fa :icon="['fas', 'envelope']"></fa></a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-muted ">
            All Rights Reserved
            <b class="text-primary">{{
                this.$parent.APP_NAME + " By " + this.$parent.APP_AUTHOR
            }}</b>
            © 2021
        </div>
    </footer>
</template>
