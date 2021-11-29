<template>
    <div class="btn btn-light">Hooks {{ this.name }}</div>
</template>

<script>
export default {
    data() {
        return {
            name: "Semaraya1r",
        };
    },

    created() {

    },

    beforeCreate() {
        console.log("Before Create");
    },
};
</script>
