<template>
    <div>
        <button @click="updateCounter(1)" class="btn btn-success">Up</button>
        <button @click="updateCounter(-1)" class="btn btn-success">Down</button>
        <p id="Result">{{ count }}</p>
    </div>
</template>
<script>
export default {
    data() {
        return {
            count: 0,
        };
    },
    methods: {
        updateCounter(number) {
            this.count += number;
        },
    },
    created() {
        this.count = 100;
    },
};
</script>
